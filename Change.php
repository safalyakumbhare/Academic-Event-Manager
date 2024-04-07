<?php
include("connection.php");
include("login.php");
$user = $_SESSION['name'];
if (isset($_POST['change'])) {
    $userid = $user;
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $confirmpass = $_POST['conpass'];

   
    if ($newpass !== $confirmpass) {
        echo "<script>alert('New Password and Confirm Password do not match');</script>";
    } else {
        
        $sql = "SELECT * FROM `login` WHERE `username`='$userid' AND `password`='$oldpass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            // Update password
            $update_sql = "UPDATE `login` SET `password`='$newpass' WHERE `username`='$userid'";
            $update_result = mysqli_query($conn, $update_sql);

            if ($update_result) {
                echo "<script>alert('Password Changed');</script>";
            } else {
                echo "<script>alert('Error in updating password');</script>";
            }
        } else {
            echo "<script>alert('Incorrect Current Password');</script>";
        }
    }
}
?>
