<?php
session_start();
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "elmer";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];

// Retrieve form data
$firstname = $conn->real_escape_string($_POST['firstname']);
$lastname = $conn->real_escape_string($_POST['lastname']);
$dateOfBirth = $conn->real_escape_string($_POST['dateofbirth']);
$address = $conn->real_escape_string($_POST['address']);

// Insert user into database

// Construct the SQL update query
$sql = "UPDATE user SET ";
$sql .= "firstname = '$firstname', ";
$sql .= "lastname = '$lastname', ";
$sql .= "address = '$address', ";
$sql .= "dateofbirth = '$dateOfBirth' ";
$sql .= "WHERE id = $user_id";

if ($conn->query($sql) === TRUE) {
    echo "New user inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>