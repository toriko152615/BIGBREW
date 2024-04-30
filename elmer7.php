<?php   
session_start();
// Check if user is already logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: elmer12.php"); // Redirect to dashboard if logged in
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
	color: white;
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
  weight:10% 0;
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

.button15 {width: 180px;}

.hidden {
            display: none;
        }
		.rectangle {
  height: auto;
  width: auto;
  background-color: #555;
}
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
  function logout() {var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost/data/logout.php", true);

            xhr.onload = function() {  
				window.location.href = "http://localhost/data/elmer12.php";
            }; 
			xhr.send();
}
</script>
</html>
