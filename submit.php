<?php 
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactform";

$conn = new mysqli($servername, $username, $password, $dbname);

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

// Insert data into database
$sql = "INSERT INTO users (full_name, email, phone, reason, message) 
VALUES ('$fullName', '$email', '$phone', '$reason', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "error: " . $conn->error;
}

$conn->close();

?>
