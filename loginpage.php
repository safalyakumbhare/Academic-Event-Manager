<?php
include ("connection.php")

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Event Manager - Login</title>
    <link rel="stylesheet" href="loginpage.css">
</head>

<body>
    <div class="page">
        <div class="login-container">
            <!-- <h2>Event Manager</h2> -->
            <form id="login-form" action="login.php" name="form" method="POST">
                <div class="form-group">
                    <label for="role">Who are you?</label>
                    <select id="role" name="role">
                        <option value="Principal">Principal</option>
                        <option value="HOD">HOD</option>
                        <option value="Faculty">Faculty</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="user">User ID</label>
                    <input type="text" id="user" name="user" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="pass" name="pass" required>
                </div>
                <div class="btn-group">
                    <input type="submit" class="btn login" id="btn" name="submit" value="Login">
                    <button type="reset" class="btn reset" name="reset">Reset</button>

                </div>
            </form>
        </div>
    </div>
</body>

</html>