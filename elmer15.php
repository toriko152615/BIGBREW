<?php   
session_start();
// Check if user is already logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: elmer1.php"); // Redirect to dashboard if logged in
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Checkout</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f4f4;
        text-align: center;

    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 40px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: black;
    }

    p {
        color: #555;
        margin-bottom: 20px;
    }

    .waiting-message {
        font-size: 20px;
        color: #e44d26;
        font-weight: bold;
    }


    .img-hover-zoom {
        height: 190x;
        width: 250px;
        overflow: hidden;
        align-items: center;
    }

    .img-hover-zoom img {
        transition: transform .3s ease;
        background-color: rgba(255, 255, 255, 0.8);
        text-align: left;
        align-items: left;
    }

    .img-hover-zoom:hover img {
        transform: scale(.9);
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-color: WHITE;
        color: white;
        text-align: center;
    }

    .topnav {
        background-color: white;
        position: fixed;
        top: 0;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .topnav a {
        float: left;
        color: black;
        text-align: center;
        padding: 5px 95px;
        text-decoration: none;
        font-size: 35px;

    }

    .topnav a.active {
        background-color: #04AA6D;
        color: black;
    }

    .topnavblue {
        float: right;
        width: 40%;
        height: 10px;
        weight: 20% 0;
        padding-top: 100%;
        text-align: right;
        padding: 0px 5px;

    }

    .topnav a:hover {
        transition: transform .2s;
        -ms-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(.9);
    }

    button.btn12 {
        margin: 0px;
    }

    button:hover {
        opacity: 0.8;
    }

    .zoom {
        background-color: white;
        transition: transform .2s;
        margin: -1px 5px;
        border: 2px solid #61ABFB;
        color: black;
        border-radius: 10px;
    }

    button.btn12 {
        margin: 0px;
    }

    button.btn13 {
        margin: 0px;

    }

    .zoom:hover {
        -ms-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(.9);
    }

    .container6 {
        text-align: left;
        color: white;

    }

    .btn12456 {
        float: left;
        transform: translate(0%, -10%);
        background-color: black;
        transform: translate(-37%, -20%);
        color: white;
        font-size: 15px;
        padding: 0px 200px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        border-radius: 0px;
        text-align: left;
    }

    .btn1245633 {
        float: left;
        transform: translate(0%, -10%);
        background-color: black;
        transform: translate(-33%, -20%);
        color: white;
        font-size: 15px;
        padding: 0px 200px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        border-radius: 0px;
        text-align: left;
    }

    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto auto;
        padding: 40px 120px;
        align-items: left;
    }

    .container6 {
        text-align: left;
        color: white;
    }

    .cart {
        margin-top: 20px;
        border: 2px solid #ccc;
        padding: 10px;
        background-color: BLACK;
        color: WHITE;
    }

    .zoom45 {
        background-color: black;
        transition: transform .2s;
        margin: -3px 0px;
        color: black;
        border-radius: 10px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .zoom45.btn12 {
        background-color: black;
        border: none;
        cursor: pointer;
        padding: 3px 0px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: black;
        min-width: 5px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        text-align: center;
        left: 20%;
        transform: translateX(0%);
        border-radius: 10px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a {
        color: white;
        padding: 5px 30px;
        margin: -2px 7px;
        text-decoration: none;
        display: block;
        text-align: center;
        transform: translate(-5%);
        font-size: 27px;
        border-radius: 10px;
    }

    .dropdown-content a:hover {
        background-color: black;
    }

.button256 {
  background-color: #AF601A; 
  border: none;
  color: white;
  padding: 15px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}

    .remove-button {
        background-color: black;
        color: white;
        border: none;
        padding: 20px -5%;
        font-size: 13px;
        cursor: pointer;
        font-family: sans-serif;
        float: right;
        /* Align the button to the right */
    }

    .button2567 {
        background-color: #61ABFB;
        border: none;
        color: black;
        padding: 15px 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 5px;
        cursor: pointer;
        border-radius: 10px;
        position: fixed;
        bottom: 5px;
        right: 124px;
    }

    .hidden {
        display: none;
    }

    .rectangle {
        height: 863px;
        width: 100%;
        background-color: #555;
    }

    container556 {
        max-width: 600px;
        margin: 20px 10px;
        padding: 20px;
        border: 2px solid black;
        color: black;
        border-radius: 10px;
    }

    h1 {
        text-align: center;
    }

    .rider-info {
        margin-top: 20px;
        color: black;
    }

    .rider-info label {
        font-weight: bold;
        color: black;
    }

    .rider-info p {
        margin: 5px 0;
        color: black;
    }

    .button15 {
        width: 200px;
    }

    .button25 {
        width: 200px;
    }

    .button35 {
        width: 200px;
    }

    .button45 {
        width: 200px;
    }
    </style>
    </style>
</head>

<body>
    <div class="topnav" class="header" id="myHeader">
        <header>
  <a href="elmer2.php"><img align="center" src="Bigb2.png" class="center" width="250" height="80" href="#about"></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="topnavblue">
  <div class="dropdown">
  <button class="zoom45 btn12"> 
    <a href="#"><img src="789.jpg" width="28" height="26"></a>
  </button>
  <div class="dropdown-content">
    <!-- Dropdown content here -->
    <a href="elmer4.php" >Profile</a>
	<a href="elmer5.php">Settings</a>
	<a id="logout" onclick="logout()">Log Out</a>
  </div>
                </div>
            </div>
    </div>
    </header>
    <div class="container">
        <br><br><br><br>
        <h1>Order Checkout</h1>
        <p>Your order is almost ready for checkout. We are currently waiting for the rider.</p>
        <div class="waiting-message">Please wait, the rider will be on their way shortly.</div>
    </div>

    <div class="container556">

        <h1>Order Information</h1>
        <div class="rider-info">

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
    if (isset($_GET['order_id'])) {
        $order_id = $_GET['order_id'];

        // Prepare and execute SELECT query
        $sql = "SELECT * FROM orders WHERE id = $order_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Fetch order details
            $order = $result->fetch_assoc();
            $total_price = number_format($order['total_price'], 2);

            // Display order details as HTML
            echo '<div class="order-details">';
            echo '<p><b><span class="label">Customer Name:</span></b> ' . $order['customer_name'] . '</p>';
            echo '<p><b><span class="label">Customer Number:</span></b> ' . $order['customer_number'] . '</p>';
            echo '<p><b><span class="label">Address:</span></b> ' . $order['address'] . '</p>';
            echo '<p><b><span class="label">Mode of Payment:</span></b> ' . $order['mode_of_payment'] . '</p>';
            echo '<p><b><span class="label">Note to Rider:</span></b> ' . $order['note_to_rider'] . '</p>';
            echo '<br><br>';
            $sql = "SELECT * FROM order_items WHERE order_id = $order_id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) { 
                echo '<div class="order-items">';
                while ($row = $result->fetch_assoc()) {
                    echo '<p><b><span class="label">'.$row['item_name'].':</b></span> X' . $row['quantity'] . ' ₱'.$row['price'].'</p>';
                }
                echo '</div>';
            }
            echo '<p><b><h2><span class="label">Total Price:</span></h2> ₱' .  $total_price. '</b> </p>';
            echo '</div>';

        } else {
            echo "Order not found.";
        }
    } else {
        echo "Invalid request. Please provide an order ID.";
    }

    // Close database connection
    $conn->close();
    ?>
        </div>
    </div>
<center>
<a href="elmer6.php"><button class="button256 button15">About Us</button></a>
<a href="elmer7.php"><button class="button256 button25">Contact</button></a>
<a href="elmer8.php"><button class="button256 button35">Help Center</button></a>
<a href="elmer9.php"><button class="button256 button45">Terms & Condition</button></a>
</center>
</body>
<script>
  function logout() {var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost/data/logout.php", true);

            xhr.onload = function() {  
				window.location.href = "http://localhost/data/elmer1.php";
            }; 
			xhr.send();
}
</script>
</html>