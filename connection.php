<?php

$conn = mysqli_connect("localhost", "root", "root", "database1");
if ($conn) {
    // echo '<script>alert("Database Connected")</script>';
} else {
    echo "error";
}

?>