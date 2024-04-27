<?php
include ("connection.php");
if (isset ($_POST['send'])) {
    $name = $_POST['Name'];
    $dept = $_POST['department'];
    $username = $_POST['userId'];
    $password = $_POST['password'];


    $sql = "INSERT INTO login VALUES ('Faculty','$name','$dept','$username','$password')";

    $result = mysqli_query($conn, $sql);

    if ($result == 1) {
        echo "<script>alert('New Faculty $name Added Successfully');
        window.location.href='HomeAdmin.php';</script>";
        // include ("HomeAdmin.php");

    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}
?>