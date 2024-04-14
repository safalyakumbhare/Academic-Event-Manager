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
    <style>
        /* Your CSS code */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: aliceblue;
            /* margin: 0 */
        }

        .container {
            width: 80vw;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 5px;
            font-size: 16px;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        #submit {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            /* border: none; */
            border-radius: 10px;
            border: 5px solid #4caf50;
            cursor: pointer;
            font-size: 16px;
            transition: .3s ease;
        }

        #submit:hover {
            color: #4caf50;
            background-color: #fff;
            box-shadow: 0px 0px 10px 7px #4caf50;

        }

        .checkbox-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .checkbox-group input[type="checkbox"] {
            margin: 20px;
        }

        fieldset {
            width: 30vw;
        }

        #activitydes {
            width: 100%;
            height: 10vw;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Customize the label (the checkbox-btn) */
        .checkbox-btn {
            display: block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 10px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .checkbox-btn input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkbox-btn label {
            cursor: pointer;
            font-size: 14px;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            margin-top: 2px;
            height: 17px;
            width: 18px;
            border: 2px solid black;
            transition: .2s linear;
        }

        .checkbox-btn input:checked~.checkmark {
            background-color: transparent;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            visibility: hidden;
            opacity: 0;
            left: 50%;
            top: 40%;
            width: 10px;
            height: 14px;
            border: 2px solid #0ea021;
            filter: drop-shadow(0px 0px 10px #0ea021);
            border-width: 0 2.5px 2.5px 0;
            transition: .2s linear;
            transform: translate(-50%, -50%) rotate(-90deg) scale(0.2);
        }

        /* Show the checkmark when checked */
        .checkbox-btn input:checked~.checkmark:after {
            visibility: visible;
            opacity: 1;
            transform: translate(-50%, -50%) rotate(0deg) scale(1);
            animation: pulse 1s ease-in;
        }

        .checkbox-btn input:checked~.checkmark {
            transform: rotate(45deg);
            border: none;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: translate(-50%, -50%) rotate(0deg) scale(1);
            }

            50% {
                transform: translate(-50%, -50%) rotate(0deg) scale(1.6);
            }
        }
    </style>
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
