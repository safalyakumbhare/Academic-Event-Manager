<?php
include ("connection.php");
if (isset ($_POST['submit'])) {
    $name = $_POST['Name'];
    $dept = $_POST['department'];
    $username = $_POST['userId'];
    $password = $_POST['password'];


    $sql = "INSERT INTO login VALUES ('Faculty','$name','$dept','$username','$password')";

    $result = mysqli_query($conn, $sql);

    if ($result == 1) {
        echo "<script>alert('$name Added Successfully')</script>";
        include ("AdminHome.php");

    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}
?>