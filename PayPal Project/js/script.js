

/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content
    This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
    
/****************************************************************************************************************************
JSON Requests*/
    var endpoint = "https://api.sandbox.paypal.com";
    var endpoint2 = "https://api-m.sandbox.paypal.com"

    let createOrder = {
        "intent": "CAPTURE",
        "purchase_units": [
          {
            "amount": {
              "currency_code": "USD",
              "value": "100.00"
            }
          }
        ],
        "application_context": {
          "brand_name": "AMIKADO",
          "locale": "en-EN",
          "shipping_preference": "GET_FROM_FILE",
          "user_action": "PAY_NOW",
          "return_url": "http://example.com/return",
          "cancel_url": "http://example.com/cancel"
          }
      }

    let createToken = {
        "description": "Billing Agreement",
        "shipping_address": {
          "line1": "1350 North First Street",
          "city": "San Jose",
          "state": "CA",
          "postal_code": "95112",
          "country_code": "US",
          "recipient_name": "John Doe"
        },
        "payer": {
          "payment_method": "PAYPAL"
        },
        "plan": {
          "type": "MERCHANT_INITIATED_BILLING",
          "merchant_preferences": {
            "return_url": "https://example.com/return",
            "cancel_url": "https://example.com/cancel",
            "notify_url": "https://example.com/notify",
            "accepted_pymt_type": "INSTANT",
            "skip_shipping_address": false,
            "immutable_shipping_address": true
          }
        }
      }

      let createAgreement = {
        "token_id": token_id
      }

      let createProduct = {
        "name": "Video Streaming Service",
        "description": "A video streaming service",
        "type": "SERVICE",
        "category": "SOFTWARE",
        "image_url": "https://example.com/streaming.jpg",
        "home_url": "https://example.com/home"
      }

      let createPlan = {
        "product_id": product_id,
        "name": "Basic Plan",
        "description": "Basic plan",
        "billing_cycles": [
          {
            "frequency": {
              "interval_unit": "MONTH",
              "interval_count": 1
            },
            "tenure_type": "TRIAL",
            "sequence": 1,
            "total_cycles": 1
          },
          {
            "frequency": {
              "interval_unit": "MONTH",
              "interval_count": 1
            },
            "tenure_type": "REGULAR",
            "sequence": 2,
            "total_cycles": 12,
            "pricing_scheme": {
              "fixed_price": {
                "value": "10",
                "currency_code": "USD"
              }
            }
          }
        ],
        "payment_preferences": {
          "auto_bill_outstanding": true,
          "setup_fee": {
            "value": "10",
            "currency_code": "USD"
          },
          "setup_fee_failure_action": "CONTINUE",
          "payment_failure_threshold": 3
        },
        "taxes": {
          "percentage": "10",
          "inclusive": false
        }
      }

      let createSubscription = {
        "plan_id": plan_id
      }

      let activateSubscription = {
        "reason": "Reactivating the subscription"
      }

      let suspendSubscription = {
        "reason": "Item out of stock"
      }

      let authoriseSubscription = {
        "note": "Charging as the balance reached the limit",
        "capture_type": "OUTSTANDING_BALANCE",
        "amount": {
          "currency_code": "USD",
          "value": "100"
        }
      }

      var US = "US_Example@paypal.com";
      var UK = "UK_Example@paypal.com";
      var IT = "IT_Example@paypal.com";
      var FR = "FR_Example@paypal.com";
      var DE = "DE_Example@paypal.com";
      var USA = "USA_Example@paypal.com";
      
      var Password = "Paypal1234";
      
      var US_secret = "EO02ZW9J0L28yMIX60g_piV4oVC4fZOFuYD2unnazkYwfAgD_7gzvKaz0t_tOEeGVam2kwvEi9wzj-sM";
      var UK_secret = "EDT3s_07o9USWRto-UMwCbXtfxhD5aLnwdf3BTGcrNZJyUQZmBMXx17HsNgLSx-QW4Lhk3qvVcq1yVXf";
      var IT_secret = "EEs8wAabN_lweaNT6l68X_0rxEeYsWpsnPvj5kMOPs76qm-4feQKcb2GNEoUssNuBNXNyebHDbHZAYQ6";
      var FR_secret = "EKO8HdMuVdWrnc4Ykvgzbvf74zATbElGPUumLsUPnlSADsxih2FN2UsP051bfxdY0QfPgs1RTi-vCTfs";
      var DE_secret = "ELVd6Bqs9dX_mW0O1p1jYytfshfYN_65FHL00ttZoLQf5qS_VAElXo__LI1F72gTIUEp0m3RTMbqRFks";
      var USA_secret = "EMfDYU1K3KX87K7-6xpAIoBiCLZTJAy6BrzDaKCtEDeAGFuQnRqm0GMyy435xOW4UZPzpO8stJJ780wi"; 
      
      var US_id = "AXWuDl8_y1YTTETGLgl3g3SErMVTjVES-nDlw_lF2WXRzUHko9UyORCzwgLGHnFFH412bTfbHEqUuttg";
      var UK_id = "AWl4x1DwG9qGhAB9lWb-N36uVxw56gpDFCSZQDL1nFLzuucUbuqae8h8yvMaIdSCdu8OxGY5rf7wdAkR";
      var IT_id = "AV4jEvNB1uKRllj3uCO01VTOH1Ca8w-11tTKSTci8Cauz3Kh4hAdQzYePno4Culu03e82YvgSN3-LFbv";
      var FR_id = "ATzzK4MQgY7JdYx8Iyz_OeEPYZILW5pXOpSl9q9h9Klp1SiCpxSQh-TYcsvWTESitfinScTEmJvt4JSx";
      var DE_id = "AXejdO9Wbm1_9bxo9SiLSQmVp37AnDaucWLoChf0VPisUIB0VRxwsIEk8dDRZzRuJQxLRxKqRz7u-Dz0";
      var USA_id = "AV0CavF54p2hxxYFQ0cuMvCo0HAUB4q0rRYOa9X8vp6xPG6u3bDUTjIj6N3hVyvDMhaXdFzmMYqE2cqD";

