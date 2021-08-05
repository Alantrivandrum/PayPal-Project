<?php
session_start();
include 'php/request.php'; 
?>

<!DOCTYPE html>

<html lang="en">

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
    
  <!-- API Endpoint and Request -->
  <div id="textarea">

    <!-- Save order_id when it exists -->
    <?php 
    if(isset($_SESSION['order_id']))
    { ?>
      <script>
          var order_id = '<?php echo $_SESSION['order_id']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var order_id = '{{order_id}}';
      </script>
    <?php 
    } ?>

    <!-- Save capture_id when it exists -->
    <?php 
    if(isset($_SESSION['capture_id']))
    { ?>
      <script>
          var capture_id = '<?php echo $_SESSION['capture_id']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var capture_id = '{{capture_id}}';
      </script>
    <?php 
    } ?>

    <!-- Save token_id when it exists -->
    <?php 
    if(isset($_SESSION['token_id']))
    { ?>
      <script>
          var token_id = '<?php echo $_SESSION['token_id']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var token_id = '{{token_id}}';
      </script>
    <?php 
    } ?>

    <!-- Save agreement_id when it exists -->
    <?php 
    if(isset($_SESSION['agreement_id']))
    { ?>
      <script>
          var agreement_id = '<?php echo $_SESSION['agreement_id']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var agreement_id = '{{agreement_id}}';
      </script>
    <?php 
    } ?>

    <!-- Save product_id when it exists -->
    <?php 
    if(isset($_SESSION['product_id']))
    { ?>
      <script>
          var product_id = '<?php echo $_SESSION['product_id']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var product_id = '{{product_id}}';
      </script>
    <?php 
    } ?>

    <!-- Save plan_id when it exists -->
    <?php 
    if(isset($_SESSION['plan_id']))
    { ?>
      <script>
          var plan_id = '<?php echo $_SESSION['plan_id']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var plan_id = '{{plan_id}}';
      </script>
    <?php 
    } ?>

    <!-- Save sub_id when it exists -->
    <?php 
    if(isset($_SESSION['sub_id']))
    { ?>
      <script>
          var sub_id = '<?php echo $_SESSION['sub_id']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var sub_id = '{{sub_id}}';
      </script>
    <?php 
    } ?>


    <form method="POST">
      <input type="hidden" value="" name="request_name" id="request">

      <div id="textarea4">
        <h2 id="title2">Credentials:</h2>
        <textarea id="textarea5" name="credentials">Client ID=&#10;Client Secret=</textarea>
      </div>

      <div id="title1">
        <h2>API Endpoint</h2>
      </div>
      <textarea id="textarea1" name="api_endpoint">API Endpoint</textarea>

      <div id="title1">
        <h2>Request Body</h2>
      </div>
      <textarea id="textarea2" name="request_body">Request Body</textarea>

      <div>
        <input type="submit" value="Submit" />
      </div>
    </form>
  </div>
    
  <!-- Response -->
  <div id="title2">
    <h2>Response Body</h2>
  </div>
  <div id="textarea">
    <textarea id="textarea3"><?php 
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

  <div id=textarea>


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
      <a onclick="ChangeText('accessToken');">Access Token</a>
        <button class="dropdown-btn">Payments
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a onclick="ChangeText('createOrder');">Create Order</a>
            <a onclick="ChangeText('showOrder');">Show Order</a>
            <a onclick="ChangeText('captureOrder');">Capture Order</a>
            <a onclick="ChangeText('authoriseOrder');">Authorise Order</a>
            <a onclick="ChangeText('refundOrder');">Refund</a>
        </div>

      <button class="dropdown-btn">Reference Transactions
          <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
          <a onclick="ChangeText('createToken');">Create Token</a>
          <a onclick="ChangeText('showToken');">Show Token</a>
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
          <a onclick="ChangeText('CRI_IT');">CRI-IT Business Verified</a>
          <a onclick="ChangeText('CRI_FR');">CRI-FR Premier Verified</a>
          <a onclick="ChangeText('CRI_DE');">CRI-DE Business Verified</a>
          <a onclick="ChangeText('CRI_USA');">CRI-US Airline Account</a>
      </div>

    <a onclick="changeText();">Search</a>
        </div>

    </div>
  </div>
  
  <!-- dropdown  -->
  <script src="js/script.js"></script>
</body>

</html>