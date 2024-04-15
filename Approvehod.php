<?php

    include("header.php");
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOD Approval Form</title>
    <link rel="stylesheet" href="NewActivity.css">
</head>

<body>
    <?php
    // Include the database connection file

    // Initialize variables
    $ename = '';
    $eventname = '';
    $des = '';
    $startdate = '';
    $enddate = '';
    $place = '';
    $time = '';
    $orgby = '';

    // Check if the form is submitted
    if (isset($_POST['show'])) {
        // Get the selected activity name
        $ename = $_POST['activity'];

        // Prepare the SQL query
        $query = "SELECT * FROM activity WHERE name = '$ename'";

        // Execute the query
        $result = $conn->query($query);

        // Check if the query was successful
        if ($result) {
            // Fetch the data
            $row = $result->fetch_assoc();
            
            if ($row) {
                // Assign data to variables
                $eventname = $row['name'];
                $des = $row['description'];
                $startdate = $row['datefrom'];
                $enddate = $row['dateto'];
                $place = $row['place'];
                $time = $row['time'];
                $orgby = $row['orgby'];
            }
        } else {
            // Handle query error
            echo "Error fetching data: " . $conn->error;
        }
    }
    ?>
    <div class="container">
        <h2>HOD Approval Form</h2>
        <form method="POST">
            <div class="form-group">
                <label for="activity">Select Activity:</label>
                <?php
                // Fetch activity options
                $sql = "SELECT name FROM activity ORDER BY name";
                echo "<select name='activity' required>";
                echo "<option value=''>Select</option>";

                // Loop through the activity options and create select options
                foreach ($conn->query($sql) as $row) {
                    echo "<option value='{$row['name']}'>{$row['name']}</option>";
                }
                echo "</select>";
                ?>
                <input type="submit" value="Show" name="show">
            </div>
        </form>
        
        <form>
            <div class="form-group">
                <label for="activityName">Activity Description:</label>
                <textarea id="activitydes" name="activitydes" readonly><?php echo htmlspecialchars($des); ?></textarea>
            </div>

            <div class="form-group">
                <label for="startDate">Start Date:</label>
                <input type="text" id="startDate" name="startDate" readonly value="<?php echo htmlspecialchars($startdate); ?>">
            </div>

            <div class="form-group">
                <label for="endDate">End Date:</label>
                <input type="text" id="endDate" name="endDate" readonly value="<?php echo htmlspecialchars($enddate); ?>">
            </div>

            <div class="form-group">
                <label for="place">Place:</label>
                <input type="text" id="place" name="place" readonly value="<?php echo htmlspecialchars($place); ?>">
            </div>

            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" readonly value="<?php echo htmlspecialchars($time); ?>">
            </div>

            <div class="form-group">
                <label for="organizer">Organized by:</label>
                <input type="text" id="organizer" name="organizer" readonly value="<?php echo htmlspecialchars($orgby); ?>">
            </div>
        </form>
    </div>
</body>
</html>
