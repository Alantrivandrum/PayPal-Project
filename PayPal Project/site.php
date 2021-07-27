<?php 
    session_start();
    include 'php/access_token.php';
    include 'php/request.php';
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>REST API Test Tool</title>
        
        <link rel="icon" href="img/favicon.png" type="image/png"/> 
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    </head>

    <body>
        <header>
            <div id="logo">
                <img id="logo_image" src="img/logo.png"></img>
            </div>
        </header>

        <h1>PayPal Testing Tool</h1>
    
        <!-- API Endpoint and Request -->
        <div id="textarea">
            <div id="textarea4">
                <textarea>Live credentials have been disabled:&#10;Username:&#10;Password:&#10;Signature:</textarea>
            </div>

            <!-- Save client_id when it exists -->
            <?php 
            if(isset($_SESSION['id']))
            { ?>
                <script>
                    var order_id = '<?php echo $_SESSION['id']; ?>';
                </script>
            <?php 
            } 
            else 
            { ?>
                <script>
                    var order_id = '{{id}}'
                </script>
            <?php 
            } ?>

            <form method="POST">
                <input type="hidden" value="uh oh" name="request_name" id="request">

                <div id="title1">
                    <h2>API Endpoint</h2>
                </div>
                <textarea id="textarea1" name="api_endpoint">API Endpoint</textarea>

                <div id="title1">
                    <h2>Request Body</h2>
                </div>
                <textarea id="textarea2" name="request_body">Request Body</textarea>

                <!-- Pay Button -->
                <div id="button"> 
                    <input type="submit" value="Submit" class="button">
                </div>
            </form>
        </div>

        <!-- Response -->
        <div id="title2">
            <h2>Response Body</h2>
        </div>
        <div id="textarea">
            <textarea id="textarea3"><?php 
                if($_POST) {
                    print_r($response);
                } 
                else
                {  
                    echo "Response Body";
                }
                ?>
            </textarea>
        </div>

        <!-- Side Navigation -->
        <div class="sidenav">
            <button class="dropdown-btn">Product
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a>PayPal</a>
                <a>Braintree</a>
            </div>
    
            <button class="dropdown-btn">Requests
                <i class="fa fa-caret-down"></i>
            </button>

            <div class="dropdown-container">
                <button class="dropdown-btn">Payments
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a onclick="changeText('createOrder');">Create Order</a>
                    <a onclick="changeText('showOrder');">Show Order</a>
                    <a onclick="changeText('captureOrder');">Capture Order</a>
                    <a onclick="changeText('authoriseOrder');">Authorise Order</a>
                    <a onclick="changeText('refundOrder');">Refund</a>
                </div>
          
                <button class="dropdown-btn">Reference Transactions
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a onclick="changeText('createToken');">Create Token</a>
                    <a onclick="changeText('showDetails');">Show Details</a>
                    <a onclick="changeText('createAgreement');">Create Agreement</a>
                    <a onclick="changeText('showAgreement');">Show Agreement</a>
                    <a onclick="changeText('cancelAgreement');">Cancel Agreement</a>
                </div>
          
                <button class="dropdown-btn">Subscriptions
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a onclick="changeText('createProduct');">Create Product</a>
                    <a onclick="changeText('createPlan');">Create Plan</a>
                    <a onclick="changeText('activatePlan');">Activate Plan</a>
                    <a onclick="changeText('createSubscription');">Create Subscription</a>
                    <a onclick="changeText('activateSubscription');">Activate Subscription</a>
                    <a onclick="changeText('suspendSubscription');">Suspend Subscription</a>
                    <a onclick="changeText('authoriseSubscription');">Authorise Subscription</a>
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
                  <a onclick="changeText('CRI_US');">CRI-US Business Verified 3.0-DG</a>
                  <a onclick="changeText('CRI_UK');">CRI-US Business Verified</a>
                  <a onclick="changeText('CRI-IT');">CRI-IT Business Verified</a>
                  <a onclick="changeText('CRI-FR');">CRI-FR Premier Verified</a>
                  <a onclick="changeText('CRI-DE');">CRI-DE Business Verified</a>
                  <a onclick="changeText('CRI-US');">CRI-US Airline Account</a>
                </div>
            </div>

            <a onclick="changeText();">Search</a>
        </div>

        <!-- Dropdown List  -->
        <script src="js/script.js"></script>
    </body>
</html>
