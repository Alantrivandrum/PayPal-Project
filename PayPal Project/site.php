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
  <div id="content">
    <header>
      <div id=logo>
        <img id="logo_image" src="img/logo.png"></img>
      </div>
      <h1>PayPal Testing Tool</h1>
    </header>
      
    <!-- API Endpoint and Request -->
    <form method="POST">
      <input type="hidden" value="" name="request_name" id="request">

      <div id="textarea4">
        <h2 id="title2">Credentials:</h2>
        <!-- <textarea id="textarea5" name="credentials">Client ID =&#10;Client Secret =</textarea> -->
        <textarea id="textarea5" name="credentials"><?php 
          if(isset($_POST['credentials'])) 
          { 
            echo htmlentities($_POST['credentials']);
          }
          else
          {
            echo "Client ID =&#10;Client Secret =";
          }?></textarea>
      </div>

      <div id="textarea">
        <div id="title1">
          <h2>API Endpoint</h2>
        </div>
        <textarea id="textarea1" name="api_endpoint"><?php 
          if(isset($_POST['api_endpoint'])) 
          { 
            echo htmlentities($_POST['api_endpoint']);
          }
          else
          {
            echo "API Endpoint";
          }?></textarea>
        <div id="title1">
          <h2>Request Body</h2>
        </div>
        <textarea id="textarea2" name="request_body"><?php 
          if(isset($_POST['request_body'])) 
          { 
            echo htmlentities($_POST['request_body']);
          }
          else
          {
            echo "API Endpoint";
          }?></textarea>

        <div id="button">
          <div id="button-colour">
            <input type="submit" placeholder="Submit"/>
          </div>
        </div>

        <!-- Response -->
        <div id="textarea">
          <div id="title2">
            <h2>Response Body</h2>
          </div>
          <textarea id="textarea3"><?php 
            if($_POST) 
            {
              print_r($response);
            } 
            else
            {  
              echo "Response Body";
            }?></textarea>
        </div>
      </div>
    </form>
  </div>

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

  <div class="sidenav">
    <button class="dropdown-btn">Product
      <i class="fa fa-caret-down" id="sub-fa-caret"></i>
    </button>
    <div class="dropdown-container">
      <a href="site.php">PayPal</a>
      <a href="braintree.php">Braintree</a>
    </div>
    <button class="dropdown-btn">Requests
      <i class="fa fa-caret-down" id="sub-fa-caret"></i>
    </button>

    <div class="dropdown-container">
      <a onclick="ChangeText('accessToken');">Access Token</a>
        <button class="subdropdown-btn">Payments
            <i class="fa fa-caret-down" id="sub-fa-caret"></i>
        </button>
        <div class="dropdown-container">
            <a onclick="ChangeText('createOrder');">Create Order</a>
            <a onclick="ChangeText('showOrder');">Show Order</a>
            <a onclick="ChangeText('captureOrder');">Capture Order</a>
            <a onclick="ChangeText('authoriseOrder');">Authorise Order</a>
            <a onclick="ChangeText('refundOrder');">Refund</a>
        </div>

      <button class="subdropdown-btn">Reference<br>Transactions
          <i class="fa fa-caret-down" id="sub-fa-caret"></i>
      </button>
      <div class="dropdown-container">
          <a onclick="ChangeText('createToken');">Create Token</a>
          <a onclick="ChangeText('showToken');">Show Token</a>
          <a onclick="ChangeText('createAgreement');">Create Agreement</a>
          <a onclick="ChangeText('showAgreement');">Show Agreement</a>
          <a onclick="ChangeText('cancelAgreement');">Cancel Agreement</a>
      </div>

      <button class="subdropdown-btn">Subscriptions
          <i class="fa fa-caret-down" id="sub-fa-caret"></i>
      </button>
      <div class="dropdown-container">
          <a onclick="ChangeText('createProduct');">Create Product</a>
          <a onclick="ChangeText('createPlan');">Create Plan</a>
          <a onclick="ChangeText('activatePlan');">Activate Plan</a>
          <a onclick="ChangeText('createSubscription');">Create <br>Subscription</a>
          <a onclick="ChangeText('activateSubscription');">Activate <br>Subscription</a>
          <a onclick="ChangeText('suspendSubscription');">Suspend <br>Subscription</a>
          <a onclick="ChangeText('authoriseSubscription');">Authorise <br>Subscription</a>
      </div>
    </div>

    
    <button class="dropdown-btn">Credentials
      <i class="fa fa-caret-down" id="sub-fa-caret"></i>
    </button>

    <div class="dropdown-container">
      <button class="subdropdown-btn">Preloaded <br>Accounts
          <i class="fa fa-caret-down" id="sub-fa-caret"></i>
      </button>

      <div class="dropdown-container">
          <a onclick="ChangeText('CRI_US');">CRI-US Business <br>Verified 3.0-DG</a>
          <a onclick="ChangeText('CRI_UK');">CRI-US Business <br>Verified</a>
          <a onclick="ChangeText('CRI_IT');">CRI-IT Business <br>Verified</a>
          <a onclick="ChangeText('CRI_FR');">CRI-FR Premier <br>Verified</a>
          <a onclick="ChangeText('CRI_DE');">CRI-DE Business <br>Verified</a>
          <a onclick="ChangeText('CRI_USA');">CRI-US Airline <br>Account</a>
      </div>
    </div>
  </div>
  
  <!-- dropdown  -->
  <script src="js/script.js"></script>
</body>

</html>