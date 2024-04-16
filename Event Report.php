<?php

include ("header.php");

include ("connection.php");

$sql = "SELECT * FROM `activity` ORDER BY `datefrom`;";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: aliceblue;
        }

        h1 {
            text-align: center;
            margin-top: 5vh;
        }

        table {
            width: 98%;
            border-collapse:collapse ;
            margin: 20px auto;
            background-color: white;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            margin: 20px auto;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h1>Event Report</h1>
    <table>
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Event Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Place</th>
                <th>Time</th>
                <th>Department</th>
                <th>Approval Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["description"] . "</td>
                <td>" . date("d-m-y",strtotime($row["datefrom"])). "</td>
                <td>" . date("d-m-y",strtotime($row["dateto"])) . "</td>
                <td>" . $row["place"] . "</td>
                <td>" . $row["time"] . "</td>
                <td>" . $row["orgby"] . "</td>
                <td>" . $row["approval"] . "</td>
            </tr>";
            } ?>
        </tbody>
    </table>
</body>

</html>