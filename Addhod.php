<?php
include ("connection.php");
if (isset($_POST['send'])) {
    $name = $_POST['Name'];
    $dept = $_POST['department'];
    $username = $_POST['userId'];
    $password = $_POST['password'];


    $sql = "INSERT INTO login VALUES ('Hod','$name','$dept','$username','$password')";

    $result = mysqli_query($conn, $sql);

    if ($result == 1) {
        echo "<script>alert('New Hod $name Added Successfully')</script>";
        include ("HomeAdmin.php");

    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}
?>