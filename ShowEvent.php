<?php
include ("header.php");
include ("connection.php");

$sql = "SELECT * FROM `activity` ORDER BY `datefrom`";
$res = mysqli_query($conn, $sql);

// Check if there are any events
$num_events = mysqli_num_rows($res);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Academic Event Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #000000 !important;
            background-color: aliceblue;
        }

        header {
            background-color: #4646ef;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        h2 {
            color: #000000;
        }

        .event {
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 1vw;
            margin: 2vw;
        }

        .event h3 {
            padding: 5px;
        }

        .event p {
            padding: 5px;
        }

        .button-container {
            display: flex;
            justify-content: flex-start;
        }

        .button-container button {
            padding: 6px 15px;
            cursor: pointer;
        }

        .approve-button {
            background-color: green;
            color: rgb(255, 255, 255);
            margin: 2vw;
        }

        .reject-button {
            background-color: red;
            color: rgb(255, 255, 255);
            margin: 2vw;
        }
    </style>
</head>

<body>

    <div class="container">
        <center>
            <h2>
                <?php
                if ($num_events > 0) {
                    echo 'Upcoming Events';
                } else {
                    echo 'There are no events scheduled';
                }
                ?>
            </h2>
        </center>
        <div id="event-list">
            <?php
            if ($num_events > 0) {
                while ($data = mysqli_fetch_assoc($res)) {
                    echo '<div class="event">';
                    echo '<h3>Event Name : ' . htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8') . '</h3>';

                    // Format the date to d-m-y
                    $dateFormatted = date('d-m-y', strtotime($data['datefrom']));
                    $dateFormatted1 = date('d-m-y', strtotime($data['dateto']));
                    echo '<p><b>Starting Date : </b> ' . htmlspecialchars($dateFormatted, ENT_QUOTES, 'UTF-8') . '</p>';
                    echo '<p><b>End Date : </b> ' . htmlspecialchars($dateFormatted1, ENT_QUOTES, 'UTF-8') . '</p>';

                    echo '<p><b>Organized By : </b> ' . htmlspecialchars($data['orgby'], ENT_QUOTES, 'UTF-8') . '</p>';
                    echo '<p><b>Approval Status : </b> ' . htmlspecialchars($data['approval'], ENT_QUOTES, 'UTF-8') . '</p>';
                    echo '</div>';
                }
            }

            ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>