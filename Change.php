<?php
include ("connection.php");

if (isset($_POST['change'])) {

    $userid = $_POST['userid'];
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];

    $sql = "UPDATE `login` SET `password`='$newpass' WHERE `password` = '$oldpass'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Password Changed');</script>";
    } else {
        echo "Error";
    }
}
?>