<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: elmer1.php"); // Redirect to dashboard if logged in
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

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
	color: black;
	text-align: left;
}

.topnav {
  background-color: white;
   position: absolute;
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
  weight:20% 0;
  padding-top: 100%;
  text-align: right;
  padding: 0px 22px;
  
}
.topnav a:hover {
    transition: transform .2s;
    -ms-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(.9);
  }
button.btn12{
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
button.btn12{
margin: 0px;
}
button.btn13{
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
  border:none;
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
  border:none;
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
		background-color:BLACK;
		color:WHITE;
    } .zoom45 {
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
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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
#floating-cart {
        position: fixed;
        bottom: 60px;
        right: 20px;
        background-color: #ffffff;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 10px;
    }
.button256789 {
  background-color: gray; 
  color: black;
  padding: 15px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}
.button25ge {
  background-color: gray; 
  border: none;
  color: black;
  padding: 15px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
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
    float: right; /* Align the button to the right */
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
.button154 {width: 100%;}

.button15 {width: 200px;}

.hidden {
            display: none;
        }
		.rectangle {
  height: auto;
  width: auto%;
  background-color: #555;
}
.zoom1 {
  padding: 18px;
  background-color: white;
  transition: transform .2s;
  margin: -2px 2.5px;
  border: 2px solid black;
  color: black;
  border-radius: 10px;
}


.button15:hover {
  -ms-transform: scale(1); 
  -webkit-transform: scale(1); 
  transform: scale(.9); 
}
.zoom1:hover {
  -ms-transform: scale(1); 
  -webkit-transform: scale(1); 
  transform: scale(.9); 
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
.modal-content {
  background-color: #fefefe;
  margin: -2%  10% ;
  border: 1px solid #888;
  width: 80%; 
}
.modal {
  display: none;
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}
button.btn13{
margin: 0px;
}
body {font-family: Arial, Helvetica, sans-serif;}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.dark-mode {
  background-color: black;
  color: white;
}
.container2 {
  height:20px;
  width: 2000px;
  color: black;


}
    .container552{
        max-width: 600px;
        margin: 10px auto;
        padding: 30px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
</style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
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
  <center>
<button class="button256 button15" onclick="document.getElementById('id03').style.display='block'" style="width:200px; background-color: #AF601A;">Edit Information</button>

<div id="id03" class="modal">
  <center>
  <div class= "container552">
<div class="imgcontainer">
	        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img img align="center" src="Bigb2.png" class="center" width="250" height="80" href="#about">
	   </div>

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
        $user = $result->fetch_assoc();
echo '<div = "container2">';
        // Display order details as HTML
        echo '<form id="updateform">';
        echo '<div class="container552">';
        echo 'First Name';
        echo '<h2><input class="button256789 button154" name="firstname" value="'.$user['firstname'].'"/></h2>';
        echo 'Last Name';
        echo '<h2><input class="button256789 button154" <input name="lastname" value="'.$user['lastname'].'"/></h2>';
        echo 'Address';
        echo '<h2><input class="button256789 button154" <input name="address" value="'.$user['address'].'"/></h2>';
        echo 'Date Of Birth';
        echo '<h2><input class="button256789 button154" <input type="date" name="dateofbirth" value="'.$user['dateofbirth'].'"/></h2>';
        echo '<button class="button15 button25ge" onClick="updateUser()" type="button">Submit</button>';
        echo '</form>';
        echo '</div>';
    } else {
        echo "Order not found.";
    }
} else {
    echo "Invalid request. Please provide an order ID.";
    header("Location: elmer1.php");
}

// Close database connection
$conn->close();
?>
</center>
</div>
</div>
<br>
<hr>
<a href="elmer6.php"><button class="button256 button15">About Us</button></a>
<br>
<a href="elmer7.php"><button class="button256 button15">Contact</button></a>
<br>
<a href="elmer8.php"><button class="button256 button15">Help Center</button></a>
<br>
<a href="elmer9.php"><button class="button256 button15">Terms & Condition</button></a>
<br>
<a href="elmer10.php"><button class="button256 button15">Privacy</button></a>
<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
function updateUser() {
            var formData = new FormData(document.getElementById("updateform"));

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost/data/updateuser.php", true);

            xhr.onload = function() {
                if (xhr.status == 200) {
                    alert(xhr.responseText);
                    window.location.reload();
                }
            };

            xhr.send(formData);
        }function logout() {var xhr = new XMLHttpRequest();
          xhr.open("POST", "http://localhost/data/logout.php", true);

          xhr.onload = function() {  
      window.location.href = "http://localhost/data/elmer1.php";
          }; 
    xhr.send();
}
</script>
</body>
</html>