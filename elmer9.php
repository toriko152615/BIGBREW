<?php   
session_start();
// Check if user is already logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: elmer14.php"); // Redirect to dashboard if logged in
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
<h1>TERMS OF USE</h1>

These Terms of Use (“Terms”) govern your use of the websites and mobile applications provided by Delivery Hero Philippines, Inc. (formerly, Bigbrew Coffee Philippines, Inc.) (or referred to as “Bigbrew Coffee” or “we” or “us”) (collectively the “Platforms”). The services we provide or make available include (a) the Platforms, and (b) the services provided by the Platforms and/or by Bigbrew Coffee and made available through the Platforms (collectively, “Services”). Any new features added to the Services are subject to these Terms. These Terms govern your use of Services provided by Bigbrew Coffee.<br>

Please read these Terms carefully. By accessing and using the Platforms, you agree that you have read, understood and accepted the Terms including any additional terms and conditions and any policies referenced herein, available on the Platforms. If you do not agree to or fall within the Terms, please do not access or use the Platforms, or the Services.<br>

The Platforms may be used by (i) natural persons who have reached eighteen (18) years of age and (ii) corporate legal entities, e.g companies. Where applicable, these Terms shall be subject to country-specific provisions as set out herein.<br>

Users below the age of eighteen (18) must obtain consent from parent(s) or legal guardian(s), who by accepting these Terms shall agree to take responsibility for your actions and any charges associated with your use of the Platforms and/or purchase of Goods. If you do not have consent from your parent(s) or legal guardian(s), you must stop using/accessing the Platforms immediately.<br>

Bigbrew Coffee reserves the right to change or modify these Terms (including our policies which are incorporated into these Terms) at any time. You are strongly recommended to read these Terms regularly. You will be deemed to have agreed to the amended Terms by your continued use of the Platforms following the date on which the amended Terms are posted.<br>

<h2>1 Bigbrew Coffee</h2>

1.1 Who we are<br>

Depending on which Platform you access and use, these Terms form the contract between you and the following Bigbrew Coffee entities:<br>

Bigbrew Coffee Philippines (www.Bigbrew Coffee.ph)<br><br>


1.2 What we do<br>

Through our Platforms, Bigbrew Coffee links you to the vendors (“Vendors”) for you to order a variety of goods including prepared meals, non-prepared food, and miscellaneous non-food items (hereinafter collectively referred to as "Goods") to be delivered to you. When you place an order for Goods from our Vendors (“Order”), Bigbrew Coffee acts as an agent on behalf of that Vendor to facilitate, process, and conclude the order and subsequently for either us or the Vendor to deliver your Order to you. Vendors may be owned and operated by third-party vendors, our affiliate companies, or us.<br>

1.3 How to contact us<br>

For customer support, you may reach out to us via email at support@Bigbrew Coffee.ph or through our in-app customer support chat feature. You may initiate a chat for your Order by selecting Help Centre > Get Help with My Orders.<br><br>

<h2>2 Use of the Platforms and Bigbrew Coffee Account<br></h2>

2.1 You will need to register for a Bigbrew Coffee account (“Bigbrew Coffee Account”) for you to use the Platforms. When you register for a Bigbrew Coffee Account, we will ask you to provide your personal information including your full name, a valid email address, a mobile phone number and a unique password (hereinafter collectively referred as “User’s Details”). We reserve the right to request further information or documentation from you to comply with our legal obligations. To purchase an Order, depending on which payment method you opt for, you may need to provide us with your credit card details. Your unique password should not be shared with anyone and you agree to keep it secret at all times. You are solely responsible for keeping your password safe. Save for cases of fraud or abuse which are not your fault, you accept that all Orders placed under your Bigbrew Coffee Account are your sole responsibility.<br>

2.2 Bigbrew Coffee shall not be liable for Orders that encounter delivery issues due to incomplete, incorrect, or missing information provided by you. You are obliged to provide information that is complete, accurate, and truthful for the proper processing of the Order, including your delivery address and contact information.<br>

2.3 If you wish to delete your Bigbrew Coffee Account, please send us an email requesting the same. We may restrict, suspend or terminate your Bigbrew Coffee Account and/or use of the Platforms, if we reasonably believe that:<br>

2.3.1 someone other than you is using your Bigbrew Coffee Account; or<br>

2.3.2 where you are suspected or discovered to have been involved in any activity or conduct that is in breach of these Terms, our policies and guidelines, or involved in activity or conduct which we deem in our sole discretion to be an abuse of the Platforms.<br>

<h2>3 Restrictions</h2>

3.1 Activities Prohibited on the Platforms<br>

You may not access or use the Platforms for any other purpose other than that for which the Platform makes it available. The Platforms are for the personal use of users only and may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by the Platforms.<br>

The following is a non-exhaustive list of the types of conduct that are illegal or prohibited on the Platforms. Bigbrew Coffee reserves the right to investigate and take appropriate legal action against anyone who, in Bigbrew Coffee's sole discretion, engages in any of the prohibited activities. Prohibited activities include, but are not limited to the following:<br>

3.1.1 using the Platforms for any purpose in violation of local or national regulations;<br>

3.1.2 posting any content that infringes the intellectual property rights, privacy rights, publicity rights, trade secret rights, or any other rights of any party;<br>

3.1.3 posting content that is unlawful, obscene, defamatory, threatening, harassing, abusive, slanderous, hateful, or embarrassing to any other person or entity as determined by Bigbrew Coffee in its sole discretion or pursuant to local community standards;<br>

