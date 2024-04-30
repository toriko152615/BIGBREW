<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "elmer";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve order ID from URL parameter
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Prepare and execute SELECT query
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch order details
        $order = $result->fetch_assoc();

        // Display order details as HTML
        echo '<div class="order-details">';
        echo '<p><span class="label">First Name:</span> ' . $order['firstname'] . '</p>';
        echo '<p><span class="label">Last Name:</span> ' . $order['lastname'] . '</p>';
        echo '<p><span class="label">Address:</span> ' . $order['address'] . '</p>';
        echo '<p><span class="label">Date of Birth:</span> ' . $order['dateofbirth'] . '</p>';

    } else {
        echo "Order not found.";
    }
} else {
    echo "Invalid request. Please provide an order ID.";
}

// Close database connection
$conn->close();
?>