<?php
 include("header.php")

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
        <label r ID :</label>
        <input type="text" name="useridr="userid">Useerid">

        <label for="oldpass">Old Password: </label>
        <input type="password" id="oldpass" name="oldpass"/>
        
        <label for="newpass">New Password: </label>
        <input type="text" name="newpass">

        <input type="submit" name="changepass">

    </form>
    </form>
  </div>
</body>
</html>