/* Change content in textareas when clicking a certain dropdown button */
function ChangeText(content) {

  switch(content) {
    case "paypal":
      document.getElementById("textarea1").value = 'PayPal';
      document.getElementById("textarea2").value = 'PayPal';
      document.getElementById("textarea3").value = 'PayPal';
      break;

    case "braintree":
      document.getElementById("textarea1").value = 'Braintree';
      document.getElementById("textarea2").value = 'Braintree';
      document.getElementById("textarea3").value = 'Braintree';
      break;
        
    case "accessToken":
      document.getElementById("textarea1").value = endpoint2 + '/v1/oauth2/token';
      document.getElementById("textarea2").value = '';
      document.getElementById("textarea3").value = 'Access Token';
      document.getElementById("request").value = 'AccessToken';
      break;
    
    // Payments
    case "createOrder":
      document.getElementById("textarea1").value = endpoint + '/v2/checkout/orders';
      document.getElementById("textarea2").value = JSON.stringify(createOrder,null,4);
      document.getElementById("textarea3").value = 'Create Order';
      document.getElementById("request").value = 'CreateOrder';
      break;
    case "showOrder":
      document.getElementById("textarea1").value = endpoint + '/v2/checkout/orders/' + order_id;
      document.getElementById("textarea2").value = '';
      document.getElementById("textarea3").value = 'Show Order';
      document.getElementById("request").value = 'ShowOrder';
      break;
    case "captureOrder":
      document.getElementById("textarea1").value = endpoint + '/v2/checkout/orders/' + order_id + '/capture';
      document.getElementById("textarea2").value = '';
      document.getElementById("textarea3").value = 'Capture Order';
      document.getElementById("request").value = 'CaptureOrder';
      break;
    case "authoriseOrder":
      document.getElementById("textarea1").value = endpoint + '/v2/checkout/orders/' + order_id + '/authorize';
      document.getElementById("textarea2").value = '';
      document.getElementById("textarea3").value = 'Authorise Order';
      document.getElementById("request").value = 'AuthoriseOrder';
      break;
    case "refundOrder":
      document.getElementById("textarea1").value = endpoint + '/v2/payments/captures/' + capture_id + '/refund';
      document.getElementById("textarea2").value = '';
      document.getElementById("textarea3").value = 'Refund';
      document.getElementById("request").value = 'RefundOrder';
      break;

    // Reference Transactions
    case "createToken":
      document.getElementById("textarea1").value = endpoint2 + '/v1/billing-agreements/agreement-tokens';
      document.getElementById("textarea2").value = JSON.stringify(createToken,null,4);
      document.getElementById("textarea3").value = 'Create Token';
      document.getElementById("request").value = 'CreateToken';
      break;
    case "showToken":
      document.getElementById("textarea1").value = endpoint2 + '/v1/billing-agreements/agreement-tokens/' + token_id;
      document.getElementById("textarea2").value = '';
      document.getElementById("textarea3").value = 'Show Token';
      document.getElementById("request").value = 'ShowToken';
      break;
    case "createAgreement":
      document.getElementById("textarea1").value = endpoint2 + '/v1/billing-agreements/agreements';
      document.getElementById("textarea2").value = JSON.stringify(createAgreement,null,4);
      document.getElementById("textarea3").value = 'Create Agreement';
      document.getElementById("request").value = 'CreateAgreement';
      break;
    case "showAgreement":
      document.getElementById("textarea1").value = endpoint2 + '/v1/billing-agreements/agreements/' + agreement_id;
      document.getElementById("textarea2").value = '';
      document.getElementById("textarea3").value = 'Show Agreement';
      document.getElementById("request").value = 'ShowAgreement';
      break;
    case "cancelAgreement":
      document.getElementById("textarea1").value = endpoint2 + '/v1/billing-agreements/agreements/' + agreement_id + '/cancel';
      document.getElementById("textarea2").value = '';
      document.getElementById("textarea3").value = 'Cancel Agreement';
      document.getElementById("request").value = 'CancelAgreement';
      break;

    // Subscriptions
    case "createProduct":
      document.getElementById("textarea1").value = endpoint2 + '/v1/catalogs/products';
      document.getElementById("textarea2").value = JSON.stringify(createProduct,null,4);
      document.getElementById("textarea3").value = 'Create Product';
      document.getElementById("request").value = 'CreateProduct';
      break;
    case "createPlan":
      document.getElementById("textarea1").value = endpoint2 + '/v1/billing/plans';
      document.getElementById("textarea2").value = JSON.stringify(createPlan,null,4);
      document.getElementById("textarea3").value = 'Create Plan';
      document.getElementById("request").value = 'CreatePlan';
      break;
    case "activatePlan":
      document.getElementById("textarea1").value = endpoint2 + '/v1/billing/plans/' + plan_id + '/activate';
      document.getElementById("textarea2").value = '';
      document.getElementById("textarea3").value = 'Activate Plan';
      document.getElementById("request").value = 'ActivatePlan';
      break;
    case "createSubscription":
      document.getElementById("textarea1").value = endpoint2 + '/v1/billing/subscriptions ';
      document.getElementById("textarea2").value = JSON.stringify(createSubscription,null,4);
      document.getElementById("textarea3").value = 'Create Subscription';
      document.getElementById("request").value = 'CreateSubscription';
      break;
    case "activateSubscription":
      document.getElementById("textarea1").value = endpoint2 + '/v1/billing/subscriptions/' + sub_id + '/activate';
      document.getElementById("textarea2").value = JSON.stringify(activateSubscription,null,4);
      document.getElementById("textarea3").value = 'Activate Subscription';
      document.getElementById("request").value = 'ActivateSubscription';
      break;
    case "suspendSubscription":
      document.getElementById("textarea1").value = endpoint2 + '/v1/billing/subscriptions/' + sub_id + '/suspend';
      document.getElementById("textarea2").value = JSON.stringify(suspendSubscription,null,4);
      document.getElementById("textarea3").value = 'Suspend Subscription';
      document.getElementById("request").value = 'SuspendSubscription';
      break;
    case "authoriseSubscription":
      document.getElementById("textarea1").value = endpoint2 + '/v1/billing/subscriptions/' + sub_id + '/capture';
      document.getElementById("textarea2").value = JSON.stringify(authoriseSubscription,null,4);
      document.getElementById("textarea3").value = 'Authorise Subscription';
      document.getElementById("request").value = 'AuthoriseSubscription';
      break;

    case "CRI_US":
      document.getElementById("textarea5").value = 'Live credentials have been disabled:\nUsername: '+US+ '\nPassword: '+Password+' \nClient ID: '+US_id+' \nClient Secret: '+US_secret;
      document.getElementById("client_id").value = US_id;
      document.getElementById("client_secret").value = US_secret;
      break;
    case "CRI_UK":
      document.getElementById("textarea5").value = 'Live credentials have been disabled:\nUsername: '+UK+ '\nPassword: '+Password+' \nClient ID: '+UK_id+' \nClient Secret: '+UK_secret;
      document.getElementById("client_id").value = UK_id;
      document.getElementById("client_secret").value = UK_secret;
      break;
    case "CRI_IT":
      document.getElementById("textarea5").value = 'Live credentials have been disabled:\nUsername: '+IT+ '\nPassword: '+Password+' \nClient ID: '+IT_id+' \nClient Secret: '+IT_secret;
      document.getElementById("client_id").value = IT_id;
      document.getElementById("client_secret").value = IT_secret;
      break;
    case "CRI_FR":
      document.getElementById("textarea5").value = 'Live credentials have been disabled:\nUsername: '+FR+ '\nPassword: '+Password+' \nClient ID: '+FR_id+' \nClient Secret: '+FR_secret;
      document.getElementById("client_id").value = FR_id;
      document.getElementById("client_secret").value = FR_secret;
      break;
    case "CRI_DE":
      document.getElementById("textarea5").value = 'Live credentials have been disabled:\nUsername: '+DE+ '\nPassword: '+Password+' \nClient ID: '+DE_id+' \nClient Secret: '+DE_secret;
      document.getElementById("client_id").value = DE_id;
      document.getElementById("client_secret").value = DE_secret;
      break;
    case "CRI_USA":
      document.getElementById("textarea5").value = 'Live credentials have been disabled:\nUsername: '+USA+ '\nPassword: '+Password+' \nClient ID: '+USA_id+' \nClient Secret: '+USA_secret;
      document.getElementById("client_id").value = USA_id;
      document.getElementById("client_secret").value = USA_secret;
      break;
    default:
      document.getElementById("textarea1").value = 'Error';
      document.getElementById("textarea2").value = 'Error';
      document.getElementById("textarea3").value = 'Error';
      break;
  }
}

function HidetextPP(){
  var x = document.getElementById("PayPal");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function HidetextBT(){
  var x = document.getElementById("Braintree");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

// **************TESTING*******************
function Hidetext(test){
  switch(test){
    case 'PayPal':
      var x = document.getElementById("PayPal");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
      break;

    case 'Braintree':
      var x = document.getElementById("Braintree");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
      break;
    }
}
  
