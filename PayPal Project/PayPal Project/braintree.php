<?php
session_start();
include ("BTphp/BT_request.php"); 
require_once ("BTphp/braintree_init.php");
require_once ("BTphp/lib/Braintree.php"); 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Braintree</title>
    <link rel="icon" href="img/bt logo 2.png" type="image/png" />
    <link rel="stylesheet" href="css/braintree.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  
  <body>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://js.braintreegateway.com/web/dropin/1.31.0/js/dropin.min.js"></script>


    <div class ="sidenav_bt">
      <nav class="sidebar"> 

        <div id= bt_logo3>
          <img id="logo-image3" src="img/bt logo 3.png"></img>
        </div>
               
        <ul class="feat-show">     
          <li><a href="site.php">Paypal</a></li>  
            <div>
              <li><a id="selectAPI" class="feat-btn">Select an API
                <span class="fas fa-caret-down first"></span></a>
                
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
            </div>
        </ul>     
      </nav>
    </div>


    <div id="content">
      <div id=bt_logo>
        <img id="logo-image" src="img/bt logo.png"></img>
      </div>

      <!-- Cliet-side button start -->
      <div class="wrapper" id= "client-sideBT">
        <div class="checkout container">
          <form method="post" id="payment-form"> 
            <input type="hidden" value="" name="request_name" id="BT_request">
          
            <div class="bt-drop-in-wrapper">
              <div id="bt-dropin"></div>
            </div>

            
            <!-- API Calls -->
            <input id="nonce" name="payment_method_nonce" value="Payment Method Nonce" type="hidden" />
            <input id="device_data" name="device_data" value="Device Data" type="hidden" />

            <!-- Client Token Credentials -->
            <div id = "CTC" >

            <div id = "env"> <label for="envr">Environment:</label>
            <input name="environment" id="environment" type="hidden" value=<?php 
              if(isset($_POST['environment'])) 
              { 
                echo htmlentities($_POST['environment']);
              }
              else
              {
                echo "";
              }?>>
            </div>

            <div id ="MID">
            <label for="mid">Merchant ID:</label>
            <input  name="merchant_id" id="merchant_id" type="hidden" value =<?php 
              if(isset($_POST['merchant_id'])) 
              { 
                echo htmlentities($_POST['merchant_id']);
              }
              else
              {
                echo "";
              }?>>
             </div>

            <div id= "puk">
            <label for="puk">Public Key:</label>
            <input  name="public_key" id="public_key" type="hidden" value =<?php 
              if(isset($_POST['public_key'])) 
              { 
                echo htmlentities($_POST['public_key']);
              }
              else
              {
                echo "";
              }?>>
            </div>

            <div id= "prk">
            <label for="prk">Private Key:</label>
            <input  name="private_key" id="private_key" type="hidden" value =<?php 
              if(isset($_POST['public_key'])) 
              { 
                echo htmlentities($_POST['public_key']);
              }
              else
              {
                echo "";
              }?>>
            </div>  
                  
            </div>

            <!-- Transaction Sale -->
            
            <div id="amount">
            <label for="amt">Amount:</label>
            <input id="amount" name="amount" value="Amount" >
            </div>
            
            
            <!-- Transaction Refund and Void -->
            <div id = "td">
            <label for="td">Transcation ID:</label>
            <input name="transaction_id" id="transaction_id" value="Transaction ID" >
            </div>
            
            <!-- Transaction Search (by Customer ID) -->
            <div id = "ci">
            <label for="ci">Customer ID:</label>
            <input name="customer_id" id="customer_id" value="Customer ID">
            </div>

            <!-- Payment Method Token for Subscriptions and Payment Method Calls -->
            <div id = "pmt">
            <label for="pmt">Payment Token:</label>
            <input id="payment_token" name="payment_token" value="Payment Method Token">
            </div>
            <!-- Street Address for Payment Method Update -->
            <div id = "cbs">
            <label for="cbs">Street Address:</label>
            <input id="street_address" name="street_address" value="Customer Billing Street Address">
            </div>
            <!-- Plan ID for Subscriptions -->
            <div id ="pd">
            <label for="pd">Plan ID:</label>
            <input id="plan_id" name="plan_id" value="Plan ID" >
            </div>

            <!-- Subscription ID for Subscriptions -->
            <div id = "si">
            <label for="nsi"> Subscription ID:</label>
            <input id="sub_id" name="sub_id" value="Subscription ID" >
            </div>

            <!-- New Subscription ID for Subscription Update -->
            <div id = "nsi">
            <label for="nsi">New Subscription ID:</label>
            <input id="new_sub_id" name="new_sub_id" value="New Subscription ID">
            </div>
            <!-- Customer Email for Customer Create -->
            <div id = "em">
            <label for="em">Email:</label>
            <input id="email" name="email" value="Customer Email" >
            </div>

            <button class="button" type="submit"><span>Test Transaction</span></button>

            <div id = 'textarea'>
              <textarea id = 'textareabt2'><?php
              if($_POST) 
              {
              print_r($response);
              } 
              else
              {  
              echo "Response Body";
              }?></textarea>
            </div>  
          </form>
        </div>
      </div>
    </div>


    <script>
      var form = document.querySelector('#payment-form');
      var client_token = "<?php echo($gateway->ClientToken()->generate()); ?>";

      braintree.dropin.create({
        authorization: client_token,
        selector: '#bt-dropin',
        dataCollector: true,
        paypal: {
          flow: 'vault'
        },
      }, function (createErr, dropinInstance) {
        if (createErr) {
          console.log('Create Error', createErr);
          return;
        }

        form.addEventListener('submit', function (event) {
          event.preventDefault();
          
          dropinInstance.requestPaymentMethod({
            // 3D secure parameters here
          }, function (err, payload) {
            if (err) {
              console.log('Request Payment Method Error', err);
            }

            // Add the nonce to the form and submit
            document.querySelector('#nonce').value = payload.nonce;
            document.querySelector('#device_data').value = payload.deviceData;
            form.submit();
          });
        });
      });
    </script>

    <script>
      $('.btn').click(function(){
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
      });
      $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
      });
      $('#selectAPI').click(function(){
        $(this).toggleClass("active");
      });
      $('nav ul li ul li a').click(function(){
        $('nav ul li ul li a').removeAttr("class");
        $(this).addClass("clicked");
      });
    </script>

    <style>
      div.justified {
        display: flex;
        justify-content: center;
      }
    </style> 


    <script src="js/BTscript.js"></script>


    <!-- Save amount when it exists -->
    <?php 
    if(isset($_SESSION['amount']))
    { ?>
      <script>
          var amount = '<?php echo $_SESSION['amount']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var amount = 'Price Amount';
      </script>
    <?php 
    } ?>

    <!-- Save transaction_id when it exists -->
    <?php 
    if(isset($_SESSION['transaction_id']))
    { ?>
      <script>
          var transaction_id = '<?php echo $_SESSION['transaction_id']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var transaction_id = 'Transaction ID';
      </script>
    <?php 
    } ?>

    <!-- Save customer_id when it exists -->
    <?php 
    if(isset($_SESSION['customer_id']))
    { ?>
      <script>
          var customer_id = '<?php echo $_SESSION['customer_id']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var customer_id = 'Customer ID';
      </script>
    <?php 
    } ?>

    <!-- Save payment_token when it exists -->
    <?php 
    if(isset($_SESSION['payment_token']))
    { ?>
      <script>
          var payment_token = '<?php echo $_SESSION['payment_token']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var payment_token = 'Payment Method Token';
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
          var plan_id = 'Plan ID';
      </script>
    <?php 
    } ?>

    <!-- Save email when it exists -->
    <?php 
    if(isset($_SESSION['email']))
    { ?>
      <script>
          var email = '<?php echo $_SESSION['email']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var email = 'Customer Email';
      </script>
    <?php 
    } ?>

    <!-- Save street_address when it exists -->
    <?php 
    if(isset($_SESSION['street_address']))
    { ?>
      <script>
          var street_address = '<?php echo $_SESSION['street_address']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var street_address = 'Customer Billing Street Address';
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
          var sub_id = 'Subscription ID';
      </script>
    <?php 
    } ?>

    <!-- Save new_sub_id when it exists -->
    <?php 
    if(isset($_SESSION['new_sub_id']))
    { ?>
      <script>
          var new_sub_id = '<?php echo $_SESSION['new_sub_id']; ?>';
      </script>
    <?php 
    } 
    else 
    { ?>
      <script>
          var new_sub_id = 'New Subscription ID';
      </script>
    <?php 
    } ?>

  </body>
</html>