3.1.4 posting content that constitutes cyber-bullying, as determined by Bigbrew Coffee in its sole discretion;<br>

3.1.5 posting content that depicts any dangerous, life-threatening, or otherwise risky behavior;<br>

3.1.6 posting telephone numbers, street addresses, or last names of any person;<br>

3.1.7 posting URLs to external websites or any form of HTML or programming code;<br>

3.1.8 posting anything that may be “spam,” as determined by Bigbrew Coffee in its sole discretion;<br>

3.1.9 impersonating another person when posting content;<br>

3.1.10 harvesting or otherwise collecting information about others, including email addresses, without their consent;<br>

3.1.11 allowing any other person or entity to use your identification for posting or viewing comments;<br>

3.1.12 harassing, threatening, stalking, or abusing any person on the Platforms;<br>

3.1.13 engaging in any other conduct that restricts or inhibits any other person from using or enjoying the Websites, or which, in the sole discretion of Bigbrew Coffee, exposes Bigbrew Coffee or any of its customers, suppliers, or any other parties to any liability or detriment of any type;<br>

3.1.14 encouraging other people to engage in any prohibited activities as described herein; or<br>

3.1.15 any other prohibited activities as may be listed in our Acceptable Use Policy, which is incorporated by reference herein and accessible on our website.<br>

3.2 Bigbrew Coffee reserves the right but is not obligated to do any or all of the following:<br>

3.2.1 investigate an allegation that any content posted on the Platforms does not conform to these Terms and determine in its sole discretion to remove or request the removal of the content;<br>

3.2.2 remove content which is abusive, illegal, or disruptive, or that otherwise fails to conform with these Terms;<br>

3.2.3 suspend or terminate a user’s access to the Platforms or their Bigbrew Coffee Account upon any breach of these Terms;<br>

3.2.4 monitor, edit, or disclose any content on the Platforms; and<br>

3.2.5 edit or delete any content posted on the Platforms, regardless of whether such content violates these standards.<br>

<h2>4 Intellectual Property</h2>

All trademarks, logos, images, and service marks, including these Terms as displayed on the Platforms or in our marketing material, whether registered or unregistered, are the intellectual property of Bigbrew Coffee and/or third parties who have authorised us to use their trademarks, logos, images, and service marks (collectively the “Trademarks”). You may not use, copy, reproduce, republish, upload, post, transmit, distribute, or modify these Trademarks in any way without our prior express written consent. The use of Bigbrew Coffee's trademarks on any other website not approved by us is strictly prohibited. Bigbrew Coffee will aggressively enforce its intellectual property rights to the fullest extent of the law, including criminal prosecution. Bigbrew Coffee neither warrants nor represents that your use of materials displayed on the Platforms will not infringe rights of third parties not owned by or affiliated with Bigbrew Coffee. Use of any materials on the Platforms is at your own risk.<br><br>

<h2>5 Restrictions on Goods</h2>

5.1 Some of the Goods we offer on our Platforms are subject to restrictions for purchase (“Restricted Goods”), depending on the applicable laws of the country you purchase the Restricted Goods from. These restrictions include minimum age requirements for alcohol/alcoholic products and any other goods that we reserve the right not to deliver to you based on the relevant statutory requirements of the time being in force.<br>

5.2 Alcohol / Alcoholic Products (“Alcohol”)<br>

To purchase Alcohol, you must be of the statutory legal age. Bigbrew Coffee, the Vendor and their delivery riders, as the case may be, reserve the right in their sole discretion:<br>

5.2.1 to ask for a valid proof of age (e.g. ID card) from any person upon delivery of Alcohol;<br>

5.2.2 to refuse delivery if you are unable to prove you are of legal age; and/or 5.2.3 to refuse delivery to any person for any reason whatsoever. 5.3 Vape/E-Cigarettes/Cigarettes/Tobacco Products (“Tobacco”) 5.3.1 We may offer Tobacco on some of our Platforms where the laws allow it. By offering Tobacco for sale on our Platforms, we do not purport to advertise, promote or encourage the purchase or use of Tobacco in any way. 5.3.2 To purchase Tobacco, you must be of the statutory legal age. Bigbrew Coffee, the Vendor and their delivery riders, as the case may be, reserve the right in their sole discretion:<br>

to ask for a valid proof of age (e.g. ID card) from any persons upon delivery of Tobacco;<br>
to refuse delivery if you are unable to prove you are of legal age; and/or<br>
to refuse delivery to any person for any reason whatsoever.<br>
5.4 Any offer for any Alcohol and Tobacco made on the Platforms is void when it is prohibited by law.<br>

<h2>6 Orders</h2>

6.1 When you place an Order with Bigbrew Coffee, Bigbrew Coffee will confirm your order by sending you a confirmation email containing the Order receipt. Where applicable, Orders will include delivery fees and any applicable tax (e.g. value-added tax, etc.).<br>

6.2 Minimum Order Value - Some of our Vendors require a minimum order value (“MOV”) before an Order can be placed and delivered to you. Where an applicable Order fails to meet the MOV, you will have the option of paying the difference to meet the MOV or adding more Goods to your Order.<br>

6.3 Special Instructions – Bigbrew Coffee and the Vendor (as the case may be) reasonably endeavour to comply with your special instructions for an Order. However, in some cases where this is not feasible, possible or commercially reasonable, Bigbrew Coffee and/or the Vendor reserve the right to proceed to prepare the Order in accordance with standard operating procedures. Neither Bigbrew Coffee nor the Vendor shall be responsible to replace or refund an Order which does not conform to special instructions provided by you.<br>

