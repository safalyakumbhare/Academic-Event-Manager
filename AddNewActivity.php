<?php

include ("connection.php");
if (isset($_POST['sendact'])) {
    $actname = $_POST['activityName'];
    $actdes = $_POST['activitydes'];
    $startdate = $_POST['startDate'];
    $enddate = $_POST['endDate'];
    $place = $_POST['place'];
    $time = $_POST['time'];
    $orgby = $_POST['organizer'];

    $sql = "INSERT INTO `activity` VALUES ('$actname','$actdes','$startdate','$enddate','$place','$time','$orgby','YES')";

    $result = mysqli_query($conn, $sql);

    if ($result == 1) {
        echo "<script>alert('Activity Recorded Sent to HOD Successfully')</script>";
        include ("HomeFaculty.php");

    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

}


?>