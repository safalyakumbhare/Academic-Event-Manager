<?php

  include("header.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HoD Registration</title>
  <link rel="stylesheet" href="New.css">
</head>
<body>
  <div class="container">
    <h1>New Faculty regestration</h1>
    <form class="registration-form">
      <label for="hodName">Name of Faculty:</label>
      <input type="text" id="hodName" name="hodName">

      <label for="department">Department:</label>
      <input type="text" id="department" name="department">

      <label for="userId">User ID:</label>
      <input type="text" id="userId" name="userId">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password">

      <button type="submit">Register</button>
      <button type="button" class="cancel-button">Cancel</button>
    </form>
  </div>
</body>
</html>