6.4 Allergens – Bigbrew Coffee is not obligated to provide ingredient information or allergen information on the Platforms. Further, Bigbrew Coffee does not guarantee that the Goods sold by Vendors are free of allergens. If you have allergies, allergic reactions or dietary restrictions and requirements, please contact the Vendor before placing an Order on our Platforms.<br>

6.5 Please note that your Order may be subject to additional terms and conditions provided by the Vendor.<br>

6.6 Prior to placing the Order<br>

(i) You are required to provide the delivery address in order for the Platforms to display the Vendors available in your delivery area.<br>

(ii) Once you select a Vendor, you will be taken to that Vendor’s menu page for you to select and add your Goods to the cart.<br>

6.7 Placing the Order<br>

To complete an Order, please follow the onscreen instructions after clicking ‘Checkout’. You may be required to provide additional details for us to complete your Order. You are required to review and confirm that all the information you provide, including the amounts, delivery details, personal details, payment information, and voucher codes (if applicable) is true, accurate and complete before you click “PLACE ORDER”. An Order is successfully placed when you receive an email confirmation containing your Order receipt from us.<br>

6.8 Cancelling an Order<br>

Please contact us immediately via our in-app customer support chat feature if you wish to cancel your Order after it has been placed. You have the right to cancel your Order provided a Vendor has not yet accepted your Order.<br>

(i) Cancelling Online Payment Orders<br>

You have the right to a refund for a cancelled Order only if a Vendor has not yet accepted your Order. Should you still decide to cancel your Order after it has been accepted by the Vendor, you understand that no refunds (whether in whole or in part) will be issued to you and you forfeit the delivery of your cancelled Order.
(ii) Cancelling Cash on Delivery (“COD”) Orders<br>

You have the right to cancel your Order only if a Vendor has not yet accepted your Order. Should you still decide to cancel your Order after it has been accepted by the Vendor, you understand that you shall forfeit the delivery of your cancelled Order and COD may be removed from your list of available payment methods for your future orders.<br>
6.9 Refunds<br>

If you are entitled to a refund in accordance with Section 21.4.1 or the refund and cancellation policies set out in these Terms, you understand and agree that:<br>

6.10 Bigbrew Coffee reserves the right to cancel any Order and/or suspend, deactivate or terminate your Bigbrew Coffee account in its sole discretion if it reasonably suspects or detects fraudulent behavior or activity associated with your Bigbrew Coffee account and/or with your Order.<br>

<h2>7 Prices and Payments</h2>

7.1 Prices quoted on the Platforms shall be displayed in the applicable country’s national currency and subject to applicable tax. Prices and offers on the Platforms may vary from the prices and you accept the offers offered by our Vendors (either on their own websites, mobile applications, or at their brick-and-mortar outlets).<br>

7.2 The way we display the prices of our Goods may vary depending on the Vendor, and the prices reflected on our Platforms may:<br>

7.2.1 include VAT or such other equivalent tax; or<br>

7.2.2 exclude VAT or such other equivalent tax.<br>

A breakdown of the prices and additional charges are displayed before Checkout. When you place an Order, you agree to all amounts, additional charges and the final ‘Total’ amount which is displayed to you.<br>

7.3 Delivery fees are chargeable on every Order unless:<br>

7.3.1 you opt to collect your Order directly from the Vendor (“Pick-Up”);<br>

7.3.2 you have a valid promotional or discount voucher and apply it at Checkout; or<br>

7.3.3 unless stated otherwise.<br>

7.4 Prices indicated on the Platforms are as at the time of each Order and may be subject to change.<br>

7.5 You can choose to pay for an Order using any of the different payment methods offered on the Platforms including:<br>

7.5.1 Our payment partners: Visa, Mastercard, PayPal, GCash;<br>

7.5.2 COD; or<br>

7.5.3 Such other payment methods we offer from time to time.<br>

7.6 If you have existing credit in your Bigbrew Coffee account or valid promotional or discount vouchers, you can use this to pay for part or all of your Order as the case may be.<br>

7.7 After an Order is successfully placed, you will receive an email confirmation from us with your Order receipt. Delivery fees will not appear in your Order receipt if you opt for Pick-Up.<br>

7.8 Payment Methods<br>

Bigbrew Coffee reserves the right to offer additional payment methods and/or remove existing payment methods at any time in its sole discretion. If you choose to pay using an online payment method, the payment shall be processed by our third-party payment service provider(s). With your consent, your credit card / payment information will be stored with our third-party payment service provider(s) for future orders. Bigbrew Coffee does not store your credit card or payment information.<br>

For donation payments processed on the Websites through the ShareTheMeal programme, the World Food Programme will be the end beneficiary.<br>

7.9 You must ensure that you have sufficient funds on your credit and debit card to fulfil payment of an Order. Insofar as required, Bigbrew Coffee takes responsibility for payments made on our Platforms including refunds, chargebacks, cancellations, and dispute resolution, provided if reasonable and justifiable and in accordance with these Terms.<br>

<h2>8 Delivery, Pick-Up and Vendor Delivery</h2>

8.1 Delivery Areas<br>

You understand that our Vendors offer their Goods in specific delivery areas and our Vendors vary from delivery area to delivery area. By entering your delivery address on the Platforms, you will see the Vendors that we make available to you at that time. Delivery areas may expand, shrink or change depending on weather and traffic conditions and situations of force majeure.

