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
    
    if($result){
        $sql_show = "SELECT * FROM `budget` WHERE eventname = '$name'";
        $res = mysqli_query($conn,$sql_show);

        

        while($show= mysqli_fetch_array($res)){
            $count = 1;
            $count++;
            echo "<table>";
            echo "<tbody>";
            echo "<tr>"; 
                echo '<td>'.$count.'</td>';
                echo '<td>'.$show['particular'].'</td>';
                echo '<td>'. $show['amount']. '</td>';
                echo '<td>'.$show['qty'].'</td>';
                echo '<td>'.$show['total'].'</td>';
            echo "</tr>";
            echo "</tbody>";
            echo "</table>";
        }

        


    }

}





?>