<?php
include ("header.php");
// include ('AddNewActivity.php');
// $actname = $_SESSION['actname'];
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
    <link rel="stylesheet" href="budget.css">
</head>

<body>
    <div class="container">
        <h2>Budget Section</h2>
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
                    <span id="gross-total-value"><?php echo $total+=$total; ?></span>
                </div>
            </div>



        </form>
    </div>
</body>

</html>