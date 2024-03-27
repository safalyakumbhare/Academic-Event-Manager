<?php
include ("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Activity Proposal Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
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
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        #submit:hover {
            background-color: #45a049;
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
    </style>
</head>

<body>
    <div class="container">
        <h2>Activity Proposal Form</h2>
        <form id="activityForm">
            <div class="form-group">
                <label for="activityName">Name of Activity:</label>
                <input type="text" id="activityName" name="activityName" required />
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
                <input type="text" id="organizer" name="organizer" required />
            </div>
            <fieldset>
                <legend>Requirements:</legend>
                <div class="checkbox-group">
                    <label for="ground">Ground</label>
                    <input type="checkbox" id="ground" name="requirements" value="Ground" />
                    <label for="sportsRoom">Sports Room</label>
                    <input type="checkbox" id="sportsRoom" name="requirements" value="Sports Room" />
                    <label for="auditorium">Auditorium</label>
                    <input type="checkbox" id="auditorium" name="requirements" value="Auditorium" />
                    <label for="soundSystem">Sound System</label>
                    <input type="checkbox" id="soundSystem" name="requirements" value="Sound System" />
                    <label for="photography">Photography</label>
                    <input type="checkbox" id="photography" name="requirements" value="Photography" />
                    <label for="video">Video</label>
                    <input type="checkbox" id="video" name="requirements" value="Video" />
                </div>
            </fieldset>
            <input type="submit" id="submit" name="submit" />
        </form>
    </div>
</body>

</html>