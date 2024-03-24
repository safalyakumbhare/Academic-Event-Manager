<?php
include ("header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<style>
    .content {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 88.2vh;
        width: 100vw;
        background-color: aqua;

    }

    .container {


    }

    .box1,
    .box2,
    .box3 {
        height: 25vh;
        width: 35vw;
        background-color: blue;
    }
</style>

<body>
    <div class="content">
        <div class="container">
            <a href="">
                <div class="box1"></div>
            </a><a href="">
                <div class="box2"></div>
            </a><a href="">
                <div class="box3"></div>
            </a>
        </div>
    </div>
</body>

</html>