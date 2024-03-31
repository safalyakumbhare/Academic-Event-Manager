<?php

include("connection.php");

if (isset($_POST['sendact'])) {
    $actname = $_POST['activityName'];
    $actdes = $_POST['activitydes'];
    $startdate = $_POST['startDate'];
    $enddate = $_POST['endDate'];
    $place = $_POST['place'];
    $time = $_POST['time'];
    $orgby = $_POST['organizer'];

    // First SQL Query for inserting into 'activity' table
    $sql_activity = "INSERT INTO `activity` VALUES ('$actname','$actdes','$startdate','$enddate','$place','$time','$orgby','YES')";
    $result_activity = mysqli_query($conn, $sql_activity);

    // Check if the first query was successful before proceeding
    if ($result_activity) {
        // Inserting into 'requirement' table
        $ground = isset($_POST['ground']) ? 'YES' : 'NO';
        $sportroom = isset($_POST['sportroom']) ? 'YES' : 'NO';
        $auditorium = isset($_POST['auditorium']) ? 'YES' : 'NO';
        $sound = isset($_POST['sound']) ? 'YES' : 'NO';
        $photo = isset($_POST['photo']) ? 'YES' : 'NO';
        $video = isset($_POST['video']) ? 'YES' : 'NO';

        // Second SQL Query for inserting into 'requirement' table
        $sql_requirement = "INSERT INTO `requirement` VALUES ('$actname','$ground','$sportroom','$auditorium','$sound','$photo','$video','$startdate','$enddate')";
        $result_requirement = mysqli_query($conn, $sql_requirement);

        if ($result_requirement) {
            echo "<script>alert('Activity Recorded Sent to HOD Successfully')</script>";
            include("HomeFaculty.php");
        } else {
            echo "Error inserting data into 'requirement' table: " . mysqli_error($conn);
        }
    } else {
        echo "Error inserting data into 'activity' table: " . mysqli_error($conn);
    }
}

?>
