<?php
include ("header.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="button.css">
  <title>Faculty Home Page</title>

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
      <a href="NewActivity.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Propose New Activity</h2>
            <p>Request New Activity</p>

          </div>
        </div>
      </a>
    </button>
   
    <button class="bttn">
      <a href="ShowEvent.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Upcoming Events</h2>
            <p>Monitor all the Upcoming Events</p>

          </div>
        </div>
      </a>
    </button>
    <button class="bttn">
      <a href="Eventdetail.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Event Detail</h2>
            <p>Monitor the Event in detail with Budget and requirements</p>

          </div>
        </div>
      </a>
    </button>
   
  </div>
</body>

</html>