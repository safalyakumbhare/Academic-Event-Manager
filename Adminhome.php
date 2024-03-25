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
        background-color: aliceblue;

    }

    .container {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .box1,
    .box2,
    .box3 {
        border: 1px solid lightgray;
        background-color: aliceblue;
        color: black;
        height: 35vh;
        width: 25vw;
        margin: 1vw;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
    }

    p {
        color: #000;
    }
</style>

<body>
    <div class="content">
        <div class="container">
            <a href="New Hod.php">
                <div class="box1">
                    <h2>New Hod</h2>
                    <p>Get Register Your New Hod</p>
                </div>
            </a>
            <a href="New Faculty.php">
                <div class="box2">
                    <h2>New Faculty</h2>
                    <p>Get RegisterYour New Faculty</p>
                </div>
            </a>
            <a href="">
                <div class="box3">
                    <h2>Show Events</h2>
                    <p>See Status and Upcoming Events.</p>
                </div>
            </a>

        </div>
    </div>
</body>

</html>