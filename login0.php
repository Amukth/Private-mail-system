<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email System Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: blueviolet;
            text-align: center;
            margin-top: 100px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: magenta;
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<form id="loginForm">

    <h1><b>Login</b></h1>
    <label for="newUsername">Username</label>
    <input type="text" id="newUsername" name="newUsername" required>
    <br>
    <label for="newPassword">Password</label>
    <input type="password" id="newPassword" name="newPassword" required>
    <br>
    <button type="button" onclick="validateRegistration()"><b>Login</b></button>
    <p>Don't have an account? <a href="register.php">Register</a></p>

</form>

<script>
    function validateRegistration() {
        var newUsername = document.getElementById("newUsername").value;
        var newPassword = document.getElementById("newPassword").value;

        // Here, you can add logic to validate the registration on the client side
        // For simplicity, we are just displaying an alert
        alert("Registration button pressed. Username: " + newUsername + ", Password: " + newPassword);
        if (newUsername.trim() !== '' && newPassword.trim() !== '') {
            // Redirect to main.php
            window.location.href = "main.php";
        } else {
            // If fields are not filled, display an error message
            alert("Please enter both username and password.");
        }
    }
</script>

</body>
</html>
