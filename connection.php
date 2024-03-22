<?php

$con = mysqli_connect("localhost", "root", "", "database1");
if ($con) {
    echo '<script>alert("Connected")</script>';
} else {
    echo "error";
}

?>