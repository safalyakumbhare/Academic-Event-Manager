<?php
include ("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Event Proposal Form</title>
    <link rel="stylesheet" href="NewActivity.css">
</head>

<body>
    <div class="container">
        <h2>Event Proposal Form</h2>
        <form id="activityForm" action="AddNewActivity.php" method="POST">
            <div class="form-group">
                <label for="activityName">Name of Activity:</label>
                <input type="text" id="activityName" name="activityName" required />
            </div>
            <div class="form-group">
                <label for="activityName">Activity Description :</label>
                <textarea id="activitydes" name="activitydes" required></textarea>
            </div>
            <div class="form-group">
                <label for="startDate">Start Date:</label>
                <input type="date" id="startDate" name="startDate" required />
            </div>
            <div class="form-group">
                <label for="endDate">End Date:</label>
                <input type="date" id="endDate" name="endDate" required />
            </div>
            <div class="form-group">
                <label for="place">Place:</label>
                <input type="text" id="place" name="place" required />
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required />
            </div>
            <div class="form-group">
                <label for="organizer">Organized by:</label>
                <?php
                // Display a dropdown with activities
                
                $sql = "SELECT dept FROM login WHERE `desig`='Hod'";
                echo "<select name='organizer' required>";
                echo "<option value=''>Select</option>";
                foreach ($conn->query($sql) as $row) {
                    echo "<option value='{$row['dept']}'>{$row['dept']}</option>";
                }
                echo "</select>";
                ?>
            </div>
            <label for="req">Requirements : </label>
            <div class="checkbox-group">

                <label class="checkbox-btn">
                    <label for="ground">Ground</label>
                    <input type="checkbox" id="ground" name="ground" value="Ground" />
                    <span class="checkmark"></span>
                </label>

                <label class="checkbox-btn">
                    <label for="sportroom">Sports Room</label>
                    <input type="checkbox" id="sportroom" name="sportroom" value="Sports Room" />
                    <span class="checkmark"></span>
                </label>
                <label class="checkbox-btn">
                    <label for="audi">Auditorium</label>
                    <input type="checkbox" id="audi" name="auditorium" value="Auditorium" />
                    <span class="checkmark"></span>
                </label>
                <label class="checkbox-btn">
                    <label for="sound">Sound System</label>
                    <input type="checkbox" id="sound" name="sound" value="Sound System" />
                    <span class="checkmark"></span>
                </label>
                <label class="checkbox-btn">
                    <label for="photo">Photography</label>
                    <input type="checkbox" id="photo" name="photo" value="Photography" />
                    <span class="checkmark"></span>
                </label>
                <label class="checkbox-btn">
                    <label for="video">Video</label>
                    <input type="checkbox" id="video" name="video" value="Video" />
                    <span class="checkmark"></span>
                </label>
            </div>


            <input type="submit" id="submit" name="sendact" />


        </form>
    </div>
</body>

</html>