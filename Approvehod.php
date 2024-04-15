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

    if (isset($_POST['show'])) {
        $ename = $_POST['activity'];
        $query = "SELECT * FROM activity WHERE name = '$ename'";
        $result = $conn->query($query);
        if ($result) {

            $row = $result->fetch_assoc();
            
            if ($row) {
                
                $eventname = $row['name'];
                $des = $row['description'];
                $startdate = $row['datefrom'];
                $enddate = $row['dateto'];
                $place = $row['place'];
                $time = $row['time'];
                $orgby = $row['orgby'];
            }
        } else {

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
   
                $sql = "SELECT name FROM activity ORDER BY name";
                echo "<select name='activity' required>";
                echo "<option value=''>Select</option>";

                foreach ($conn->query($sql) as $row) {
                    echo "<option value='{$row['name']}'>{$row['name']}</option>";
                }
                echo "</select>";
                ?>
                <center><input type="submit" value="Show" id="submit" name="show" /></center>
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