8.2 Delivery Time<br>

8.2.1 Bigbrew Coffee shall deliver your Order to the delivery address provided by You. You may choose for your Order to be delivered “ASAP” or scheduled for a specific time. An estimated delivery time will be provided to you in your email confirmation but delivery times shall vary depending on factors that are not controlled by us (e.g. order quantity, distance, time of day (peak periods), weather conditions, traffic conditions, etc.). You can view the remaining delivery time of an Order when you click on ‘My orders’ on the Platforms. You acknowledge that the delivery time we provide is only an estimate and Orders may arrive earlier or later. To ensure that you do not miss the delivery of an Order, you should ensure that either you or someone is at the delivery location to receive the Order once an Order is placed. If your Order contains Alcohol or Tobacco (if applicable) and you or the recipient is or appears to be below the legal age, or fails to provide a valid proof of ID, Bigbrew Coffee reserves the right not to deliver your Order to you.<br>

8.3 Priority Delivery<br>

8.3.1 The priority delivery program (“Priority Delivery Program”) prioritizes your order by assigning a rider to delivery your order exclusively. This means that the assigned rider will deliver your order only. Do note that the delivery timing shown on the platform is an estimate and not a guaranteed timing.<br>

8.3.2 Bigbrew Coffee shall not be liable for any claim, loss, or damage whatsoever incurred by you arising from your voluntary option to avail of the Priority Delivery Program.<br>

8.3.3 The Priority Delivery Program may be changed, withdrawn or terminated by Bigbrew Coffee at any time without prior notice to you.<br>

8.3.4 By opting in, your hereby acknowledge and agree to the above Priority Delivery Program terms and conditions.<br>

8.4 Unsuccessful or Failed Deliveries<br>

8.4.1 In cases where we attempt to deliver an Order but we are unable to do so due to the reasons caused by you, including but not limited to:<br>

(i) no one was present or available to receive the Order;<br>

(ii) customer was uncontactable despite attempts to reach the customer via the phone number provided;<br>

(iii) lack of appropriate or sufficient access to deliver the Order successfully;<br>

(iv) lack of a suitable or secure location to leave the Order; or<br>

(v) in the case of Restricted Goods, the customer did not meet the statutory age requirements or delivery did not deem it safe or appropriate for the customer to receive the Restricted Goods.<br>

8.4.2 No-show Cancellations<br>

If you remain uncontactable or fail to receive the Order within ten (10) minutes from the time the Order arrives at your delivery address, Bigbrew Coffee reserves the right to cancel the Order without refund or remedy to you.<br>

8.5 Wrong Order, Missing Items, Defective Goods<br>

Upon receipt of your Order, if you discover that there are issues with your Order (e.g. wrong order, defective order, or missing items) please contact customer support via one of the methods indicated in Clause 1.3 above immediately. In some cases, Bigbrew Coffee may request for photographic proof and/or additional information to properly investigate the issue with your Order. If we determine that the Order and/or Goods you received are not of satisfactory condition or quality, we will compensate you for your Order or parts of your Order.<br>

8.6 Order Pick-Up<br>

8.6.1 Where available, you will have the option of collecting your Order in-person directly from the Vendor’s premises instead of having the Order delivered to You. Your email confirmation will indicate the time for you to Pick-Up the Order (“Collection Time”). The Vendor will prepare the Order by the Collection Time. In some cases, a reasonable delay may be expected. The Vendor agrees to hold the Order for you at the Vendor’s premises for no more than a reasonable period of twenty (20) minutes from the Collection Time (“Holding Time”) and shall not be obliged to provide the Order to you if you fail to Pick-Up your Order within the Holding Time.<br>

8.6.2 In the event of unreasonable delays in Pick-Up attributable to you, you bear the risk of any damage or loss of Goods or any deterioration in quality or change in condition of the Goods (e.g. changes in the temperature fit for consumption). In this case, you shall not be entitled to a replacement, refund or replacement of the Goods. You alone are responsible for inspecting the Goods/Order when you Pick-Up your Order and shall report any issues and/or defects to the Vendor before leaving the Vendor’s premises.<br>

8.7 Vendor Delivery<br>

In some cases, our Vendors will deliver the Order to you (“Vendor Delivery”). While we will use reasonable efforts to provide prior notice to you on Vendor Delivery, this may not always be possible. Where Vendor Delivery applies, we may ask you to contact the Vendor directly in the event of issues or delays in your delivery. Bigbrew Coffee shall not be responsible in any way for Orders or Goods that are delivered by Vendors<br>

<h2>9 Vouchers, Discounts and Promotions</h2>

9.1 From time to time, Bigbrew Coffee may run marketing and promotional campaigns which offer cashbacks, voucher codes, discounts, and other promotional offers to be used on the Platforms (“Vouchers”). Vouchers are subject to validity periods, and redemption periods, use restrictions, limits and/or other availability.<br>

9.2 Vouchers may not be valid when used in conjunction with other promotions, discounts or other vouchers. Additional terms and conditions (including vendor-specific terms) may apply to Vouchers.<br>

9.3 Unless otherwise stated, Vouchers can only be used on our Platforms.<br>

9.4 Vouchers are non-transferrable, non-exchangeable, non-refundable, and cannot be exchanged for cash.<br>

