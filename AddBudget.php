<?php
require_once ("connection.php");
include ("AddNewActivity.php");

if (isset($_POST['sendbudget'])) {

    $name = $_SESSION['actname'];
    $particular = $_POST['particular'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total = $price * $qty;
    $sql = "INSERT INTO `budget` VALUES ('$name','$particular','$price', '$qty','$total')";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error";
    } else {
        echo "<script>alert('Budget Added Successfully!');</script>";
    }

}





?>