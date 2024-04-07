<?php
require_once ('connection.php');
include ("login.php");
$user = $_SESSION['name'];
$result = mysqli_query($conn, "SELECT `name` FROM `login` WHERE username = '$user'");
$res = mysqli_fetch_assoc($result);
$name = $res

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="header.css">
</head>

<body>

    <div class="Task">
        <nav>
            <Ul class="heading">
                <a href="index.php">
                    <Li class="head">Academic event managment</Li>
                </a>
            </Ul>
            <ul>
                <li>Welcome
                    <?php echo implode($name); ?>
                </li>
                <!-- <li><a href="#">Principal</a></li>
            <li><a href="#">HoD login</a></li>
            <li><a href="#">Faculty</a></li> -->

                <img src="icons8-menu-50.png" class="dot" onclick="toggleMenu()">
            </ul>
            <div class="sub-menu-wrap" id="submenu">
                <div class="sub-menu">
                    <div class="user info">

                    </div>
                    <a href="logout.php" class="menu-link">
                        <img src="icons8-login-50.png">
                        <P>Log Out</P>
                        <span>></span>
                    </a>
                    <a href="ChangePass.php" class="menu-link">
                        <img src="image.png">
                        <P>Change Password</P>
                        <span>></span>
                    </a>
                    <!-- <a href="#" class="menu-link">
                        <img src="icons8-about-24.png">
                        <P>About us</P>
                        <span>></span>
                    </a> -->
                    <!-- <a href="#" class="menu-link">
                        <img src="icons8-phone-50.png">
                        <P>Contact us</P>
                        <span>></span>
                    </a> -->
                </div>
            </div>

        </nav>
    </div>
    <script>
        let submenu = document.getElementById("submenu");
        function toggleMenu() {
            submenu.classList.toggle("open-menu");
        }
    </script>

</body>

</html>