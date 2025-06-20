<?php
// Database configuration
$host = 'localhost';
$dbname = 'email_system';
$username = 'root';
$password = '';

// Retrieve form data from the POST request
$recipient = $_POST["recipient"];
$subject = $_POST["subject"];
$message = $_POST["message"];

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert form data into the database
    $stmt = $pdo->prepare("INSERT INTO submissions (from_email, subject, message) VALUES (?, ?, ?)");
    $stmt->execute([$recipient, $subject, $message]);

    echo "Email sent successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
