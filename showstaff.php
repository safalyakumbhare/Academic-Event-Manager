<?php
include("connection.php");
$sql = "SELECT desig,name, dept, username, password FROM `login`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["desig"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["dept"]."</td>
                <td>".$row["username"]."</td>
                <td>".$row["password"]."</td>
            </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
