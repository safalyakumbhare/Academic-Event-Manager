<?php
include ("header.php");

include("connection.php");
include("Approvehod.php");
$ename = $_SESSION["activity"];

if(isset($_POST['revise'])){
    $remark = $_POST['remark'];
    $sql = "INSERT INTO `hodapprove` VALUES ('$ename','$remark')"; 
    $res = mysqli_query($conn,$sql);

    if($res){
        echo "<script>alert('Remark Added Successfully');</script>";

    }
    else{
        echo  mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rejection Remark</title>
    <link rel="stylesheet" href="NewActivity.css">
</head>

<body>
    <div class="container">
        <h2>Rejection Remark Form</h2>
        <form id="activityForm" method="POST">
            <div class="form-group">
                <label for="remark">Enter Remark for Rejection:</label>
                <input type="text" id="remark" name="remark" required />
            </div>
            
            <center><input type="submit" id="submit" name="revise" /></center>


        </form>
    </div>
</body>

</html>