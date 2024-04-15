<?php
if (isset($_POST['sendgross'])) {
    include("HomeFaculty.php");
    //Calculate the gross total
    // $gross_total = $_POST['gross_total'];

    // // Prepare the statement to insert gross total into the database
    // $stmt_gross = $conn->prepare("INSERT INTO `gross` (name,total) VALUES (?, ?)");
    // $stmt_gross->bind_param("sd", $name, $gross_total);

    // // Execute the statement and check if successful
    // if ($stmt_gross->execute()) {
    //     // Redirect to the home page after successful insertion
    //     header("Location: HomeFaculty.php");
    //     exit();
    // } else {
    //     echo "Error in sending gross: " . $stmt_gross->error;
    // }

    // // Close statement
    // $stmt_gross->close();
}

?>