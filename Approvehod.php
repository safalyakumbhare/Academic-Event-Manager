<?php
include ("header.php");
include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOD Approval Form</title>
    <style>
        *{
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
    margin:1vw;
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
    color:#4caf50;
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
    </style>
</head>

<body>
    <?php
    // Initialize variables
    $eventname = $des = $startdate = $enddate = $place = $time = $orgby = "";
    $ground_checked = $sportroom_checked = $audi_checked = $sound_checked = $photo_checked = $video_checked = "";

    if (isset($_POST['show'])) {
        // Retrieve the selected event
        $ename = $_POST['activity'];

        // Fetch activity data
        $query_event = "SELECT * FROM activity WHERE name = '$ename'";
        $result_event = $conn->query($query_event);

        if ($result_event && $row_event = $result_event->fetch_assoc()) {
            // Set the activity data
            $eventname = $row_event['name'];
            $des = $row_event['description'];
            $startdate = date("d-m-Y", strtotime($row_event['datefrom']));
            $enddate = date("d-m-Y", strtotime($row_event['dateto']));
            $place = $row_event['place'];
            $time = $row_event['time'];
            $orgby = $row_event['orgby'];
        }

        // Fetch requirement data
        $query_req = "SELECT * FROM requirement WHERE eventname = '$ename'";
        $result_req = $conn->query($query_req);

        if ($result_req && $row_req = $result_req->fetch_assoc()) {
            // Set checkbox states based on requirement data
            $ground_checked = ($row_req['ground'] == 'YES') ? 'checked' : '';
            $sportroom_checked = ($row_req['sport'] == 'YES') ? 'checked' : '';
            $audi_checked = ($row_req['audio'] == 'YES') ? 'checked' : '';
            $sound_checked = ($row_req['sound'] == 'YES') ? 'checked' : '';
            $photo_checked = ($row_req['photo'] == 'YES') ? 'checked' : '';
            $video_checked = ($row_req['video'] == 'YES') ? 'checked' : '';
        } else {
            echo "Error fetching requirement data: " . $conn->error;
        }
    }
    ?>

    <div class="container">
        <h2>HOD Approval Form</h2>

        <!-- Form to select an activity -->
        <form method="POST">
            <div class="form-group">
                <label for="activity">Select Activity:</label>
                <?php
                // Display a dropdown with activities
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

        <!-- Form to display and modify the selected activity -->
        <form method="POST" action="save_approval.php">
            <!-- Hidden field to store the event name -->
            <input type="hidden" name="ename" value="<?php echo htmlspecialchars($eventname); ?>">

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

            <label for="req">Requirements:</label>
            <div class="checkbox-group">

                <label class="checkbox-btn">
                    <input type="checkbox" id="ground" name="ground" value="yes" <?php echo $ground_checked; ?>>
                    <label for="ground">Ground</label>
                </label>

                <label class="checkbox-btn">
                    <input type="checkbox" id="sportroom" name="sportroom" value="yes" <?php echo $sportroom_checked; ?>>
                    <label for="sportroom">Sports Room</label>
                </label>

                <label class="checkbox-btn">
                    <input type="checkbox" id="audi" name="audi" value="yes" <?php echo $audi_checked; ?>>
                    <label for="audi">Auditorium</label>
                </label>

                <label class="checkbox-btn">
                    <input type="checkbox" id="sound" name="sound" value="yes" <?php echo $sound_checked; ?>>
                    <label for="sound">Sound System</label>
                </label>

                <label class="checkbox-btn">
                    <input type="checkbox" id="photo" name="photo" value="yes" <?php echo $photo_checked; ?>>
                    <label for="photo">Photography</label>
                </label>

                <label class="checkbox-btn">
                    <input type="checkbox" id="video" name="video" value="yes" <?php echo $video_checked; ?>>
                    <label for="video">Video</label>
                </label>
            </div>

            <!-- Add submit button to save approval if necessary -->
            <input type="submit" value="Save" id="submit" name="save" />
        </form>
    </div>
</body>

</html>
