<?php
include ("connection.php");

    $name = $_POST['hodName'];
    $dept = $_POST['department'];
    $username = $_POST['userId'];
    $password = $_POST['password'];


    $sql = "INSERT INTO login VALUES ('$name','$dept','$username','$password')";

    $result = mysqli_query($conn,$sql);

    if ($result==1){
        echo "<script>alert('Data Inserted Successfully')</script>";
        header("Location: AdminHome.php");
        }else{
            echo  "Error inserting data: ".mysqli_error($conn);
        }

?>