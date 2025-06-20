<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email System Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d0f0c0;
            text-align: center;
            margin-top: 50px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #4cbb17;
            color: white;
            padding: 10px 40px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        label {
            text-align: left;
            display: block;
            margin-bottom: 8px;
        }

        #acceptTerms {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<form action="registercon2.php" method="post">
    <h2>Register</h2>
    <label for="firstName">First Name:</label>
    <input type="text" id="firstname" name="firstname" required>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastname" name="lastname" required>

    <label for="Username">Username:</label>
    <input type="text" id="username1" name="username1" required>

    <label for="Password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>

    <label for="Number">Phone Number:</label>
    <input type="tel" id="number" name="number" required>

    <input type="checkbox" id="acceptTerms" name="acceptTerms" required>
    <label for="acceptTerms">I accept all terms and conditions</label>

    <button type="submit"><h1>Create Account</h1></button>
    <p>Already have an account? <a href="login2.php">Login</a></p>
</form>



</body>
</html>
