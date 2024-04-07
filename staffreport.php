<?php

include ("header.php")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: aliceblue;
        }
        h1{
            text-align: center;
            margin-top: 5vh;
        }
        table {
            width: 80%;
            /* border-collapse: ; */
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

        <h1>Staff Report</h1>
    <table>
        <thead>
            <tr>
                <th>Designation</th>
                <th>Name</th>
                <th>Department</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'showstaff.php';  ?>
        </tbody>
    </table>
</body>

</html>