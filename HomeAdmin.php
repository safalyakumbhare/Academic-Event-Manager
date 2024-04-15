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
      <a href="Approveadmin.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Approve Event</h2>
            <p>Approve Requested Events</p>

          </div>
        </div>
      </a>
    </button>
    <button class="bttn">
      <a href="staffreport.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Show Staff</h2>
            <p>Monitor Your Staff</p>

          </div>
        </div>
      </a>
    </button>

  </div>
</body>

</html>