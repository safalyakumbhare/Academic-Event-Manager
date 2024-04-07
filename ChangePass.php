<?php
  require_once("connection.php");
 include("header.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Password</title>
  <link rel="stylesheet" href="New.css">
</head>
<body>
  <div class="container">
    <h1>Change Password</h1>
    <form action="Change.php" method="POST" class="registration-form">
        <label for="crntpass">Current Password : </label>
        <input type="password" id="crntpass" name="oldpass" required>

        <label for="newpass">New Password: </label>
        <input type="password" id="newpass" name="newpass" required/>
        
        <label for="conpass">Confirm Password: </label>
        <input type="password" id="conpass" name="conpass" required>

        <input type="submit" name="change" value="Change Password">
    </form>
  </div>
</body>
</html>

  </div>
</body>
</html>