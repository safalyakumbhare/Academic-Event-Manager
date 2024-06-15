<?php
include ("header.php");
$current_date = date('Y-m-d');
$sql = "SELECT name FROM `activity` WHERE `datefrom` = '$current_date' AND `approval`='Approved by Principal'";
$res = mysqli_query($conn, $sql);

$pending = mysqli_query($conn, "SELECT * FROM `activity` WHERE `datefrom` >= '$current_date' AND  `approval`='Pending' ");
$pendcount = mysqli_num_rows($pending);
$num_events = mysqli_num_rows($res);
$data = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="button.css">
  <title>Hod Home Page</title>

</head>

<body>
<center>
      <h1>
        <?php
        if ($num_events > 0) {
          echo '<img id="img" src="image/image1.png">Event Today : '. htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8').'<img id="img" src="image/image1.png">';
        } else {
          echo 'No Events Today';
        }
        ?>
      </h1>
    </center>
  <div class="container">


    <button class="bttn">
      <a href="New Faculty for HOD.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>New Faculty</h2>
            <p>Get Register Your New Faculty</p>

          </div>
        </div>
      </a>
    </button>
    <button class="bttn">
      <a href="Approvehod.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Approve Events : <?php echo $pendcount;?></h2>
            <p>Approve the Events</p>

          </div>
        </div>
      </a>
    </button>

    <button class="bttn">
      <a href="Event Report.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Event Report</h2>
            <p>See all the Events Report in your Campus.</p>

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


  </div>
</body>

</html>