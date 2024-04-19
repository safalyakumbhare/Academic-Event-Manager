<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="New.css">
</head>
<style>
    header {
        /* position: fixed; */
        width: 100%;
        display: flex;
        justify-content: center;
        background: #011979;
    }

    .navbar {
        display: flex;
        padding: 0 10px;
        width: 100%;
        align-items: center;
        justify-content: center;
    }
    h1{
        color:whitesmoke;
    }
    @keyframes glow {
  0% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
  }
  50% {
    text-shadow: 0 0 20px rgba(255, 255, 255, 0.9);
  }
  100% {
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.7);
  }
}

h1 {
  text-decoration: none;
  color: white;
  font-size: 24px;
  font-weight: bold;
  animation: glow 2s infinite alternate; /* Apply animation */
}
</style>

<body>

    <header>
        <nav class="navbar">
            <h1 class="logo">Academic Event Manager</h1>
            </label>

        </nav>
    </header>
    <div class="container">
        <h1 class="title">Admin Registration</h1>
        <form class="registration-form" action="AddAdmin.php" method="POST">
            <label for="AdminName">Name of Admin:</label>
            <input type="text" id="AdminName" name="Name" required>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>

            <label for="userId">User ID:</label>
            <input type="text" id="userId" name="userId" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" name="send" value="Register">
            <button type="button" class="cancel-button" name="cancel">Cancel</button>
        </form>
    </div>
</body>

</html>