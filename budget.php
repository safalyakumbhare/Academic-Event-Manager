<?php
include ("header.php");
// include ('AddNewActivity.php');
$actname = $_SESSION['actname'];
require_once ("connection.php");
// include ("AddNewActivity.php");

if (isset($_POST['sendbudget'])) {
    $name = $_SESSION['actname'];
    $particular = $_POST['particular'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total = $price * $qty;

    // Insert the new budget entry into the database
    $sql = "INSERT INTO `budget` VALUES ('$name', '$particular', '$price', '$qty', '$total')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Fetch all budget entries for the current event
        $sql_show = "SELECT * FROM `budget` WHERE eventname = '$name'";
        $res = mysqli_query($conn, $sql_show);


        // Check if there are any entries
        if (mysqli_num_rows($res) == 1) {
            // Display the table header
            // echo "<div class='table-container'>";
            // echo "<table>";
            // echo "<thead>";
            // echo "<tr>";
            // echo "<th>SnNo</th>";
            // echo "<th>Particular</th>";
            // echo "<th>Price</th>";
            // echo "<th>Qty.</th>";
            // echo "<th>Total</th>";
            // echo "</tr>";
            // echo "</thead>";
            // echo "<tbody>";

            // Display each budget entry


            // echo "</tbody>";
            // echo "</table>";
            // echo "</div>";
        } else {
            // echo "No budget entries found for this event.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Budget Section</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: aliceblue;
            /* margin: 0 */
        }

        .container {
            width: 80vw;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 5px;
            font-size: 16px;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        #submit {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            margin: 1vw;

            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        #submit:hover {
            background-color: #45a049;
        }

        .checkbox-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .checkbox-group input[type="checkbox"] {
            margin: 20px;
        }

        fieldset {
            width: 30vw;
        }

        #activitydes {
            width: 100%;
            height: 10vw;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        table th {
            background-color: #f2f2f2;
        }

        .gross-total {
            margin-top: 20px;
            text-align: right;
        }

        .gross-total span:first-child {
            font-weight: bold;
        }

        #gross-total-value {
            font-weight: bold;
            color: purple;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Budget Section</h2>
        <h2>Activity :
            <?php echo $actname ?>
        </h2>
        <form id="activityForm" action="budget.php" method="POST">
            <div class="form-group">
                <label for="particular">Particular :</label>
                <input type="text" id="particular" name="particular" required />
            </div>
            <div class="form-group">
                <label for="price">Price :</label>
                <input type="text" id="price" name="price" required />
            </div>
            <div class="form-group">
                <label for="qty">Quantity :</label>
                <input type="text" id="qty" name="qty" required />
            </div>
            <input type="submit" id="submit" value="Add to Sheet" name="sendbudget" />

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>SnNo</th>
                            <th>Particular</th>
                            <th>Price</th>
                            <th>Qty.</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $count = 1;
                        while ($show = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>" . $count . "</td>";
                            echo "<td>" . $show['particular'] . "</td>";
                            echo "<td>" . $show['amount'] . "</td>";
                            echo "<td>" . $show['qty'] . "</td>";
                            echo "<td>" . $show['total'] . "</td>";
                            echo "</tr>";
                            $count++;
                        }



                        ?>

                        <!-- Table rows will be dynamically added here -->
                    </tbody>
                </table>
                <div class="gross-total">
                    <span>Gross Total</span>
                    <span id="gross-total-value">0</span>
                </div>
            </div>



        </form>
    </div>
</body>

</html>