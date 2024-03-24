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
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .box1,
    .box2,
    .box3 {
        height: 35vh;
        width: 25vw;
        margin: 1vw;
        display:flex;
        align-items: center;
        justify-content: center;
        background-color: blue;
    }
</style>

<body>
    <div class="content">
        <div class="container">
            <a href="New Hod.php"><div class="box1"><h2>New Hod</h2></div></a>
            <a href=""><div class="box2"><h2>New Faculty</h2></div></a>
            <a href=""><div class="box3"><h2>Show Events</h2></div></a>
            
        </div>
    </div>
</body>

</html>