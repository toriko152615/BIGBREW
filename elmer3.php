<?php   
session_start();
// Check if user is already logged in
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
    background-color: white;
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
.btn12456 {
  float: left;
  background-color: #AF601A;
  transform: translate(-37%, -28%);
  color: black;
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
  background-color: #AF601A;
  transform: translate(-33%, -28%);
  color: black;
  font-size: 15px;
  padding: 0px 200px;
  text-decoration: none;
  border:none;
  cursor: pointer;
  border-radius: 0px;
  text-align: left;
}
.btn1245644 {
  float: left;
  transform: translate(0%, -10%);
  background-color: #AF601A;
  transform: translate(-30%, -28%);
  color: black;
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
		bottom: 65px;
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
        bottom: 115px;
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
.button15 {width: 200px;}
.button25 {width: 200px;}
.button35 {width: 200px;}
.button45 {width: 200px;}
.remove-button {
    background-color: black;
    color: white;
    border: none;
    padding: 20px -5%;
	font-size: 13px;
    cursor: pointer;
	font-family: sans-serif;
    float: right;
}
	.button2567 {
  background-color: #AF601A; 
  border: none;
  color: white;
  padding: 15px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 5px;
  cursor: pointer;
  border-radius: 10px;
  position: fixed;
        bottom: 55px;
        right: 124px;
}

.button15 {width: 180px;}

.hidden {
            display: none;
        }
		
		
		input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 5px 5px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
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
</div>
<br>
<br>
<br>
<br>
<br>
<div class="container6">
  <img src="BB.jpg"  width="100%" height="600px">
</div>
	<div  id="products" class="grid-container">
  <div onclick="addToCart('DARK CHOCO', 39.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="DARCK CHOCO.png" style="width:250px">
	<span>Product 1 - ₱39.00</span>
    <button class="btn12456"><b>
      <p>DARK&nbsp;CHOCO</p>
      <p>39.00&nbsp;PHP</p></b>
    </button>
  </div>
  <div onclick="addToCart('WINTERMELON' , 39.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="WINTERMELON.png" style="width:250px">
	<span>Product 2 - ₱39.00</span>
    <button class="btn12456"><b>
      <p>WINTERMELON</p>
      <p>39.00&nbsp;PHP</p></b>
    </button>
  </div>
  <div onclick="addToCart('OKINAWA', 39.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="OKINAWA.png" style="width:250px">
	<span>Product 3 - ₱39.00</span>
    <button class="btn12456"><b>
      <p>OKINAWA</p>
      <p>39.00&nbsp;PHP</p></b>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SALTED CARAMEL' ,39.00)">
    <img src="SALTED CARAMEL.png" style="width:250px">
	<span>Product 4 - ₱39.00</span>
    <button class="btn1245633"><b>
      <p>SALTED&nbsp;CARAMEL</p>
      <p>39.00&nbsp;PHP</p></b>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('RED VELVET' ,39.00)">
		<img src="RED VELVET.png" style="width:261px " >
		<span>Product 5 - ₱39.00</span>
		<button class="btn12456">	<b>	
		<p>RED&nbsp;VELVET</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('TARO' ,39.00)">
		<img src="TARO.png" style="width:261px">
		<span>Product 6 - ₱39.00</span>
		<button class="btn12456">	<b>	
		<p>TARO</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('DOUBLE DUTCH',39.00)">
		<img src="DOUBLE DUTCH.png" style="width:260px">
		<span>Product 7 - ₱39.00</span>
		<button class="btn1245633"><b>		
		<p>DOUBLE&nbsp;DUTCH</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHEESECAKE',39.00)">
		<img src="CHEESECAKE.png" style="width:260px">
		<span>Product 8 - ₱39.00</span>
		<button class="btn12456"><b>		
		<p>CHEESECAKE</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>

<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('COOKIES AND CREAM',39.00)">
		<img src="COOKIES AND CREAM.png" style="width:250px" >
		<span>Product 9 - ₱39.00</span>
		<button class="btn1245633">		<b>
		<p>COOKIES&nbsp;&&nbsp;CREAM</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MATCHA',39.00)">
		<img src="MATCHA.png" style="width:250px">
		<span>Product 10 - ₱39.00</span>
		<button class="btn12456">	<b>	
		<p>MATCHA</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHOCOLATE',39.00)">
		<img src="CHOCOLATE.png" style="width:250px">
		<span>Product 11 - ₱39.00</span>
		<button class="btn12456">	<b>	
		<p>CHOCOLATE</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KAPE BRUSKO',39.00)">
		<img src="KAPE BRUSKO.png" style="width:250px">
		<span>Product 12 - ₱39.00</span>
		<button class="btn12456">	<b>	
		<p>KAPE&nbsp;BRUSKO</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
	
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KAPE MOCA',39.00)">
		<img src="KAPE MOCA.png" style="width:250px" >
		<span>Product 13 - ₱39.00</span>
		<button class="btn12456">	<b>	
		<p>KAPE&nbsp;MOCA</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KAPE VANILLA',39.00)">
		<img src="KAPE VANILLA.png" style="width:250px">
		<span>Product 14 - ₱39.00</span>
		<button class="btn1245633">	<b>	
		<p>KAPE&nbsp;VANILLA</p>
		<p>39.00&nbsp;PHP</p></b>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KAPE MACCHIATO',39.00)">
		<img src="KAPE MACCHIATO.png" style="width:250px">
		<span>Product 15 - ₱39.00</span>
		<button class="btn1245633">	<b>	
		<p>KAPE&nbsp;MACCHIATO</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KAPE CARAMEL', 39.00)">
		<img src="KAPE CARAMEL.png" style="width:250px">
		<span>Product 16 - ₱39.00</span>
		<button class="btn1245633">	<b>	
		<p>KAPE&nbsp;CARAMEL</p>
		<p>39.00 PHP</p></b></b>
</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KAPE MATCHA',39.00)">
		<img src="KAPE MATCHA.png" style="width:250px">
		<span>Product 17 - ₱39.00</span>
		<button class="btn12456">	<b>	
		<p>KAPE&nbsp;MATCHA</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KAPE FUDGE',39.00)">
		<img src="KAPE FUDGE.png" style="width:250px"><span>Product 18 - ₱39.00</span>
		<button class="btn12456">	<b>	
		<p>KAPE&nbsp;FUDGE</p>
		<p>39.00 PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KIWI',39.00)">
		<img src="KIWI.png" style="width:250px"><span>Product 19 - ₱39.00</span>
		<button class="btn12456">	<b>	
		<p>KIWI</p>
		<p>39.00&nbsp;PHP</p></b>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('GREEN APPLE',39.00)">
		<img src="GREEN APPLE.png" style="width:250px"><span>Product 20 - ₱39.00</span>
		<button class="btn12456"><b>		
		<p>GREEN&nbsp;APPLE</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LEMON',39.00)">
		<img src="LEMON.png" style="width:250px"><span>Product 21 - ₱39.00</span>
		<button class="btn12456"><b>		
		<p>LEMON</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HONEY PEACH',39.00)">
		<img src="HONEY PEACH.png" style="width:250px"><span>Product 22 - ₱39.00</span>
		<button class="btn1245633">	<b>	
		<p>HONEY&nbsp;PEACH</p>
		<p>39.00&nbsp;PHP</p></b>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BLUEBERRY',39.00)" >
		<img src="BLUEBERRY.png" style="width:250px"><span>Product 23 - ₱39.00</span>
		<button class="btn12456"><b>		
		<p>BLUEBERRY</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MANGO',39.00)">
		<img src="MANGO.png" style="width:250px"><span>Product 24 - ₱39.00</span>
		<button class="btn12456"><b>		
		<p>MANGO</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>	
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LYCHEE',39.00)">
		<img src="LYCHEE.png" style="width:250px"><span>Product 25 - ₱39.00</span>
		<button class="btn12456"><b>		
		<p>LYCHEE</p>
		<p>39.00&nbsp;PHP</p></b>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('FASHION FRUIT',39.00)">
		<img src="FASHION FRUIT.png" style="width:250px"><span>Product 26 - ₱39.00</span>
		<button class="btn12456">	<b>	
		<p>FASHION&nbsp;FRUIT</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('WATERMELON',39.00)">
		<img src="WATERMELON.png" style="width:250px"><span>Product 27 - ₱39.00</span>
		<button class="btn12456">	<b>	
		<p>WATERMELON</p>
		<p>39.00&nbsp;PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HOT MOCA',39.00)">
		<img src="HOT MOCA.png" style="width:250px"><span>Product 28 - ₱39.00</span>
		<button class="btn12456">	<b>	
		<p>HOT&nbsp;MOCA</p>
		<p>39.00 PHP</p></b>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HOT MATCHA',49.00)">
		<img src="HOT MOCA.png" style="width:250px"><span>Product 29 - ₱49.00</span>
		<button class="btn1245633">	<b>	
		<p>HOT&nbsp;MATCHA</p>
		<p>49.00 PHP</p></b>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HOT BRUSKO',49.00)">
		<img src="HOT MOCA.png" style="width:250px"><span>Product 30 - ₱49.00</span>
		<button class="btn12456">	<b>	
		<p>HOT&nbsp;BRUSKO</p>
		<p>49.00 PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HOT CHOCO',49.00)">
		<img src="HOT MOCA.png" style="width:250px"><span>Product 3 - ₱49.00</span>
		<button class="btn12456">	<b>	
		<p>HOT&nbsp;CHOCO</p>
		<p>49.00 PHP</p></b>
		</button>
	</div>	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HOT CARAMEL',49.00)">
		<img src="HOT MOCA.png" style="width:250px"><span>Product 31 - ₱49.00</span>
		<button class="btn1245633">	<b>	
		<p>HOT&nbsp;CARAMEL</p>
		<p>49.00 PHP</p></b>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILKTEA STRAWBERRY',39.00)">
		<img src="MILKTEA STRAWBERRY.png" style="width:250px"><span>Product 32 - ₱39.00</span>
		<button class="btn1245633">		<b>
		<p>MILKTEA&nbsp;STRAWBERRY</p>
		<p>39.00 PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILKTEA CHOCOBERRY',39.00)">
		<img src="MILKTEA CHOCOBERRY.png" style="width:250px"><span>Product 33 - ₱39.00</span>
		<button class="btn1245633">		<b>
		<p>MILKTEA&nbsp;CHOCOBERRY</p>
		<p>39.00 PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('FRUIT TEA STRAWBERRY',39.00)">
		<img src="FRUIT TEA STRAWBERRY.png" style="width:250px"><span>Product 34 - ₱39.00</span>
		<button class="btn1245633">		<b>
		<p>FRUIT&nbsp;TEA&nbsp;STRAWBERRY</p>
		<p>39.00 PHP</p></b>
		</button>
	</div>	
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BOSS BREW',90.00)">
		<img src="BOSS BREW.png" style="width:250px"><span>Product 35 - ₱90.00</span>
		<button class="btn12456">		<b>
		<p>BOSS&nbsp;BREW</p>
		<p>90.00 PHP</p></b>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BLANKPINK',90.00)">
		<img src="BLANKPINK.png" style="width:250px"><span>Product 36 - ₱90.00</span>
		<button class="btn12456">	<b>	
		<p>BLANK&nbsp;PINK</p>
		<p>90.00 PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KARAVAN',95.00)" >
		<img src="KARAVAN.png" style="width:250px"><span>Product 37 - ₱95.00</span>
		<button class="btn12456">		<b>
		<p>KARA&nbsp;-&nbsp;VAN</p>
		<p>95.00&nbsp;PHP</p></b>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KMJS GRANDE',90.00)">
		<img src="KMJS GRANDE.png" style="width:250px"><span>Product 38 - ₱90.00</span>
		<button class="btn12456">		<b>
		<p>KMJS&nbsp;GRANDE</p>
		<p>90.00 PHP</p></b>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PRAF MOCA',69.00)">
		<img src="PRAF MOCA.png" style="width:250px"><span>Product 39 - ₱69.00</span>
		<button class="btn12456">		<b>
		<p>PRAF&nbsp;MOCA</p>
		<p>69.00 PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PRAF CARAMEL MACCHIATO',69.00)">
		<img src="PRAF CARAMEL MACCHIATO.png" style="width:250px"><span>Product 40 - ₱69.00</span>
		<button class="btn1245644">		<b>
		<p>PRAF&nbsp;CARAMEL&nbsp;MACCHIATO</p>
		<p>69.00 PHP</p></b>
		</button>
	</div>	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PRAF COFFEE JELLY',69.00)">
		<img src="PRAF COFFEE JELLY.png" style="width:250px"><span>Product 41 - ₱69.00</span>
		<button class="btn1245633">		<b>
		<p>PRAF&nbsp;COFFEE&nbsp;JELLY</p>
		<p>69.00 PHP</p></b>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PRAF VANILLA',69.00)">
		<img src="PRAF VANILLA.png" style="width:250px"><span>Product 42 - ₱69.00</span>
		<button class="btn12456">		<b>
		<p>PRAF&nbsp;VANILLA</p>
		<p>69.00 PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PRAF COOKIES AND CREAM',69.00)">
		<img src="PRAF COOKIES AND CREAM.png" style="width:250px"><span>Product 43 - ₱69.00</span>
		<button class="btn1245633">		<b>
		<p>PRAF&nbsp;COOKIES&nbsp;&&nbsp;CREAM</p>
		<p>69.00 PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PRAF MATCHA',69.00)">
		<img src="PRAF MATCHA.png" style="width:250px"><span>Product 44 - ₱69.00</span>
		<button class="btn12456">		<b>
		<p>PRAF&nbsp;MATCHA</p>
		<p>69.00 PHP</p></b>
		</button>
	</div>	
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PRAF CHOCOLATE',69.00)">
		<img src="PRAF CHOCOLATE.png" style="width:250px"><span>Product 45 - ₱69.00</span>
		<button class="btn1245633">		<b>
		<p>PRAF&nbsp;CHOCOLATE</p>
		<p>69.00 PHP</p></b>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PRAF TARO',69.00)">
		<img src="PRAF TARO.png" style="width:250px"><span>Product 46 - ₱69.00</span>
		<button class="btn12456">		<b>
		<p>PRAF&nbsp;TARO</p>
		<p>69.00 PHP</p></b>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="productName" onclick="addToCart('PRAF STRAWBERRY',69.00)">
		<img src="PRAF STRAWBERRY.png" style="width:250px"><span>Product 47 - ₱69.00</span>
		<button class="btn1245633">		<b>
		<p>PRAF&nbsp;STRAWBERRY</p>
		<p>69.00 PHP</p></b>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="productName" onclick="addToCart('PRAF CHEESECAKE' ,69.00)">
		<img src="PRAF CHEESECAKE.png" style="width:250px"><span>Product 48 - ₱69.00</span>
		<button class="btn1245633">		<b>
		<p>PRAF&nbsp;CHEESECAKE</p>
		<p>69.00 PHP</p> </b>
		</button>
	</div>
	</div>
	
	<center>
<a href="elmer6.php"><button class="button256 button15">About Us</button></a>
<a href="elmer7.php"><button class="button256 button25">Contact</button></a>
<a href="elmer8.php"><button class="button256 button35">Help Center</button></a>
<a href="elmer9.php"><button class="button256 button45">Terms & Condition</button></a>
</center>

<button class="button2567 button15" onclick="toggleDiv()">Check Order</button>
<div id="content" class="hidden">
    <div style="color:black; height: 400px; width:400px;overflow-y: auto;" id="floating-cart" class="cart">
        <ul id="cart-items"></ul>
        <p>Total Price: <span id="total-price">0.00</span></p>
        
        <div class="container">
            <form id="orderform">
                <label for="email"><b>Costumer Name </b></label>
    <input type="text" placeholder="Costumer Name" name="customer_name" required>
                <br>
				<label for="email"><b>Contact Number </b></label>
    <input type="text" placeholder="Contact Number" name="customer_number" required>
                <br>
                <label for="email"><b>Address </b></label>
    <input type="text" placeholder="Address" name="address" required>
                <br>
                <label for="country">Mode of Payment</label>
                <select id="country" name="mode_of_payment">
                    <option value="COD">Cash on Delivery</option>
                </select>
                <br>
				<input hidden id="total_price" name="total_price"></input>

                <label for="subject">Note to Rider</label>
                <textarea id="subject" name="note_to_rider" placeholder="Write something.." style="height:100px"></textarea>
            
		<button type="button" onclick="processorder()"class="button256 button15"  required>Check Out</button>
		</form>
        <button class="button256 button15" onclick="cancel()">Cancel</button>
		
    </div>
</div>


</body>
</html>
<script>
let cartItems = {};

        function addToCart(item, price) {
            if (cartItems[item]) {
                cartItems[item].quantity++;
            } else {
                cartItems[item] = { price: price, quantity: 1 };
            }
            renderCart();
        }

        function removeFromCart(item) {
            if (cartItems[item] && cartItems[item].quantity > 0) {
                cartItems[item].quantity--;
                if (cartItems[item].quantity === 0) {
                    delete cartItems[item];
                }
            }
            renderCart();
        }

        function getTotalPrice() {
            let total = 0;
            Object.keys(cartItems).forEach(item => {
                total += cartItems[item].price * cartItems[item].quantity;
            });
            return total.toFixed(2);
        }

        function renderCart() {
            const cartItemsElement = document.getElementById("cart-items");
            const totalPriceElement = document.getElementById("total-price");
            cartItemsElement.innerHTML = "";
            Object.keys(cartItems).forEach(item => {
                const li = document.createElement("li");
                li.textContent = `${item} x ${cartItems[item].quantity}`;
                        const removeButton = document.createElement("button");
        removeButton.textContent = "Remove";
        removeButton.className = "remove-button";
        removeButton.onclick = () => removeFromCart(item);
                li.appendChild(removeButton);
                cartItemsElement.appendChild(li);
            });
            totalPriceElement.textContent = getTotalPrice();
			document.getElementById("total_price").value = getTotalPrice();
        }

        function order() {
            const items = Object.keys(cartItems).map(item => `${item} x ${cartItems[item].quantity}`).join("\n");
            alert(`Ordered Items:\n${items}\nTotal Price: ₱${getTotalPrice()}`);
            cartItems = {};
            renderCart();
        }

        function cancel() {
            cartItems = {};
            renderCart();
        }
		
		function toggleDiv() {
            const content = document.getElementById("content");
            content.classList.toggle("hidden");
        }
		function processorder() {
            var formData = new FormData(document.getElementById("orderform"));

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost/data/processorder.php", true);

            xhr.onload = function() {  
				processorderitem(xhr.responseText);
            }; 

            xhr.send(formData);
        }  

		function processorderitem(order_id) {
			var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost/data/processorderitem.php", true);
			xhr.setRequestHeader("Content-Type", "application/json");

            xhr.onload = function() {  
				window.location.href = "http://localhost/data/elmer15.php?order_id=" + order_id;
            }; 
			cartItems["orderId"] = order_id;
			xhr.send(JSON.stringify(cartItems));
		}  function logout() {var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost/data/logout.php", true);

            xhr.onload = function() {  
				window.location.href = "http://localhost/data/elmer1.php";
            }; 
			xhr.send();
}
    </script>

