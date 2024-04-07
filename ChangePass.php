<?php
  require_once("connection.php");
 include("header.php");

 if(isset($_POST['changepass'])){
    $crnt = $_POST['crntpass'];
    $nw = $_POST['newpass'];
    $cnf = $_POST['conpass'];
 }
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
    <form action="" method="POST" class="registration-form">
        <label for="crntpass">Current Password : </label>
        <input type="password" id="crntpass" name=""crntpass" required>

        <label for="newpass">New Password: </label>
        <input type="password" id="newpass" name="newpass" required/>
        
        <label for="conpass">Confirm Password: </label>
        <input type="text" id="conpass" name="conpass" required>

        <input type="submit" name="changepass">

    </form>
    </form>
  </div>
</body>
</html>