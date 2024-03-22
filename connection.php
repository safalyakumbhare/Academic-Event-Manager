<?php

$conn = mysqli_connect("localhost", "root", "", "database1");
if ($conn) {
    // echo '<script>alert("Database Connected")</script>';
} else {
    echo "error";
}

?>