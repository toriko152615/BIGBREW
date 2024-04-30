<?php 
session_start();
// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
  header("Location: elmer7.php"); // Redirect to dashboard if logged in
  exit();
}

if(isset($_POST["uname"]) && isset($_POST["psw"])){   
  if($_POST["uname"] !== "" && $_POST["psw"] !== ""){
      header("Location: new 2.php"); 
  }
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "elmer";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-color: white;
	color: white;
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
  weight:5% 0;
  padding-top: 100%;
  text-align: right;
  padding: 0px 5px;
  
}
.topnav a:hover {
    transition: transform .2s;
    -ms-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(.9);

}body {font-family: Arial, Helvetica, sans-serif;}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button.btn12{
margin: 50px 5px;
padding:50px;
}
button.btn13{
margin: 0px;


}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40;
  Hieght: 60;
  border-radius: 50;
}

.container {
  height: 220px;
  width: 500px;
  color: black;
    margin-top: -500px 
    margin-bottom: -500px 

}
.container2 {
  height:800px;
  width: 500px;
  color: black;


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

.modal-content {
  background-color: #fefefe;
  margin: -2%  10% ;
  border: 1px solid #888;
  width: 80%; 
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
.zoom1 {
  padding: 18px;
  background-color: white;
  transition: transform .2s;
  margin: -2px 2.5px;
  border: 2px solid #AF601A;
  color: black;
  border-radius: 10px;
}
.zoom {
  padding: 18px;
  background-color: #AF601A;
  transition: transform .2s;
  margin: -2px 2.5px;
  border: 2px solid #AF601A;
  color: white;
  border-radius: 10px;
}

.zoom:hover {
  -ms-transform: scale(1); 
  -webkit-transform: scale(1); 
  transform: scale(.9); 
}
.zoom1:hover {
  -ms-transform: scale(1); 
  -webkit-transform: scale(1); 
  transform: scale(.9); 
}
.container6 {
  text-align: center;
  color: white;
}

.label2 {
  color: Black;
  padding: 8px;
  font-family: Arial;
  font-size: 40px;
}
	.container123{
	text-align: center;
	color: white;
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

.button15 {width: 200px;}
.button25 {width: 200px;}
.button35 {width: 200px;}
.button45 {width: 200px;}

.img-hover-zoom {
  height: 250px; 
  width: 250px; 
  overflow: hidden; 
  align-items: center;
}

.img-hover-zoom img {
  transition: transform .5s ease;
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  align-items: center;
}
.img-hover-zoom:hover img {
  transform: scale(1.1);
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  padding: 10px 90px;
  align-items: center;
  text-decoration: none;
}
.btn1245 {
  float: right;
  top: 50px;
  left: 50%;
  transform: translate(-118%, -130%);
  background-color: white;
  text-decoration: none;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.btn12456 {
  float: right;
  top: 50px;
  left: 50%;
  transform: translate(-65%, -130%);
  background-color: white;
  text-decoration: none;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.btn12457 {
  float: right;
  top: 50px;
  left: 50%;
  transform: translate(-140%, -130%);
  background-color: white;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  text-decoration: none;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.btn12458 {
  float: right;
  top: 50px;
  left: 50%;
  transform: translate(-95%, -130%);
  background-color: white;
  text-decoration: none;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
 a { text-decoration: none; }
 .zoom45 {
  background-color: black;
  transition: transform .2s;
  margin: -15px 0px;
  color: black;
} .zoom45 {
  background-color: black;
  transition: transform .2s;
  margin: -15px 0px;
  color: black;
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
  min-width: 400px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    text-align: left;
    left: 50%;
    transform: translateX(-50%);
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-content a {
  color: white;
  padding: -5px 100px;
  text-decoration: none;
  display: block;
  text-align: left;
  transform: translate(-15%);
  font-size: 27px;
}

.dropdown-content a:hover {
  background-color: black;
}
.rectangle {
  height: auto;
  width: auto%;
  background-color: #555;
}    .container552{
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
</style>
</head>
<body>
<div class="topnav" class="header" id="myHeader">
<header>
&nbsp;
  <a href="elmer1.php" ><img align="center" src="Bigb2.png" class="center" width="250" height="80" href="#about"></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="topnavblue">
	<button class="zoom1" class="btn12" onclick="document.getElementById('id01').style.display='block'" style="width:180px; ">Login</button>
	<button class="zoom" class="btn13" onclick="document.getElementById('id02').style.display='block'" style="width:180px; background-color: #AF601A;">Sign Up</button>
  </div>
  </header>
</div>


<div id="id01" class="modal">
  
  <form class="container552" id="loginForm" class="modal-content animate" method="post">
  <center>
    <div class="imgcontainer">
	
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img align="center" src="Bigb2.png" class="center" width="250" height="80" href="#about">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input  type="text" placeholder="Enter Username" name="username" required>
	  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <br>
	  <button type="button" onclick="login()" class="zoom1" class="btn13" type="submit" style="width:auto;" >Login</button>
	  <br>
	  </form>
	  </div>
</div>
<div id="id02" class="modal">
<form class="container552" id="insertForm" class="modal-content animate" method="post">
  <center>
      <div class="imgcontainer">
	        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img align="center" src="Bigb2.png" class="center" width="250" height="80" href="#about">
	   </div>
	   <div class="container2">
	   
     <h1>Sign Up</h1>
    <label>Please fill in this form to create an account.</label>
	<br>
	<br>
   <label for="email"><b>First Name </b></label>
    <input type="text" placeholder="First Name" name="firstname" required>
	
	<label for="email"><b>Last Name </b></label>
    <input type="text" placeholder="Last Name" name="lastname" required>
	
	<label for="Date of Birth"><b>Date of Birth</b>:</label>
	<input type="date" placeholder="Date of Birth" name="dateOfBirth" required>
  <br>

	<label for="email"><b>Address </b></label>
    <input type="text" placeholder="Address" name="address" required>
    
	<label for="email"><b>Username / Email</b></label>
    <input type="text" placeholder="Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	<center>
	<button type="button" onclick="insertUser()" class="zoom1" class="btn13" style="width:auto;">Sign up</button>
		  </form> 
</center>
	  </div>
</div>
<div class="rectangle" align="left">
<br><br><br><br>
<h1>Top Questions</h1>
<b><h3>Where is my order?</h3>
After you place an online order, we transfer it to the restaurant which will then start preparing your food. Our restaurants do everything they can to get your food delivered as quickly as possible. However, heavy traffic or unexpectedly high demand may cause delays to your food delivery. Please bear with us. If it’s been too long, you can contact us and we will find out what’s going on immediately.<br><br><br><br>
<b><h3>I have a voucher code. How can I use it?</h3></b>
• If you have a voucher code, you can redeem it after selecting a restaurant and adding items to your basket. You will see a field to enter your voucher code on the order overview page. If the voucher is valid, the discount on your order will be calculated immediately. Only one voucher can be used per order. If your voucher code does not work, please try it on a different browser Otherwise, contact us and we will be happy to assist you.<br><br><br><br>
<b><h3>Are there any discounts available at Bigbrew Coffee right now?</h3></b>
• Yes. Bigbrew Coffee offers different discounts at restaurants. If you want to view them all, browse our partner vendors today!<br><br><br><br>
<h1>Ordering</h1>
<h3>How to order online at Bigbrew Coffee</h3>
It only takes three steps to order food online: Now sit back, relax, and we’ll get your food delivered to your doorstep.<br>
• Choose what you would like: Pick a restaurant and select items you’d like to order. You can search by restaurant name, cuisine type, dish name or by keyword.<br>
• Checkout: Enter your exact delivery address, payment method and your phone number. Always make sure that you enter the correct phone number to help us contact you regarding your order, if needed.<br>
Now sit back, relax, and we’ll get your food delivered to your doorstep.<br><br><br><br>
<h3>I need to cancel or change my order! How can I do this?</h3>
• With regard to order cancellation or refund of a payment you have made online, Feel free to coordinate with our Customer Service Representatives via our Live Chat if there are queries.<br><br><br><br>
<h3>Do I have to create a Bigbrew Coffee account to place an order?</h3>
• Creating an account is not mandatory. You can order using our guest checkout without having to sign up. We make sure that ordering food online at Bigbrew Coffee is quick and fuss-free. After placing your order, you will have the option of creating an account.<br><br><br><br>
<h3>How long does it take for my food order to get delivered?</h3>
• Delivery time varies from restaurant to restaurant. It also depends on the number of orders that the restaurant has to prepare and on the distance between the restaurant and your delivery address. You can see the estimated delivery time for each restaurant in your area on our website. After placing an order, a more precise delivery time will be communicated to you by SMS.<br><br><br><br>
<h3>What are the delivery costs?</h3>
• Delivery costs, just like delivery time, are determined by restaurants individually. Usually the ones closest to you will charge a small delivery fee. If a delivery driver has to travel a long way, they may charge a little extra for the service. There are many restaurants offering free delivery as well. You can easily check the delivery cost for each restaurant whilst browsing our website.<br><br><br><br> 
<h3>How can I pay for my order?</h3>
All our restaurants accept cash on delivery. In addition, there are various online payment methods available. You can check which payment methods are accepted at each restaurant by going to the ‘Info’ tab on the restaurant’s page.

<h3>• Cash on Delivery</h3>
Select ‘Cash on Delivery’ on the checkout page and pay the driver at your doorstep when receiving food.

<h3>• Credit/Debit Card</h3>
Select ‘Credit Card’ on the checkout page. After placing your order you will be redirected to the secure page of our payment partner, where you can follow its instructions. Please do not refresh the page or go back. Once the payment is confirmed, the order will be transmitted to the restaurant.<br><br><br><br>
<h1>How it works?</H1>
<h3>• What is Bigbrew Coffee?</h3>
Bigbrew Coffee is a convenient online food ordering website that connects users with thousands of local restaurants. Customers can browse through numerous menus and place orders for delivery or take-away at the best price. At Bigbrew Coffee, we believe ordering food online should be fuss-free, fast and definitely fun. With just a few clicks you can order from a wide variety of delicious cuisines online. Bigbrew Coffee provides you with restaurant menus, customer reviews and more for over 300 restaurants spread over the whole Metro Manila and soon also in Cebu city.<br><br><br><br>
<h3>• What are your opening hours?</h3>
Bigbrew Coffee is open from 10am to 11pm from Monday to Sunday. During closing hours you can browse through restaurants and place an order for later and receive it first thing when we open.<br>
If you want to view all restaurants, just go to Then enter your location to check which restaurants can deliver to you.<br><br><br><br>
<H3>• Why am I getting a message that a restaurant does not deliver to me?</H3>
The delivery area depends on each individual restaurant and Bigbrew Coffee has no influence on this. If you enter a specific address on the homepage, then you can browse all the restaurants that do deliver to you.<br><br><br><br>
<H1>My Account</h1>
<h3>• How do I change my password?</h3>
You can change the password by clicking forget password tab and it will ask you for your email address then the temporary password will be send to your email. <br><br><br><br>
<h3>• What are the advantages of an account at Bigbrew Coffee?</h3>
You are not obliged to create an account, but it is very handy.There are definitely a few advantages of signing up:
• Your previous delivery addresses will be saved so that you don't have to enter them all over again on your next order.<br>
• You can track previous orders.<br>
• You can quickly re-order<br>
• You can quickly make re-orders.<br>
There are many more advantages... register with us and discover them!<br><br><br><br>
<h3>• How can I create an account at Bigbrew Coffee?</h3>
Click on 'Log In/Sign Up' at the top of the page. Then fill out all information in the ‘Sign Up’ section and click the ‘Log In’ button. You can also create an account directly after placing an order. Your delivery address and the order will be then saved in your account.
</div>
</body>
<script>
  function insertUser() {
            var formData = new FormData(document.getElementById("insertForm"));

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost/data/insertuser.php", true);

            xhr.onload = function() {
                if (xhr.status == 200) {
                    alert(xhr.responseText);
                    window.location.reload();
                }
            };

            xhr.send(formData);
        }  
        function login() {
            var formData = new FormData(document.getElementById("loginForm"));

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost/data/login.php", true);

            xhr.onload = function() {
              if (xhr.responseText == "error") {
alert("invalid credentials");
} else {
window.location.reload();
}

            };

            xhr.send(formData);
        } 
</script>
</html>
