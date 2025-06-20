<?php
// Database configuration
$host = 'localhost';
$dbname = 'email_system';
$username = 'root';
$password = '';

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch form submissions from the database
    $stmt = $pdo->query("SELECT * FROM submissions");
    $formSubmissions = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Send the form submissions as JSON
    header('Content-Type: application/json');
    echo json_encode($formSubmissions);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
