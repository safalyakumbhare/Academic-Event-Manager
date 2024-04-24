<?php
// Include necessary files
include ("header.php");
require_once ("connection.php");

// Check if the 'sendbudget' form is submitted
if (isset($_POST['sendbudget'])) {
    // Get user input data
    $name = $_SESSION['actname'];
    $particular = $_POST['particular'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total = $price * $qty;

    // Prepare a statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO `budget` (eventname, particular, amount, qty, total) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssddd", $name, $particular, $price, $qty, $total);

    // Execute the statement and check if successful
    if ($stmt->execute()) {
        // Query the database for budget entries for the current event
        $stmt_show = $conn->prepare("SELECT * FROM `budget` WHERE eventname = ?");
        $stmt_show->bind_param("s", $name);
        $stmt_show->execute();
        $res = $stmt_show->get_result();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statements
    $stmt->close();
    $stmt_show->close();
}

// Check if the 'sendgross' form is submitted

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Section</title>
    <link rel="stylesheet" href="budget.css">
</head>

<body>
    <div class="container">
        <h2>Budget Section</h2>
        <form id="activityForm" method="POST">
            <div class="form-group">
                <label for="particular">Particular:</label>
                <input type="text" id="particular" name="particular" required />
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" required />
            </div>
            <div class="form-group">
                <label for="qty">Quantity:</label>
                <input type="number" id="qty" name="qty" required />
            </div>
            <input type="submit" id="submit" value="Add to Sheet" name="sendbudget" />
        </form>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>SnNo</th>
                        <th>Particular</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    $gross_total = 0;
                    while ($row = $res->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . htmlspecialchars($row['particular']) . "</td>";
                        echo "<td>" . number_format($row['amount'], 2) . "</td>";
                        echo "<td>" . $row['qty'] . "</td>";
                        echo "<td>" . number_format($row['total'], 2) . "</td>";
                        echo "</tr>";
                        $count++;
                        $gross_total += $row['total'];
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="gross-total">
            <span>Gross Total:</span>
            <span id="gross-total-value"><?php $gross_total = number_format($gross_total, 2);
            echo $gross_total;
            // $_POST['gross_total']= $gross_total;
            


            ?>
                <form action="sendbudget.php" method="POST">
                        <input type="submit" id="submit" value="Submit Budget" name="sendgross" />
                    </form>

            </span>
        </div>
    </div>
    </div>
</body>

</html>