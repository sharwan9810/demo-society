<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enrollment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$token = $_POST['token'];

// Upload photo
$photo = $_FILES['photo']['name'];
$photo_temp = $_FILES['photo']['tmp_name'];
$photo_path = "uploads/" . $photo; // Change the directory as needed
move_uploaded_file($photo_temp, $photo_path);

// Upload signature
$signature = $_FILES['signature']['name'];
$signature_temp = $_FILES['signature']['tmp_name'];
$signature_path = "uploads/" . $signature; // Change the directory as needed
move_uploaded_file($signature_temp, $signature_path);

// Insert data into the database
$sql = "INSERT INTO imagenew (token, photo, signature) VALUES ('$token', '$photo', '$signature')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
