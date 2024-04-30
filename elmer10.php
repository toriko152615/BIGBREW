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
  weight:20% 0;
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
  width: auto%;
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
<div class="rectangle" align="left" >
<br><br><br><br><br>
<h1>PRIVACY POLICY</h1>


<h2>Dear Customer<br></h2>
We are pleased that you are interested in data protection. We would like to give you an easily understandable overview of the data processing practices and our privacy compliance measures in relation to our delivery websites, applications and related services (collectively referred to as "platform" below). Our goal is to provide you with an amazing customer experience while keeping your personal data secure. Trust, transparency, and honesty are our leading principles. Your trust in our product is the reason why we can provide you with an amazing customer experience.<br>

<h2>Who we are<br></h2>
We are Delivery Hero Philippines, Inc. (“we”, “us” or “our”), but usually we just use the name Bigbrew Coffee Philippines.<br>
As regards the processing activities conducted on our platform, we will be the data controller responsible for what happens with your personal data. "Data controller" is a legal term and simply means that we are the party determining how your personal data is processed, for what purposes this is done and by what means. While we are required by law to provide you with all of the following information, we do so also out of the belief that a partnership should always be honest.<br>

If you have any questions about data protection at Bigbrew Coffee, you can contact our data protection officer at any time by sending an email to dpo@BigbrewCoffee.ph.<br>

While visiting our platform, registering or placing orders, you agree to this privacy policy. This privacy policy applies to all personal data obtained by us through your use of our platform. It does not apply to any websites controlled by third parties not affiliated with us that our platform may link to (“Third Party Sites”). The relevant privacy policies set out in the respective Third Party Sites shall apply in those cases.<br>

<h2>Privacy is your right and the choice is yours<br></h2>
As a customer you have the choice which information you would like to share with us. Please be aware, however, that when signing up to our platform, you are required to accept our terms of use. Legally speaking, this means you will enter into a contract with us under which you are entitled to use the platform, in accordance with the terms of use. Of course, we need some information from you to be able to perform our obligations under this contract. However, it is entirely up to you to choose whether you would like to provide such information or would rather not use our platform.<br>
You can take the following steps to control and manage how much personal data you share with us:<br>

Cookies & web-tracking: You can set your device or web browser to decline cookies and other web-tracking technologies (which is also possible through our consent manager). If you deactivate web-tracking, you will no longer see any personalized contents, offers or ads.<br>

Direct marketing: If you do not want to receive newsletters from us, you can unsubscribe at any time. In this case, we will not be able to send you any cool offers.<br>

You may also withdraw your consent for the processing of your personal data for certain Purposes (e.g. marketing) by submitting your request via email to dpo@GBigbrew Coffee.ph.<br>

<h2>Your Legal Rights<br></h2>
<h2>Right to access<br></h2>

You have the right to be informed which data we store about you and how we process this data.<br>

<h2>Right to rectification<br></h2>

If you notice that stored data is incorrect, you can always ask us to correct it.<br>

<h2>Right to erasure<br></h2>

You can ask us at any time to delete the data we have stored about you.<br>

<h2>Right to data portability<br></h2>

You can ask us to transmit the data stored about you in a machine-readable format to you or to another responsible person.<br>

<h2>Right to object<br></h2>

You are free to object to receiving newsletters or any other direct marketing communications at any time.<br>

You also have the right, for reasons arising from your particular situation, to object at any time to the processing of your personal data, which is processed on the basis of Sec. 34 (b) DPA IRR ; this also applies to any profiling for the purposes of Sec. 34 (b) DPA IRR. If you object, we will no longer process your personal data in the future unless we can prove compelling grounds for the processing that outweigh your interests, rights and freedoms<br>

<h2>Right to withdraw your consent to the processing of your personal data<br></h2>

You can withdraw your consent to our collection, use and disclosure of your personal data at any time for any or all of the Purposes. Upon receiving your withdrawal request, we may require reasonable time (depending on the complexity of the request and its impact on our relationship with you) for your request to be Processed and for us to notify you of the consequences of us acceding to the same, including any legal consequences which may affect your rights and liabilities to us. Please note that depending on the nature and scope of your request, we may not be in a position to continue providing our services to you and we shall, in such circumstances, notify you before completing the processing of your request.<br>

To exercise your rights, you may send in your request via email to dpo@Bigbrew Coffee.ph at any time and we will process such requests in accordance with this Privacy Policy and our obligations under applicable laws.<br>

