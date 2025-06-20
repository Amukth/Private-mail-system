<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdata";
$errors = array();
$con = mysqli_connect($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    //echo"Connection successful";
}

// Retrieve form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username1 = $_POST['username1'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$number = $_POST['number'];

$user_check_query = "SELECT * FROM user WHERE username1='$username1' LIMIT 1";
$result = mysqli_query($con, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) {
    // if user exists
    if ($user['username1'] === $username1) {
        array_push($errors, "Username already exists");
    }
}

// Finally, register user if there are no errors in the form
if (count($errors) == 0) {
    $sql = "INSERT INTO user (firstname,lastname,username1,password,dob,number) VALUES ('$firstname', '$lastname', '$username1','$password','$dob','$number')";
    if ($con->query($sql) === true) {
        echo "Successfully registered";
        $_SESSION['success'] = "You are now registered and can log in";
        header('location: login2.php');
        exit();
    } else {
        echo "Registration failed: " . $con->error;
    }
} else {
    echo "<h1><center>Registration failed. Please check the form for errors.</h1></center>";
}

$con->close();
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