<?php
include("connection.php");
session_start();

if (isset($_POST['sendact'])) {
    $actname = $_POST['activityName'];
    $actdes = $_POST['activitydes'];
    $startdate = $_POST['startDate'];
    $enddate = $_POST['endDate'];
    $place = $_POST['place'];
    $time = $_POST['time'];
    $orgby = $_POST['organizer'];
    $_SESSION['actname'] =  $actname;

    // Check resource availability
    $requiredResources = array(
        'ground' => isset($_POST['ground']),
        'sportroom' => isset($_POST['sportroom']),
        'auditorium' => isset($_POST['auditorium']),
        'sound' => isset($_POST['sound']),
        'photo' => isset($_POST['photo']),
        'video' => isset($_POST['video'])
    );

    if (!checkResourceAvailability($conn, $startdate, $enddate, $requiredResources)) {
        echo "<script>alert('Some of the resources are not available on the selected date. Please choose a different date.')</script>";
        exit; // Stop further execution
    }

    // First SQL Query for inserting into 'activity' table
    $sql_activity = "INSERT INTO `activity` VALUES ('$actname','$actdes','$startdate','$enddate','$place','$time','$orgby','YES')";
    $result_activity = mysqli_query($conn, $sql_activity);

    // Check if the first query was successful before proceeding
    if ($result_activity) {
        // Inserting into 'requirement' table
        $ground = $requiredResources['ground'] ? 'YES' : 'NO';
        $sportroom = $requiredResources['sportroom'] ? 'YES' : 'NO';
        $auditorium = $requiredResources['auditorium'] ? 'YES' : 'NO';
        $sound = $requiredResources['sound'] ? 'YES' : 'NO';
        $photo = $requiredResources['photo'] ? 'YES' : 'NO';
        $video = $requiredResources['video'] ? 'YES' : 'NO';

        // Second SQL Query for inserting into 'requirement' table
        $sql_requirement = "INSERT INTO `requirement` VALUES ('$actname','$ground','$sportroom','$auditorium','$sound','$photo','$video','$startdate','$enddate')";
        $result_requirement = mysqli_query($conn, $sql_requirement);

        if ($result_requirement) {
            echo "<script>alert('Activity Recorded. Now Go to Budget Section')</script>";
            include("budget.php");
        } else {
            echo "Error inserting data into 'requirement' table: " . mysqli_error($conn);
        }
    } else {
        echo "Error inserting data into 'activity' table: " . mysqli_error($conn);
    }
}

function checkResourceAvailability($conn, $startdate, $enddate, $requiredResources)
{
    foreach ($requiredResources as $resource => $required) {
        if ($required) {
            $sql_check = "SELECT * FROM `requirement` WHERE `{$resource}` = 'YES' AND (`startdate` BETWEEN '$startdate' AND '$enddate' OR `enddate` BETWEEN '$startdate' AND '$enddate')";
            $result_check = mysqli_query($conn, $sql_check);
            if (mysqli_num_rows($result_check) > 0) {
                return false; // Resource not available
            }
        }
    }
    return true; // All resources available
}
?>
