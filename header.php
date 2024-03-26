<?php
    include('login.php');
    $name = $_SESSION['name'];

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
                <Li class="head">Academic event managment</Li>
            </Ul>
            <ul>
                <li>Welcome <?php echo "$name";?></li>
                <!-- <li><a href="#">Principal</a></li>
            <li><a href="#">HoD login</a></li>
            <li><a href="#">Faculty</a></li> -->

                <img src="icons8-menu-50.png" class="dot" onclick="toggleMenu()">
            </ul>
            <div class="sub-menu-wrap" id="submenu">
                <div class="sub-menu">
                    <div class="user info">

                    </div>
                    <a href="loginpage.php" class="menu-link">
                        <img src="icons8-login-50.png">
                        <P>Log Out</P>
                        <!-- <span>></span> -->
                    </a>
                    <!-- <a href="#" class="menu-link">
                        <img src="icons8-services-30.png">
                        <P>Services</P>
                        <span>></span>
                    </a> -->
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