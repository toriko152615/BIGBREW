<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database (replace with your database credentials)
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "elmer";

    $conn = new mysqli($servername, $username_db, $password_db, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to retrieve user data
    $sql = "SELECT id, username, password FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, verify password
        $user = $result->fetch_assoc();
        if ($password== $user['password']) {
            // Password matches, start session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: elmer2.php"); // Redirect to dashboard or home page
            exit();
        } else {
            // Invalid password
            echo 'error';
        }
    } else {
        // User not found
        echo 'error';
    }

    // Close database connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect to login page if accessed directly
    echo 'error';
}
?>