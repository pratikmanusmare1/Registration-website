<?php
$servername = "localhost"; 
$username = "username"; 
$password = "password"; 
$dbname = "database"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

// Insert data into the database
$sql = "INSERT INTO users (name, email, course) VALUES ('$name', '$email', '$course')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
