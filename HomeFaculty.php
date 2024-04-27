<?php
include ("header.php");
include ("connection.php");
$current_date = date('Y-m-d');
$pending = mysqli_query($conn, "SELECT * FROM `activity` WHERE `datefrom` >= '$current_date' AND  `approval`='Pending' ");
$pendcount = mysqli_num_rows($pending);

$hod = mysqli_query($conn, "SELECT * FROM `activity` WHERE `datefrom` >= '$current_date' AND  `approval`='Approved by HOD' ");
$hodcount = mysqli_num_rows($hod);

$pr = mysqli_query($conn, "SELECT * FROM `activity` WHERE `datefrom` >= '$current_date' AND  `approval`='Approved by Principal' ");
$prcount = mysqli_num_rows($pr);

$rjt = mysqli_query($conn, "SELECT * FROM `activity` WHERE `datefrom` >= '$current_date' AND (`approval`='Rejected by Principal' OR `approval`='Rejected By HOD')");
$rjtcount = mysqli_num_rows($rjt);

// $current_date = date('Y-m-d');

// Modify the SQL query to select only events with a starting date greater than or equal to the current date
$sql = "SELECT name FROM `activity` WHERE `datefrom` = '$current_date' AND `approval`='Approved by Principal'";
$res = mysqli_query($conn, $sql);

// Check if there are any events
$num_events = mysqli_num_rows($res);
$data = mysqli_fetch_assoc($res);
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
  <center>
    <h1>
      <?php
      if ($num_events > 0) {
        echo '<img id="img" src="image/image1.png">Event Today : ' . htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8') . '<img id="img" src="image/image1.png">';

      } else {
        echo 'No Events Today';
      }
      ?>
    </h1>
  </center>
  <div class="container">


    <button class="bttn">
      <a href="NewActivity.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Propose New Event</h2>
            <p>Request New Event</p>

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
      <a href="Approval Pending.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Approval Pending : <?php echo $pendcount ?> </h2>
            <p>View Approval Pending Events</p>

          </div>
        </div>
      </a>
    </button>
    <button class="bttn">
      <a href="Eventdetail.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Event Detail and Approval Status</h2>
            <p>Monitor the Event in detail with Budget and requirements</p>

          </div>
        </div>
      </a>
    </button>
    <button class="bttn">
      <a href="Approved By Admin.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Approved By Principal : <?php echo $prcount ?></h2>
            <p>View Events Approved By Principal</p>

          </div>
        </div>
      </a>
    </button>
    <button class="bttn">
      <a href="Approved By HOD.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Approved By HOD : <?php echo $hodcount ?></h2>
            <p>View Events Approved By HOD</p>

          </div>
        </div>
      </a>
    </button>
    </button>
    <button class="bttn">
      <a href="Rejected Events.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Rejected : <?php echo $rjtcount ?></h2>
            <p>View Rejected Events</p>

          </div>
        </div>
      </a>
    </button>


  </div>
</body>

</html>