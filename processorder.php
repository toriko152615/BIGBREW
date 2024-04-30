<?php
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
$customer_name = $conn->real_escape_string($_POST['customer_name']);
$customer_number = $conn->real_escape_string($_POST['customer_number']);
$address = $conn->real_escape_string($_POST['address']);
$mode_of_payment = $conn->real_escape_string($_POST['mode_of_payment']);
$note_to_rider = $conn->real_escape_string($_POST['note_to_rider']);
$total_price = $conn->real_escape_string($_POST['total_price']);

// Insert user into database
$sql = "INSERT INTO orders (customer_name, customer_number, address, mode_of_payment, note_to_rider, total_price) 
        VALUES ('$customer_name', '$customer_number', '$address', '$mode_of_payment', '$note_to_rider', '$total_price')";

if ($conn->query($sql) === TRUE) {
    $last_insert_id = $conn->insert_id;
    echo $last_insert_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


