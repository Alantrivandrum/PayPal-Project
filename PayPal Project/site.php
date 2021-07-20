
<!DOCTYPE html>
<?php include ' Create_order/access_token.php'; ?>

<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>REST API Test Tool</title>

  <link rel="icon" href="img/favicon.png" type="image/png" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <header>
    <div id=logo>
      <img id="logo_image" src="img/logo.png"></img>
    </div>
  </header>
  <h1>PayPal Testing Tool</h1>
  <!-- Tick box code -->
  <!---
            <form>
                Tick:<br>
                <input type = "checkbox" name = "sandbox" value = "sandbox" tabindex= "1" />Sandbox <br/>
                <input type = "checkbox" name = "live/production" value = "live/production" tabindex= "2" />Live/Production <br/>
             </form>
        -->


  <div class="sidenav">
    <button class="dropdown-btn">Product
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a onclick="ChangeText('paypal');">PayPal</a>
      <a onclick="ChangeText('braintree');">Braintree</a>
    </div>
    <button class="dropdown-btn">Requests
      <i class="fa fa-caret-down"></i>
  </button>

  <div class="dropdown-container">
      <button class="dropdown-btn">Payments
          <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
          <a onclick="ChangeText('createOrder');">Create Order</a>
          <a onclick="ChangeText('showOrder');">Show Order</a>
          <a onclick="ChangeText('captureOrder');">Capture Order</a>
          <a onclick="ChangeText('authoriseOrder');">Authorise Order</a>
          <a onclick="ChangeText('refund');">Refund</a>
      </div>

      <button class="dropdown-btn">Reference Transactions
          <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
          <a onclick="ChangeText('createToken');">Create Token</a>
          <a onclick="ChangeText('showDetails');">Show Details</a>
          <a onclick="ChangeText('createAgreement');">Create Agreement</a>
          <a onclick="ChangeText('showAgreement');">Show Agreement</a>
          <a onclick="ChangeText('cancelAgreement');">Cancel Agreement</a>
      </div>

      <button class="dropdown-btn">Subscriptions
          <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
          <a onclick="ChangeText('createProduct');">Create Product</a>
          <a onclick="ChangeText('createPlan');">Create Plan</a>
          <a onclick="ChangeText('activatePlan');">Activate Plan</a>
          <a onclick="ChangeText('createSubscription');">Create Subscription</a>
          <a onclick="ChangeText('activateSubscription');">Activate Subscription</a>
          <a onclick="ChangeText('suspendSubscription');">Suspend Subscription</a>
          <a onclick="ChangeText('authoriseSubscription');">Authorise Subscription</a>
      </div>
  </div>
    <button class="dropdown-btn">Credentials
      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-container">
      <button class="dropdown-btn">Preloaded Accounts
          <i class="fa fa-caret-down"></i>
      </button>

      <div class="dropdown-container">
        <a onclick="ChangeText('CRI_US');">CRI-US Business Verified 3.0-DG</a>
        <a onclick="ChangeText('CRI_UK');">CRI-US Business Verified</a>
        <a onclick="ChangeText('CRI-IT');">CRI-IT Business Verified</a>
        <a onclick="ChangeText('CRI-FR');">CRI-FR Premier Verified</a>
        <a onclick="ChangeText('CRI-DE');">CRI-DE Business Verified</a>
        <a onclick="ChangeText('CRI-US');">CRI-US Airline Account</a>

    </div>

    <a onclick="changeText();">Search</a>
        </div>


   <!-- <div class="dropdown-container">
    <input type ="checkbox" id ="collapsible-head">
    <label for ="collapsible-head">Enter below</label>
    <div class ="collapsible-text"></div>
    <button class="Preloaded-Accounts">Preloaded Accounts
    <i class="fa fa-caret-down"></i>
      </button>
     <a href ="CRI_US#">CRI-US Buisness Verified 3.0-DG</a>   
      <p>
        Username:
        Password:
        Signature:
       </p>

       <div id=textarea>
        <textarea name ="credentials" id = textarea0>Live credentials have been disabled
                                                     Username:
                                                     Password:
                                                     Signature:
                                                    
    </textarea>
    </div>-->




     
        <!-- <a href ="creatOrder#">User</a> 
        <a href ="showOrder#">Show Order</a>
      <a href ="capturePayment#">Capture Payment</a>
      -->



    </div>
  </div>
  <!-- <div id="test">
    <textarea>Live credentials have been disabled:
Username:
Password:
Signature:</textarea>
  </div> -->
  <div id=title1>
    <h2>Request</h2>
  </div>
 


 <div id=textarea>
   
  <!--<textarea name ="credentials" id = textarea0>
    Live credentials have been disabled:
    Username:
    Password:
    Signature:
  </textarea>-->

  <div id="test">
    <textarea>Live credentials have been disabled:
Username:
Password:
Signature:</textarea>
  </div>


        <form action="/PayPal-Project/PayPal Project/php/request.php" method="post">
            Api Endpoint: <br>
            <div id=textarea>
                <textarea name ="api_endpoint" id = textarea1>API Endpoint</textarea>
            </div>
            </br>
            Request Body: <br>
            <textarea name ="request_body" id = textarea2 >Request Body and Headers</textarea>
            </br>

            <input type="submit" value="Submit" />
        </form>
    </div>

    
    
     <!--
    <form action ="/cat2/PayPal Project/php/request.php" method = "POST">
        
        <textarea name ="API Endpoint:2" ></textarea>
        <br>
        <input type = "submit" value = "Submit" >
        </form>
     -->

    <!--   <div id=textareaC>  --> 
  <!--</div> -->

    
  <!-- Response -->
  <div id="title2">
            <h2>Response Body</h2>
        </div>
        <div id="textarea">
            <textarea id="textarea3"><?php 
                    if($_POST) {
                        print_r($decoded);
                    } 
                    else
                    {  
                        echo "Response Body";
                    }
                ?>
            </textarea>
        </div>
  <!-- dropdown  -->
  <script src="js/script.js"></script>

</body>

</html>
