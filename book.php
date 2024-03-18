<?php
require("bdata.php");
require("pdata.php");
?>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="Stylesheet" href="book.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="flat.js"></script>
  <head></head>

  <title>booking</title>
  <body>
 
    <div class="dec">
        <br>
         <a href="index.html">< <img src="h.jfif" style="width:50px;height:50px;float:left;margin-left: 9px;border-radius: 40px;margin-top: -13px;"></a>
        <h>WELCOME TO HOME BOOKING</h>
         <a href="index.html"><img src="arrow.png" style="width:50px;height:50px;float:right;margin-right: 9px;border-radius: 40px;margin-top: -13px;"></a>
      </div>
      <form action="" method="post">
      <div class="magic" id="bus"style="width:500px;height:505px;margin-top: 50px;">
      <br>
          <br>
          <l>Payment Method </l>
          <br>
          <br>
          <br>
          
           <label style="margin-left:-105px;">First Name</label><label style="margin-left:105px;">Last Name</label><br>
           <input type="text" name="nf" required>&nbsp;<input type="text" name="nl" required><br><br>

            <label style="margin-left:-45px;">Select Bank</label> <label style="margin-left:95px;">Credit Card Number</label><br>
                        <select type="droupdown" name="sl" required>
                          <option></option>
                          <option style="color:#FFB600;">BARODA BANK</option>
                          <option style="color:#800000;">AXIS BANK</option>
                          <option style="color:#019EEC;">CANARA BANK</option>
                          <option style="color:#00B5EF;">SBI BANK</option>
                          <option style="color:#004C8F;">HDFC BANK</option>
                       </select>
                       
                       <input type="tel" name="ccn" placeholder="xxxx xxxx xxxx xxxx" pattern="[0-9\s]{13,19}"autocomplete="cc-number"maxlength="16"required><br><br>
                       <label style="margin-left:-75px;">Security Code</label>  <label style="margin-left:80px;">Card Expiration</label><br>
                       <input type="text" name="cvv" placeholder="CVV"maxlength="3"required>
                       <input type="text" name="ce" placeholder="MM/YY"required><br> <br>
                       <label style="margin-left:-120px;">Amount</label><label><img src="vm.png"style="width:150px;height:45px;float:right;margin-right:30px;"class="responsive">
                       <br>
                       <input type="text" name="am"required><br>
                      
                      <br>
                      <br>
                      <br>
                       <input type="submit" value="Payment Order" class="paybtn">
                       <br>
                       <br>
                       <input type="button" value="Back" onclick="book()" class="bbtn">
                      </form>
                </div>
      <div class="row">
        <div class="form" id="myForm" style="width:500px;height:505px;margin-top: 2px;">
        <form action=" " method="post" onsubmit="return valid()">
           <br>
           <br>
           <l>Book Now</l>
           <br>
           <br>
           <br>
           <label style="margin-left: -105px;">First Name</label>    <label style="margin-left: 100px;">Last Name</label><br>
           <input type="text" name="fn" required> <input type="text" name="ln" required>
           <br>
           <br>
           <br>
           <label style="margin-left: -130px;">Email</label>    <label style="margin-left: 130px;">Mobile</label><br>
           <input type="email" name="em" required> <input type="number" name="mb" required>
           <br>
           <br>
           <br>
           <label style="margin-left: -120px;">Date</label>    <label style="margin-left: 140px;">Adress</label><br>
           <input type="date" name="dt" style="width:170px;"required> <input type="text" rows="4" cols="50"  name="ad" required>
           <br>
           <br>
           <br>
           <button type="submit" class="btn">Book</button>
           <br>
           <br>
          <button type="button" class="btncancel" onclick="closeForm()">Cancel</button>
        </form>
      </div>
        <div class="column">
          <div class="card">
            
          <img src="ap1.jpg" id="imgDemo" alt="HTML5 Icon" class="responsive">
           <br>
           <br>
           <table  style="margin: auto;"><tr><th>Amount =></th><th>52,00,000 Rs</th></tr></table>
           <table style="margin: auto;"><tr><th>Location =></th><th>Lakshmi Nagar Moshi (Pune)</th></tr></table>
           <br>
           <input type="submit" value="Book Now" onclick="openForm()">
           <br>
           <br>
           <input type="submit"value="Payment" onclick="magicBus()">
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="ap2.jpg" alter="home" class="responsive">
            <br>
            <br>
            <table style="margin: auto;"><tr><th>Amount =></th><th>50,00,000 Rs</th></tr></table>
            <table style="margin: auto;"><tr><th>Location =></th><th>Lakshmi Nagar Moshi (Pune)</th></tr></table>
            <br>
            <input type="submit" value="Book Now" onclick="openForm()">
            <br>
           <br>
           <input type="submit"value="Payment" onclick="magicBus()">
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="ap3.jpg" alter="home" class="responsive">
            <br>
            <br>
            <table style="margin: auto;"><tr><th>Amount =></th><th>43,00,000 Rs</th></tr></table>
            <table style="margin: auto;"><tr><th>Location =></th><th>Lakshmi Nagar Moshi (Pune)</th></tr></table>
            <br>
            <input type="submit" value="Book Now" onclick="openForm()">
            <br>
           <br>
           <input type="submit"value="Payment" onclick="magicBus()">
          </div>
        </div>
      </div>
      <div class="ram">
        <div class="column">
          <div class="card">
            <img src="ap4.jpg" alter="home" class="responsive">
            <br>
            <br>
            <table style="margin: auto;"><tr><th>Amount =></th><th>56,00,000 Rs</th></tr></table>
            <table style="margin: auto;"><tr><th>Location =></th><th>Lakshmi Nagar Moshi (Pune)</th></tr></table>
            <br>
            <input type="submit" value="Book Now" onclick="openForm()">
            <br>
           <br>
           <input type="submit"value="Payment" onclick="magicBus()">
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="ap6.jpg" alter="home" class="responsive">
            <br>
            <br>
            <table style="margin: auto;"><tr><th>Amount =></th><th>42,00,000 Rs</th></tr></table>
            <table style="margin: auto;"><tr><th>Location =></th><th>Lakshmi Nagar Moshi (Pune)</th></tr></table>
            <br>
            <input type="submit" value="Book Now"onclick="openForm()">
            <br>
           <br>
           <input type="submit"value="Payment" onclick="magicBus()">
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="ap5.jpg" alter="home" class="responsive">
            <br>
            <br>
            <table style="margin: auto;"><tr><th>Amount =></th><th>51,00,000 Rs</th></tr></table>
            <table style="margin: auto;"><tr><th>Location =></th><th>Lakshmi Nagar Moshi (Pune)</th></tr></table>
            <br>
            <input type="submit" value="Book Now"onclick="openForm()">
            <br>
           <br>
           <input type="submit"value="Payment" onclick="magicBus()">
          </div>
        </div>
      </div>
   <br>
   <br>
<div class="foot">
  <br>
  
  Author: More Mahesh <br>
  <a href="moremk2019@gmail.com">moremk2019@gmail.com</a>
  <br>
  <a href="https://www.instagram.com/soft_code_mahesh"><i class="fa fa-instagram" aria-hidden="true" style="background-color:rgb(228, 64, 95);border-radius: 5px;font-size: 30px;color:white;"></i></a>
  <a href="https://wa.me/+919322974643"><i class="fa fa-whatsapp" aria-hidden="true" style="background-color: rgb(37, 211, 102);border-radius:5px;font-size: 30px;color:white;"></i></a>
</div>

  </body>
</html>
