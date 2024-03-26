<?php
include ("header.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="button.css">
  <title>Admin Home Page</title>

</head>

<body>
  <!-- <nav>
        <h1>Acadmeic event managment</h1>
        <ul>
            <li>Welcome admin</li>
        </ul>
    </nav> -->
  <div class="container">

    <button class="bttn">
      <a href="New Hod.php">
        <div class="box hover-box" id="new-hod">

          <div class="content">

            <h2>New Hod</h2>
            <p>Get Register Your New HOD</p>

          </div>

        </div>
      </a>
    </button>

    <button class="bttn">
      <a href="New Faculty.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>New Faculty</h2>
            <p>Get Register Your New Faculty</p>

          </div>
        </div>
      </a>
    </button>
    <button class="bttn">
      <div class="box hover-box" id="show-events">
        <div class="content">
          <h2>Show Events</h2>
          <p>See Status and Upcoming Events Report</p>

        </div>
      </div>
    </button>
  </div>
</body>

</html>