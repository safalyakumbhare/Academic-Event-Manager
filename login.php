<?php

include ("connection.php");

if (isset ($_POST['submit'])) {
    $role = $_POST["role"];
    switch ($role) {
        case "Principal":
            $desig = "Principal";

            break;
        case "HOD":
            $desig = "HOD";

            break;
        case "Faculty":
            $desig = "Faculty";

            break;
        default:
            break;
    }
    $username = $_POST['user'];
    $password = $_POST['pass'];



    $sql = "SELECT * FROM login WHERE desig = '$desig' AND username = '$username' AND password='$password';";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        switch ($role) {
            case 'Principal':
                header("Location: AdminHome.php");
                break;
            case 'HOD':
                header("Location: HODHome.php");
                break;
            case 'Faculty':
                header("Location: FacultyHome.php");
                break;
        }
    } else {
        echo '<script>alert("Invalid Username or Password")</script>';
        include ("loginpage.php");
    }
}


?>