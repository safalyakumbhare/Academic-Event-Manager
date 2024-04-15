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

    // Convert user input requirements to a list of required values
    $requiredRequirements = [];
    if (isset($_POST['ground'])) $requiredRequirements[] = 'ground';
    if (isset($_POST['sportroom'])) $requiredRequirements[] = 'sportroom';
    if (isset($_POST['auditorium'])) $requiredRequirements[] = 'auditorium';
    if (isset($_POST['sound'])) $requiredRequirements[] = 'sound';
    if (isset($_POST['photo'])) $requiredRequirements[] = 'photo';
    if (isset($_POST['video'])) $requiredRequirements[] = 'video';

    // Query the `requirement` table to check for conflicts
    $conflictFound = false;
    foreach ($requiredRequirements as $requirement) {
        $checkConflictQuery = "SELECT * FROM `requirement` WHERE `{$requirement}` = 'YES' 
            AND ((`from` BETWEEN '$startdate' AND '$enddate') 
            OR (`to` BETWEEN '$startdate' AND '$enddate'))";
        $result = mysqli_query($conn, $checkConflictQuery);

        // If there are existing records with the same requirement and overlapping dates
        if (mysqli_num_rows($result) > 0) {
            $conflictFound = true;
            break;
        }
    }

    // If conflict is found, show alert and do not proceed
    if ($conflictFound) {
        echo "<script>alert('One or more requirements are already booked for the given dates. Please choose different requirements or dates.');</script>";
        include("NewActivity.php");
    } else {
        // Proceed with inserting data into `activity` and `requirement` tables if no conflict
        $sql_activity = "INSERT INTO `activity` VALUES ('$actname','$actdes','$startdate','$enddate','$place','$time','$orgby','Pending')";
        $result_activity = mysqli_query($conn, $sql_activity);

        // Check if the first query was successful before proceeding
        if ($result_activity == 1) {
            // Inserting into `requirement` table
            $ground = isset($_POST['ground']) ? 'YES' : 'NO';
            $sportroom = isset($_POST['sportroom']) ? 'YES' : 'NO';
            $auditorium = isset($_POST['auditorium']) ? 'YES' : 'NO';
            $sound = isset($_POST['sound']) ? 'YES' : 'NO';
            $photo = isset($_POST['photo']) ? 'YES' : 'NO';
            $video = isset($_POST['video']) ? 'YES' : 'NO';

            // Second SQL Query for inserting into `requirement` table
            $sql_requirement = "INSERT INTO `requirement` VALUES ('$actname','$ground','$sportroom','$auditorium','$sound','$photo','$video','$startdate','$enddate')";
            $result_requirement = mysqli_query($conn, $sql_requirement);

            if ($result_requirement == 1) {
                echo "<script>alert('Activity Recorded. Now Go to Budget Section');</script>";
                include("budget.php");
            } else {
                echo "Error inserting data into 'requirement' table: " . mysqli_error($conn);
            }
        } else {
            echo "Error inserting data into 'activity' table: " . mysqli_error($conn);
        }
    }
}
?>
