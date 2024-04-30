<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "elmer";

$conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
$post_content = file_get_contents('php://input');

$orderItems = json_decode($post_content, true);

// Check if decoding was successful
if ($orderItems === null) {
    echo "Invalid JSON format";
} else {
    $order_id = "";
    foreach ($orderItems as $key => $value) {
        if ($key == "orderId") {
            $order_id = $value;
        }
    }

    $sql = "INSERT INTO order_items (order_id, item_name, quantity, price) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Failed to prepare statement");
    }

    foreach ($orderItems as $key => $value) {
        if ($key != "orderId") {
            $item_name = $key;
            $quantity = $value["quantity"];
            $price = $value["price"];

            $stmt->bind_param("isss", $order_id, $item_name, $quantity, $price);
            $stmt->execute();

            // Check for errors in execution
            if ($stmt->errno) {
                echo "Error inserting user: " . $stmt->error;
                // Handle error scenario (rollback transaction, log error, etc.)
            }
        }
    }

    $stmt->close();
    $conn->close();
}
?>