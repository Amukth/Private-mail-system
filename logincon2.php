 <?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdata";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $enteredUsername = mysqli_real_escape_string($conn, $_POST['username1']);
    $enteredPassword = $_POST['password'];

    $query = "SELECT * FROM user WHERE username1='$enteredUsername'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password']; // Assuming the column name is 'password'

        if ($enteredPassword == $storedPassword) {
            // Password is correct, redirect to main.php
            header("Location: main0.php");
            exit();
        } else {
            // Password is incorrect
            echo "<center><br><h1>Invalid username or password</h1></center>";
        }
    } else {
        // Username not found
        echo "<center><br><h1>Invalid username or password</h1></center>";
    }
}

$conn->close();
?>
<style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: medium;
            margin: 0;
            padding: 0;
            background-color: #d0f0c0;
        }
</style>