9.5 Bigbrew Coffee may withdraw, amend, and/or alter any applicable terms and conditions of the Vouchers at any time without prior notice. Bigbrew Coffee further reserves the right to void, discontinue or reject the use of any Voucher without prior notice.<br>

9.6 Bigbrew Coffee may, at its sole and absolute discretion, exclude, disqualify or refuse your or certain Vendors from the use of Vouchers at any time without prior notice.<br>

<h2>10 Representations, Warranties and Limitation of Liabilities</h2>

10.1 Representations and Warranties<br>

You acknowledge and agree that the content on the Platforms is provided on an “as is” and “as available” basis, and that your use of or reliance upon the Platforms and any content, goods, products or services accessed or obtained thereby is at your sole risk and discretion. While Bigbrew Coffee makes reasonable efforts to ensure the provision of the Platforms and the services we offer, are available at all times, we do not warrant or represent that the Platforms shall be provided in a manner which is secure, timely, uninterrupted, error-free, free of technical difficulties, defects or viruses. Please expect temporary interruptions of the Platforms due to scheduled or regular system maintenance work, downtimes attributable to the internet or electronic communications or events of force majeure. You agree that all risks arising from online transactions will be borne by you.<br>

10.2 Limitation of Liability<br>

To the extent permitted by law, Bigbrew Coffee (which shall include its employees, directors, agents, representatives, affiliates and parent company) excludes all liability (whether arising in contract, in negligence or otherwise) for loss or damage which you or any third-party may incur in connection with our Platforms, our services, and any website linked to our Platforms and any content or material posted on it. Your exclusive remedy with respect to your use of the Platforms is to discontinue your use of the Platforms. The Bigbrew Coffee entities, their agents, representatives, and service providers shall not be liable for any indirect, special, incidental, consequential, or exemplary damages arising from your use of the Platforms or for any other claim related in any way to your use of the Platforms. These exclusions for indirect, special, consequential, and exemplary damages including, without limitation, damages for lost profits, lost data, loss of goodwill, work stoppage, computer failure, or malfunction, or any other commercial damages or losses, even if the Bigbrew Coffee entities, their agents, representatives, and service providers have been advised of the possibility thereof and regardless of the legal or equitable theory upon which the claim is based. Because some states or jurisdictions do not allow the exclusion or the limitation of liability for consequential or incidental damages, in such states or jurisdictions, Bigbrew Coffee, the Bigbrew Coffee entities, its agents, representatives and service providers' liability shall be limited to the extent permitted by law.<br>
10.3 Vendor’s representations<br>

Bigbrew Coffee shall neither be liable for actions or omissions of the Vendor nor you in regard to provision of the Goods and where Vendor Delivery applies to your Order. Bigbrew Coffee does not assume any liability for the quantity, quality, condition or other representations of the Goods and/or services provided by Vendors or guarantee the accuracy or completeness of the information (including menu information, photos and images of the Goods) displayed on the Vendor’s listing/offering on the Platforms. Nothing in these Terms shall exclude Vendor’s liability for death or personal injury arising from Vendor’s gross negligence or willful misconduct.<br>
<h2>11 Vendor Liability</h2>

Vendors are responsible for the preparation, condition and quality of Goods. In cases of Vendor Delivery, Vendors are responsible for delivery of the Goods and/or Orders. Bigbrew Coffee shall not be liable for any loss or damage arising from your contractual relationship with the Vendor.<br>

<h2>12 Personal Data (Personal Information) Protection</h2>

You agree and consent to Bigbrew Coffee and any of its affiliate companies collecting, using, processing and disclosing your Personal Data in accordance with these Terms and as further described in our Privacy Policy: www.BigbrewCoffee.ph/contents/privacy.htm<br>

<h2>13 Indemnity</h2>

You agree to indemnify, defend, and hold harmless Bigbrew Coffee, its directors, officers, employees, representatives, agents, and affiliates, from any and all third-party claims, liability, damages and/or costs (including but not limited to, legal fees) arising out of or in connection with any of the following:<br>

a) your use of the Platforms, Services, and/or online pay Account in your dealings with any third parties, including, but not limited to, the Vendors, delivery agents, and other users of the Platforms;<br>

b) your breach of these Terms or any applicable law or regulation;<br>

c) your violation of any rights of any third-party; or<br>

d) your misuse of the Services and/or the Platforms.<br>

<h2>14 Third-Party Links and Websites</h2>

The Platforms may contain links to other third-party websites and by clicking on these links, you agree to do so at your own risk. Bigbrew Coffee does not control or endorse these third-party websites or links and shall not be responsible for the content of these linked pages. Bigbrew Coffee accepts no liability or responsibility for any loss or damage which may be suffered by you in relation to your access and use of these third-party links and websites.<br>

<h2>15 Termination</h2>

Bigbrew Coffee has the right to terminate, suspend or delete your Bigbrew Coffee Account and access to the Platforms, including any delivery service we provide to you in respect of an Order, with immediate effect for any reason, including, without limitation, if Bigbrew Coffee, in its sole discretion, considers your use to be unacceptable, or in case of noncompliance or serious suspicion of non-compliance with the applicable laws, including, but not limited to, anti-money laundering and terrorist financing laws and regulations, or in the event of any breach by you of the Terms and/or the online pay Terms. Bigbrew Coffee may, but shall be under no obligation to, provide you a warning prior to termination of your use of the Platforms.<br>

<h2>16 Amendments</h2>

