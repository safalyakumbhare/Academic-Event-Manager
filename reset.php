<?php
if ($_POST['reset']) {
    // Handle form submission
    $input_box_value = $_POST['input_box'];
    // You can perform further processing with the input box value here

    // Redirect back to the form page
    header("Location: index.html");
    exit();
}
?>