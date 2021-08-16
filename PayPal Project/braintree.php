<?php
session_start();
include 'BTphp/BT_request.php'; 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Braintree</title>
      <link rel="stylesheet" href="css/braintree.css" type="text/css" />
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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

                    <div class sidenav>
                    <li><a href="#" class="feat-btn">Select an API
                     <span class="fas fa-caret-down first"></span>
                     
                     <ul class="feat-show">
                        <li><a onclick="ChangeText('bt_init');">Client-Token: Generate</a></li>
                        <li><a onclick="ChangeText('sale');">Transaction: Sale</a></li>
                        <li><a onclick="ChangeText('refund');">Transcation: Refund</a></li>
                        <li><a onclick="ChangeText('void');">Transcation: Void</a></li>
                        <li><a onclick="ChangeText('transactionSearch');">Transaction: Search</a></li>
                        <li><a onclick="ChangeText('paymentMethodCreate');">Payment-method: Create</a></li>
                        <li><a onclick="ChangeText('paymentMethodUpdate');">Payment-method: Update</a></li>
                        <li><a onclick="ChangeText('createSub');">Subscription: Create</a></li>
                        <li><a onclick="ChangeText('updateSub');">Subscription: Update</a></li>
                        <li><a onclick="ChangeText('customerCreate');">Customer: Create</a></li>
                        <li><a onclick="ChangeText('customerUpdate');">Customer: Update</a></li>
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
                    </div>
                    <form method="POST">
      <input type="hidden" value="" name="request_name" id="BT_request">
      <input type="hidden" value="" name="enviroment" id="enviroment">
      <input type="hidden" value="" name="merchant_id" id="merchant_id">
      <input type="hidden" value="" name="public_key" id="public_key">
      <input type="hidden" value="" name="private_key" id="private_key">
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
     <script src="js/BTscript.js"></script>

<style>
       div.justified {
       display: flex;
       justify-content: center;
   }
</style>

 <div id = 'textarea'>
   <textarea id = 'textareabt1' name = "request_body">Request Body</textarea>
</div>


<div id = 'textarea'>
   <textarea id = 'textareabt2'><?php 
      if($_POST) 
      {
        print_r($response);
      } 
      else
      {  
        echo "Response Body";
      }
      ?>
   </textarea>
</div> 
    </form>
</body>
</html>