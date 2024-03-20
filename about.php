<?php
// Database connection parameters
$host = "localhost"; // or your database host
$username = "root"; // your database username
$password = ""; // your database password
$database = "korus computer"; // your database name

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';


// Sanitize input data
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$mobile = mysqli_real_escape_string($conn, $mobile);
$message = mysqli_real_escape_string($conn, $message);


// Insert into database
$sql = "INSERT INTO korus(name, email, mobile,message) VALUES ('$name', '$email', '$mobile','$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
