<?php
require_once ("BTPHP/lib/braintree.php");
require_once ("BTphp/braintree_init.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

   <head>
      <meta charset="utf-8">

      <title>BT test tool</title>

      <link rel="stylesheet" href="css/braintree.css" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   </head>
   
   <body>
       <div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
            Side Menu
         </div>
         <ul>
            <li class="active"><a href="#">Paypal</a></li>
            <li class="active"><a href="#">Version 1</a></li>
            <li class="active"><a href="#">GraphQL</a></li>
            <li>
               <a href="#" class="feat-btn">Select an API
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                  <li><a href="#">Charge a payment method</a></li>
                  <li><a href="#">generate client token with MAID</a></li>
                  <li><a href="#">generate client token with ID</a></li>
                  <li><a href="#">Create transaction with sipping address</a></li>


               </ul>
            </li>
            <li>
               <a href="#" class="serv-btn">MTS API Calls
               <span class="fas fa-caret-down second"></span>
               </a>
               <ul class="serv-show">
                  <li><a href="#">Create Billing aggreement</a></li>
                  <li><a href="#">Execute Billing aggreement</a></li>
                  <li><a href="#">Create transaction</a></li>
                  <li><a href="#">BT GraphQL</a></li>
               </ul>
         </ul>
      </nav>
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
     </script>
     


   <!--    <div class="container">
		<form>
			<label class="labels">Description</label><br>
			<div class="textarea_style">
				<textarea class="textarea" id="textarea" onkeyup="charCount();" name="textarea_description" rows="4" cols="37" maxlength="100" minlength="3" placeholder="Write your description here..."></textarea>
			</div>
      </form>
	</div>     -->
	
</body>
</html>