Bigbrew Coffee may amend these Terms at any time in its sole discretion. The amended Terms shall be effective immediately upon posting and you agree to the new Terms by continued use of the Platforms. It is your responsibility to check the Terms regularly. If you do not agree with the amended Terms, whether in whole or in part, you must stop using the Platforms immediately.

<h2>17 Assignment</h2>

These Terms, as may be modified from time to time, may not be assigned by you without the prior written approval of Bigbrew Coffee. Bigbrew Coffee may assign these Terms, whether in whole or in part, to any third-party, including its affiliates or related entities, without your consent.<br>

<h2>18 Severability</h2>

If any provision of these Terms is found to be invalid by any court having competent jurisdiction, the invalidity of such provision shall not affect the validity of the remaining provisions of these Terms which shall remain in full force and effect. No waiver of any provision in these Terms shall be deemed a further or continuing waiver of such provision or any other provision.<br>

<h2>19 Governing Law</h2>

These Terms shall be governed and construed in accordance with the laws of the Republic of the Philippines. Any dispute or claim arising out of or in connection with it shall be governed by and construed in accordance with the laws of the Republic of the Philippines and you agree to submit all disputes and claims arising out of or in connection with these Terms shall be subject to the exclusive jurisdiction of the appropriate court in Taguig City, Philippines, to the exclusion of all other courts.<br>

<h2>20 Contact Us</h2>

If you wish to contact us regarding any questions or comments you may have, please send an email to our customer support email at support@BigbrewCoffee.ph or via our in-app customer support chat feature. You may initiate a chat for your Order by selecting Help Centre > Get Help with My Orders.<br>

<h2>21 Groceries / Convenience Shops</h2>

21.1 The purchase of Goods from Vendors on ‘SHOPS’ on the Platforms, including Bigbrew Coffee (“SHOPS”) are subject to these Terms. Additionally, you agree to comply with any and all the guidelines, notices, operating rules and policies and instructions pertaining to the purchase of Goods from SHOPS which are incorporated into and form a part of these Terms.<br>

21.2 Due to delivery constraints, Bigbrew Coffee may be required to impose a cap on the amount of your Order or limit the quantities of Goods in your Order from SHOPS in its sole discretion.<br>

21.3 Unless otherwise stated, all purchases from SHOPS shall be subject to the SHOPS cancellation, refund and returns policy.<br>
21.4 For Goods whose prices are determined based on weight, the actual weight of the Goods may be less or more than the weight that you have selected. Where you have placed an order for such Goods, you will only be charged an amount that is calculated based on the actual weight of the Goods purchased, if such actual weight is equal to or lower than the weight you have selected. The aforesaid is subject to the following:<br>

