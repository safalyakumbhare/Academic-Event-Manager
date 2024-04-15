<?php
include ("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rejection Remark</title>
    <link rel="stylesheet" href="NewActivity.css">
</head>

<body>
    <div class="container">
        <h2>Rejection Remark Form</h2>
        <form id="activityForm" action="AddNewActivity.php" method="POST">
            <div class="form-group">
                <label for="activityName">Enter Remark for Rejection:</label>
                <input type="text" id="activityName" name="activityName" required />
            </div>
            
            <input type="submit" id="submit" name="sendact" />


        </form>
    </div>
</body>

</html>