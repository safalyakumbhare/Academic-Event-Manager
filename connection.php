<?php

$con = mysqli_connect("localhost", "root", "", "database1");
if ($con) {
    echo '<script>alert("Database Connected")</script>';
} else {
    echo "error";
}

?>