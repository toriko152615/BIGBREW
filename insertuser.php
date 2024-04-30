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

// Retrieve form data
$firstname = $conn->real_escape_string($_POST['firstname']);
$lastname = $conn->real_escape_string($_POST['lastname']);
$dateOfBirth = $conn->real_escape_string($_POST['dateOfBirth']);
$address = $conn->real_escape_string($_POST['address']);
$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

// Insert user into database
$sql = "INSERT INTO user (firstname, lastname, dateofbirth, address, username, password) 
        VALUES ('$firstname', '$lastname', '$dateOfBirth', '$address', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    $last_insert_id = $conn->insert_id;
    $_SESSION['user_id'] = $last_insert_id;
    echo "New user inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
