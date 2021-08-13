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
            
         
            <!-- <div class ="sidenav_bt">
      
               <div class="btn">
               <span class="fas fa-bars"></span>
            </div> -->
            <nav class="sidebar">
               <div class="text">
                  Braintree
               </div>
               <ul class="feat-show">     
      
                  <li class="active"><a href="site.php">Paypal</a></li>
                  <li class="active"><a href="#">Version 1</a></li>
                  <li class="active"><a href="#">GraphQL</a></li>
   <!-- modal credentials -->
   <!-- code needs attention. Aplogies if this is causing issues, comment  -->
   <!-- <script src="js/bt.js"></script>
   <div class="center">
      <button id="show-login">Login</button>
   </div>
   <div class="popup">
      <div class="close-btn">&times;</div>
      <div class="form">
      <h2>Log in</h2>
      <div class="form-element">
         <label for="email">Email</label>
         <input type="text" id="email" placeholder="Enter email">
      </div>
      <div class="form-element">
         <label for="password">Password</label>
         <input type="password" id="password" placeholder="Enter password">
      </div>
      <div class="form-element">
         <input type="checkbox" id="remember-me">
         <label for="remember-me">Remember me</label>
      </div>
      <div class="form-element">
         <button>Sign in</button>
      </div>
      <div class="form-element">
         <a href="#">Forgot password?</a>
      </div>
      </div>
   </div> -->
   <!-- end of credentials  -->


                  <li><a href="#" class="feat-btn">Select an API
                     <span class="fas fa-caret-down first"></span>
                     </a>
                     <ul class="feat-show">
                        <li><a href="#">Transaction: Sale</a></li>
                        <li><a href="#">Transcation: Refund</a></li>
                        <li><a href="#">Transaction: Search</a></li>
                        <li><a href="#">Payment-method: Create</a></li>
                        <li><a href="#">Payment-method: Update</a></li>
                        <li><a href="#">Subscription: Create</a></li>
                        <li><a href="#">Subscription: Update</a></li>
                        <li><a href="#">Customer: Create</a></li>
                        <li><a href="#">Customer: Update</a></li>
                        <li><a href="#">Client-token: Generate</a></li>



      
                     </ul>
                  </li>
                  <li>
                     <a href="#" class="serv-btn">MTS API Calls
                     <span class="fas fa-caret-down second"></span>
                     </a>
                     <ul class="serv-show">
                        <li><a href="#">Create Billing aggreement</a></li>
                        <li><a href="#">Create transaction</a></li>
                        <li><a href="#">BT GraphQL</a></li>
                     </ul>
      
                     <div>
                        <input id = 'submitbt' type="submit" value="Submit" />
                     </div>
                     
                     
               </ul>
            
            </nav>
            
         </div>
         </body>

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

   <style>
      div.justified {
      display: flex;
      justify-content: center;
   }
   </style>

   <div id = 'textarea'>
   <textarea id = 'textareabt'>Textarea1</textarea>
   </div>


   <div id = 'textarea'>
   <textarea id = 'textareabt'>Textarea2</textarea>
   </div> 
   </body>
</html>