<?php 
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactform";

$conn = new mysqli($servername, $username, $password, $dbname);

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS contactform";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select database
$conn->select_db("contactform");

// Create table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    reason VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fullName = $_POST['fullName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$reason = $_POST['reason'];
$message = $_POST['message'];

// Insert data into database using Prepared Statements
$stmt = $conn->prepare("INSERT INTO users (full_name, email, phone, reason, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $fullName, $email, $phone, $reason, $message);

if ($stmt->execute() === TRUE) {
    echo "success";
} else {
    echo "error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>
