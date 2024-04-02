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

        #activitydes {
            width: 100%;
            height: 10vw;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Budget Section</h2>
        <form id="activityForm" action="AddNewActivity.php" method="POST">
            <div class="form-group">
                <label for="particular">Particular :</label>
                <input type="text" id="particular" name="particular" required />
            </div>
            <div class="form-group">
                <label for="price">Price :</label>
                <input type="text" id="price" name="price" required />
            </div>
            <div class="form-group">
                <label for="qty">Quantity :</label>
                <input type="text" id="qty" name="qty" required />
            </div>
            
            

            <input type="submit" id="submit" name="sendact" />


        </form>
    </div>
</body>

</html>