21.4.1 If you choose to pay by credit card (including paying by credit card through Google Pay or Apple Pay) or Gcash, you will be shown a pre-estimate of the price of these Goods (“Estimated Price”) at the checkout page. The invoice issued to you will reflect the Estimated Price of the Goods and you will be charged the Estimated Price. Separately, the Vendors shall update the order of the Goods to reflect the actual weight which may be equal to or lower than the weight you selected ("Actual Price”). This process will trigger the review of the price difference between the Estimated Price and Actual Price (“Price Difference”). If the actual weight of the Goods is lower than what you have selected, you will be given a refund for the Price Difference following Clause 6.9 above. If the actual weight of the Goods is more than what you have selected, such Goods will be removed from your order, and you will be notified via a pop-up on the Platform or by push notification that such Goods have been removed from your order. You will not be required to pay for such Goods whose weight exceed what you have selected, and you will be given a refund for the Estimated Price following Clause 6.9 above.<br>

21.4.2 If you choose COD, you will be shown the Estimated Price at the checkout page. Once the actual weight of the Goods has been confirmed, the price of the Goods will then be finalized if the actual weight of the Goods is equal to or lower than the weight you have selected (“Actual Price”). The Actual Price and weight of the Goods will then be reflected in the order tracking page and you will be notified via a pop-up on the Platform or by push notification if the price of the Goods has been reduced from the Estimated Price. The invoice issued to you will reflect the Actual Price of the Goods and you will only be charged the Actual Price of the Goods on delivery. If the weight of the Goods is more than what you have selected, such Goods will be removed from your order, and you will be notified via a pop-up on the Platform or by push notification that such Goods have been removed from your order. Such Goods whose weight exceeds what you have selected will not be delivered to you, and you will not be charged for such Goods. Where the prices of any Goods are subject to the definitive weight of the Goods, we will provide an initial estimate of the price for the purposes of checkout. The final price shall be indicated in your email confirmation containing your tax invoice. For shortfalls in payment, additional amounts shall be charged to you. For overpayments, excess amounts shall be refunded in accordance with our SHOPS cancellation, refund and returns policy.<br>

21.5 We reserve the right, but are not obligated, to restrict or limit the sales of our Goods to any person, geographic region or jurisdiction. Due to the laws in some countries, we shall not offer for sale certain goods, or restricted items to you (e.g. alcohol, tobacco, etc.). Any offer for any Goods made on the Platforms is void when it is prohibited by law.<br>

<h2>22 Prevailing Language</h2>

In the event of a dispute as to the Terms, the English version shall prevail. The English language version of these Terms shall control in all respects and shall prevail in case of any inconsistencies with translated versions.

<h2>23 Rider Tip</h2>

23.1 Rider Tip is applicable for all orders except for COD orders and orders delivered by Vendor Delivery. When you place an order on the Platforms, you will have the option to pay a tip to the Bigbrew Coffee rider assigned to deliver your order. Bigbrew Coffee will collect payment for the tip using the payment method chosen by you for the order. The rider will receive the full amount of any tip you choose to make once the delivery is completed.<br>

23.2 For orders cancelled before delivery, Bigbrew Coffee will process a refund of any rider tip paid by you to the payment method used for the order. Refunds will require time to be processed by us, your credit card company and/or your bank. It can take anywhere from 5 to 10 business days (or even up to 30 days for overseas banks) for your refund to be processed and reflected in your account.<br>

23.3 Tips are not refundable once the order has been delivered by the rider.<br>

23.4 If you have any questions or issues regarding your rider tip, please reach out to our customer support via email or the in-app chat feature available on the Platforms.<br>

<h2>24 gogogo</h2>

Where available, you may choose to subscribe to gogogo, our subscription program for the Platform. If you choose to subscribe to gogogo, you agree to be bound by and to comply with the gogogo terms and conditions, which are incorporated by reference herein and accessible here (https://www.BigbrewCoffee.ph/contents/gogogo-consumer-terms-and-conditions).<br>

<h2>25 gogogo</h2>

25.1 We offer an on-demand rider service where you may request for a delivery to be made from a pick-up location to a drop-off location through a delivery rider provided from our delivery rider pool (“gogogo Service”) via our Platforms. The use of the gogogo Service on the Platforms is subject to these Terms and the making of a request for the gogogo Service is deemed to be an “Order” for the purposes of these Terms.<br>

25.2 You shall pay Bigbrew Coffee a gogogo Service Fee, which shall be calculated using a base fee and distance-based fee. The base fee may vary due to factors such as, but not limited to, demand-supply ratio, booking timing, traffic conditions and routing information (“gogogo Service Fee”). It is your responsibility to review the gogogo Service Fee before making and confirming a request for the gogogo Service. By confirming your request, you agree to make payment of the final gogogo Service fee displayed on the Platforms.<br>

25.3 You may cancel a request before it is accepted by a delivery rider free-of-charge. However, you will still be charged the gogogo Service Fee if:<br>

25.3.1 you cancel a request once it is accepted by a delivery rider;<br>

25.3.2 the designated recipient is uncontactable or otherwise not available to receive the delivery after 10 minutes from the time that the delivery rider arrives at the designated delivery location.<br>

25.4 We will make delivery riders available to you where commercially possible. If there are no delivery riders available, you will be notified of the same as soon as reasonably practicable.<br>

25.5 You are responsible for providing us with true, complete and accurate delivery details such as the sender/recipient’s name, the sender/recipient’s address, the sender/recipient’s contact number, and any other delivery details as required.<br>

25.6 We will not be liable for any failed delivery or loss of monies due to your mistake, incomplete or inaccurate delivery details, any delivery request cancelled by your recipient or any other mistake made by you, your agents, employees or your recipients, and we shall remain entitled to the gogogo Service Fee in such event. For the avoidance of doubt, we do not allow any change of delivery details after the request has been submitted. Any communications between you and the assigned delivery rider regarding change of details shall not be accepted by Bigbrew Coffee as proof of change.<br>

25.7 You represent and warrant that:<br>

25.7.1 You are either the owner or the authorised agent of the owner of the delivery item(s), and that you are authorised to accept and you accept these Terms for yourself or as an agent for and on behalf of the owner of the delivery item(s).<br>

25.7.2 You are authorised by the sender (if not yourself) and the recipient of the delivery item(s) to provide the sender and recipient’s details (such as name, delivery address and contact details) to Bigbrew Coffee and the delivery rider assigned to your delivery order. In this context, you agree that you have obtained the recipient’s consent for his or her personal data to be collected, used and disclosed by Bigbrew Coffee for the purposes of fulfilling the delivery order. For more information on how we process personal data, please refer to our Privacy Policy referred to in these Terms or via the links on our Platforms.<br>

25.7.3 All information, description, and details of the delivery and/or delivery item(s) provided by you to Bigbrew Coffee are true, complete and accurate. Where applicable, you will provide specific instructions which relate to the handling of the delivery item(s) to the delivery rider before the commencement of delivery.<br>

25.7.4 You have complied with all laws and regulations relating to the nature, condition, packaging, handling, storage, and carriage of the delivery item(s) and the delivery item(s) is not or does not, in any way or condition: (a) non-compliant with or prohibited by any applicable laws or regulations; (b) dangerous, corrosive or flammable; (c) easily experience degradation of quality; and/or (d) contain explosives or radioactive substances.<br>

25.7.5 The delivery item is acceptable for transportation, is properly and sufficiently prepared, packed, stowed, labelled and marked in a manner that is appropriate to any operations or transactions affecting the delivery item and the characteristics of the delivery item and complies with all specifications (including any size and weight limitations) as stated on the Platforms. You acknowledge that it is your responsibility to ensure that the delivery item(s) is properly packaged to protect against damage to the delivery item(s) during the course of delivery. In the event a delivery item(s) is of fragile nature, it shall be in a packaging of sufficient durability and covered with protective material such that the delivery item(s) is protected against damage that may result from any force or pressure to which delivery item(s) are ordinarily subjected to during the course of delivery.<br>

25.7.6 You shall not request the gogogo Service for delivery of any of the following items:<br>

a) items classified as hazardous material, dangerous goods, prohibited or restricted articles by any government or regulatory agencies<br>

b) radio-active, incendiary, corrosive or flammable substances, hazardous chemicals, explosives, firearms or parts thereof and ammunition, firecrackers, cyanides, precipitates<br>