We will respond to your request as soon as practicable, in any case within thirty (30) working days upon receiving your request and/or the necessary supporting or additional documentation. We will also inform you within the timeframe if we are unable to adhere to your request (with reasons) or require additional time to effect the request.<br>

We may charge you a reasonable fee for the handling and processing of your requests to access your personal data, and will inform you of the amount charged in advance.<br>

You may also delete your account through your user profile on our platform.<br>

<h2>An overview of the personal data we process<br></h2>
In this section you can find general information about the categories of personal data we process about you. For your understanding, personal data is information that directly identifies you (such as your name or photo picture) or enables us to indirectly identify you (for example, on the basis of a user ID linked with the personal information in your profile).<br>

You will find more detailed information on our processing activities below, in the next section. But our data processing activities on the platform can be summarized by reference the main categories of personal data:<br>

<h2>a. Profile data (master data)<br></h2>

This includes your name, email address, password, telephone number, delivery addresses, interests, age.<br>

Why do we process this category?<br>

This data is your master data, which we absolutely need for our services. Without an email address / telephone number and a password, you cannot create a profile. Together with your name, this is your master data. We need your age to ensure that you are not a minor.<br>

<h2>b. Delivery data<br></h2>

This includes your name, delivery address, phone number, order details and order ID. If you are using our on-demand Bigbrew Coffee rider service (“Bigbrew Coffee”), this will also include the sender’s and recipient’s (if not yourself) names, pickup / delivery address and contact details.<br>

<h2>Why do we process this category?<br></h2>

In accordance with the principle of data minimization, we only provide our riders, shops and restaurants (as the case may be) with the information that they need from you to prepare and deliver your order and otherwise provide services requested to you.<br>

<h2>c. Order history data<br></h2>

This includes your order history, selected shops or restaurants (as the case may be), invoices, order ID, comments on orders, information on payment method, delivery address, successful orders and cancelled orders<br>

<h2>Why do we process this category?<br></h2>

Each time you place an order, this information will be added to your profile. You can view all this information in your profile at any time. We will use this information to improve our services and optimize the platform for your interests.<br>

<h2>d. Location data<br></h2>

This includes your address, postcode, city, country and your device’s longitude and latitude.<br>

<h2>Why do we process this category?<br></h2>

We need these data to be able to deliver your orders (or enable the restaurant or shop you have ordered from to deliver it to you). We create the longitude and latitude automatically in order to be able to process your delivery address in our other linked systems, such as our Rider app, and to display your address to our riders or riders of restaurants.<br>

<h2>e. Device information and access data<br></h2>

This includes your device ID, device identification, operating system and corresponding version, time of access, configuration settings, and your IP address.<br>

<h2>Why do we process this category?<br></h2>

Each time you access our platform, this information is stored by us for technical reasons. We also use parts of this information to detect suspicious behaviour at an early stage and to protect our platform.<br>

<h2>f. Customer care data<br></h2>

This includes your name, address, telephone number, email address, and your ID from any social media (if applicable).<br>

<h2>Why do we process this category?<br></h2>

If you contact us, we collect this data because we need to know who we are talking to and what we have been talking about so that we can help you with your reason for contacting us. This also applies if you leave comments on social media on our fan pages. We do not combine this data with your profile data on our platform, but we can still identify you by your social media ID.<br>

<h2>g. Marketing contact and communications data<br></h2>
Why do we process this category?<br>
If you would like to receive an email newsletter, an SMS, an instant message, or an in-app push notification from us, we need certain information to send you the messages.<br>
Instead of addressing you with "Hey You", we find it more customer friendly to address you with your name.<br>
This category of personal data is also used by us to contact you, for example, if a product cannot be delivered and we want to offer you an alternative instead.<br>
<h2>h. Payment data<br></h2>
This includes your payment method, and encrypted, pseudonymized credit card information<br>
Why do we process this category?<br>
We need this information to initiate your payments and assign them to the orders you have placed.<br>
We also need this data to store your payment information for future orders (if you give us your consent to do so).<br>
<h2>5. Our detailed processing activities and processing purposes<br></h2>
We process your personal data only in accordance with relevant data protection laws.<br>
We pay particular attention to the fact that all principles for the processing of personal data are taken into account.<br>
Therefore, we only process your data if this is lawful and you can reasonably expect it to be processed.<br>
In order to be able to offer you our services, the processing of your personal data is essential.<br>
You do provide us with some of this data proactively by entering them on your device.<br>
Other data we collect automatically when you are using our platforms.<br>
We process your personal data for the following purposes (“Purposes”):<br>

</div>
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