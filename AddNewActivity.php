<?php
include("connection.php");
session_start();
if (isset($_POST['sendact'])) {
    $actname = $_POST['activityName'];
    $actdes = $_POST['activitydes'];
    $startdate = $_POST['startDate'];
    $enddate = $_POST['endDate'];
    $place = $_POST['place'];
    $time = $_POST['time'];
    $orgby = $_POST['organizer'];
    $_SESSION['actname'] =  $actname;

    // Convert user input requirements to a list of required values
    $requiredRequirements = [];
    if (isset($_POST['ground'])) $requiredRequirements[] = 'ground';
    if (isset($_POST['sportroom'])) $requiredRequirements[] = 'sport';
    if (isset($_POST['auditorium'])) $requiredRequirements[] = 'auditorium';
    if (isset($_POST['sound'])) $requiredRequirements[] = 'sound';
    if (isset($_POST['photo'])) $requiredRequirements[] = 'photo';
    if (isset($_POST['video'])) $requiredRequirements[] = 'video';

    // Query the `requirement` table to check for conflicts
    $conflictFound = false;
    foreach ($requiredRequirements as $requirement) {
        $checkConflictQuery = "SELECT * FROM `requirement` WHERE `{$requirement}` = 'YES' 
            AND ((`from` BETWEEN '$startdate' AND '$enddate') 
            OR (`to` BETWEEN '$startdate' AND '$enddate'))";
        $result = mysqli_query($conn, $checkConflictQuery);

        // If there are existing records with the same requirement and overlapping dates
        if (mysqli_num_rows($result) > 0) {
            $conflictFound = true;
            break;
        }
    }

    // If conflict is found, show modal popup and do not proceed
    if ($conflictFound) {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('myModal').style.display = 'block';
                });
            </script>";
        include("NewActivity.php");
    } else {
        // Proceed with inserting data into `activity` and `requirement` tables if no conflict
        $sql_activity = "INSERT INTO `activity` VALUES ('$actname','$actdes','$startdate','$enddate','$place','$time','$orgby','Pending')";
        $result_activity = mysqli_query($conn, $sql_activity);

        // Check if the first query was successful before proceeding
        if ($result_activity == 1) {
            // Inserting into `requirement` table
            $ground = isset($_POST['ground']) ? 'YES' : 'NO';
            $sportroom = isset($_POST['sportroom']) ? 'YES' : 'NO';
            $auditorium = isset($_POST['auditorium']) ? 'YES' : 'NO';
            $sound = isset($_POST['sound']) ? 'YES' : 'NO';
            $photo = isset($_POST['photo']) ? 'YES' : 'NO';
            $video = isset($_POST['video']) ? 'YES' : 'NO';

            // Second SQL Query for inserting into `requirement` table
            $sql_requirement = "INSERT INTO `requirement` VALUES ('$actname','$ground','$sportroom','$auditorium','$sound','$photo','$video','$startdate','$enddate')";
            $result_requirement = mysqli_query($conn, $sql_requirement);

            if ($result_requirement == 1) {
                echo "<script>alert('Activity Recorded. Now Go to Budget Section');</script>";
                header("Location:budget.php");
            } else {
                echo "Error inserting data into 'requirement' table: " . mysqli_error($conn);
            }
        } else {
            echo "Error inserting data into 'activity' table: " . mysqli_error($conn);
        }
    }
}
?>

<!-- HTML for Modal Popup -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>The requirement is Engaged in another Event, choose another date or requirement.</p>
    </div>
</div>

<!-- CSS for Modal Popup -->
<style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: aliceblue;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        border-radius: 10px;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<script>
    // Close the modal when clicking on the close button or outside the modal
    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById('myModal');
        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });
</script>