c) gold and silver ore, bullion, precious metals and stones, jewellery, semi-precious stones including commercial carbons or industrial diamonds<br>

d) currency of any nationality, securities, coupons, stamps, negotiable instruments in bearer form, cashier's cheques, travellers’ cheques<br>

e) Illegally reproduced or pirated items (e.g., CDs, DVDs)<br>

f) passports, credit/debit/ATM cards<br>

g) antiques, works of art<br>

h) lottery tickets and gambling devices<br>

i) livestock, fish, insects, animals, plants and plant material<br>

j) raw meat or seafood<br>

k) frozen and/or dairy products<br>

l) any written communication on any kind of physical medium below 500 grams in weight, excluding any book, catalogue, newspaper or periodical.<br>

m) any item that exceeds an aggregate value of Php10,000.00.<br>

n) human corpses, organs or body parts, blood, urine and other liquid diagnostic specimens<br>

o) hazardous or bio-medical waste<br>

p) pornographic materials<br>

q) alcoholic beverages or any intoxicant, infectious item or narcotics and psychotropic substances<br>

r) any other items that are illegal, hazardous, dangerous, or otherwise restricted or prohibited under any statute or law or regulation for transportation.<br>

25.7.7 You shall be solely liable for any loss or damage suffered by Bigbrew Coffee, its representatives, agents, and affiliates or any third party as a result of any breach of these representations and warranties.<br>

25.8 In the event that you request transportation of any illegal or unlawful or prohibited items (such as the items mentioned in Clause 25.7 above) or items which may otherwise be restricted under any applicable law, we reserve the right to refuse any dangerous or hazardous items, illegal, unlawful or prohibited items which may be prohibited by law and may take such steps as may be necessary to report the same to the law enforcement authorities. For the avoidance of doubt, Bigbrew Coffee or the assigned delivery rider shall have the right to open and inspect any of the items without prior notice if there is reasonable suspicion that the delivery item contains any illegal, unlawful or prohibited item, or for safety, security or other regulatory reasons, and Bigbrew Coffee or the assigned delivery rider shall have the right to refuse receipt and delivery of the said item.<br>

25.9 In the event, during transit of your delivery item(s) from pick-up location to drop-off location or while providing the gogogo Service, if police or other law enforcement agencies request or make a demand to view your item(s) for verification, we or the assigned delivery rider shall have the right to display your item(s) to such law enforcement agencies. You agree to fully assist and provide all necessary information to us in the event of any regulatory investigations.<br>

25.10 You shall be solely liable for any loss, damage, or contamination relating to the delivery item(s) whether or not caused directly or indirectly by you or the recipient of the delivery item(s) or any person acting as an agent or representative for or on behalf of you or the recipient.<br>

25.11 Bigbrew Coffee and the delivery rider shall have the right to cancel or not proceed with your delivery request in the event your request does not fulfill certain criteria, including but not limited to, the drop-off location falling outside of the delivery zone offered on the Platforms, you are uncontactable by phone or other means of communication, the recipient of the delivery item(s) is uncontactable or unavailable physically when the delivery rider arrives at the drop-off location, or you do not provide sufficient information or authorisation at the time of delivery.<br>

25.12 You acknowledge and agree that the delivery rider may, in the ordinary course of delivering the item, disclose your details to the recipient. Therefore, you are solely responsible in determining your choice of recipient and we shall not be liable or be responsible for any losses suffered by or caused to you or arising out of or in connection with or by reason of your expectation of anonymity through the use of the gogogo Service.<br>

25.13 You acknowledge and agree that the gogogo Service is provided on an “as is” and “as available” basis, and that your use of or reliance upon the gogogo Service is at your sole risk and discretion.<br>

25.14 Notwithstanding the aggregate value of the item, you agree that Bigbrew Coffee will only refund a maximum value of Php 10,000.00 (determined on a case-to-case basis) for items delivered under the gogogo Service. Bigbrew Coffee reserves the right, at its sole discretion, to determine and modify the maximum value of refund at any time.<br>

25.14 Should any items be damaged in transit due to Bigbrew Coffee and/or the Rider’s direct fault, you are required to promptly notify Bigbrew Coffee via email within seven (7) calendar days from the date of the incident. You shall provide a picture of the damaged item and, if available, the official receipt reflecting the item value. The picture and/or receipt will serve as proof of the item value. Your failure to inform Bigbrew Coffee of the complaint and provide the proof of item value within the prescribed period shall be considered a waiver of any claims for damages in the future. If the loss or damage is directly attributable to Bigbrew Coffee and/or the Rider, Bigbrew Coffee shall refund the value of the lost or damaged order but in no case shall the amount exceed Ten Thousand Pesos (Php10,000.00).<br>

If you paid via Cash on Delivery, the refund will be processed through bank transfer for both the gogogo Service Fee and the approved item value. In the case of online payment, the gogogo Service Fee refund will be issued using your original payment method, while the refund for the approved item value will be processed via bank transfer.<br>

If the loss or damage is not directly attributable to Bigbrew Coffee and/or the Rider, the provisions of Clause 25.10 herein will apply.
</div>
</body>
<script>
  function logout() {var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost/data/logout.php", true);

            xhr.onload = function() {  
				window.location.href = "http://localhost/data/elmer14.php";
            }; 
			xhr.send();
}
</script>
</html>
