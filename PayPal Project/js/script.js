/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content
    This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var endpoint = "https://api.sandbox.paypal.com";


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
//****************************************************************************************************************************/
//JSON Requests
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
        "token_id": "{token_id}"
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
        "product_id": "{product_id}",
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
        "plan_id": "{plan_id}"
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
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v1/oauth2/token';
                document.getElementById("textarea2").value = '';
                document.getElementById("textarea3").value = 'Access Token';
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
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v1/billing-agreements/agreement-tokens';
                document.getElementById("textarea2").value = JSON.stringify(createToken,null,4);
                document.getElementById("textarea3").value = 'Create Token';
                break;
            case "showDetails":
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v1/billing-agreements/agreement-tokens/{{token_id}}';
                document.getElementById("textarea2").value = '';
                document.getElementById("textarea3").value = 'Show Details';
                break;
            case "createAgreement":
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v1/billing-agreements/agreements';
                document.getElementById("textarea2").value = JSON.stringify(createAgreement,null,4);
                document.getElementById("textarea3").value = 'Create Agreement';
                break;
            case "showAgreement":
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v1/billing-agreements/agreements/{{agreement_id}}';
                document.getElementById("textarea2").value = '';
                document.getElementById("textarea3").value = 'Show Agreement';
                break;
            case "cancelAgreement":
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v2/payments/captures/{{captureID}}/refund';
                document.getElementById("textarea2").value = '';
                document.getElementById("textarea3").value = 'Cancel Agreement';
                break;
    
            // Subscriptions
            case "createProduct":
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v1/catalogs/products';
                document.getElementById("textarea2").value = JSON.stringify(createProduct,null,4);
                document.getElementById("textarea3").value = 'Create Product';
                break;
            case "createPlan":
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v1/billing/plans';
                document.getElementById("textarea2").value = JSON.stringify(createPlan,null,4);
                document.getElementById("textarea3").value = 'Create Plan';
                break;
            case "activatePlan":
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v1/billing/plans/{{create_id}}/activate';
                document.getElementById("textarea2").value = '';
                document.getElementById("textarea3").value = 'Activate Plan';
                break;
            case "createSubscription":
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v1/billing/subscriptions ';
                document.getElementById("textarea2").value = JSON.stringify(createSubscription,null,4);
                document.getElementById("textarea3").value = 'Create Subscription';
                break;
            case "activateSubscription":
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v1/billing/subscriptions/{{subscription_id}}/activate';
                document.getElementById("textarea2").value = JSON.stringify(activateSubscription,null,4);
                document.getElementById("textarea3").value = 'Activate Subscription';
                break;
            case "suspendSubscription":
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v1/billing/subscriptions/{{subscription_id}}/suspend';
                document.getElementById("textarea2").value = JSON.stringify(suspendSubscription,null,4);
                document.getElementById("textarea3").value = 'Suspend Subscription';
                break;
            case "authoriseSubscription":
                document.getElementById("textarea1").value = 'https://api-m.sandbox.paypal.com/v1/billing/subscriptions/{{subscription_id}}/capture';
                document.getElementById("textarea2").value = JSON.stringify(authoriseSubscription,null,4);
                document.getElementById("textarea3").value = 'Authorise Subscription';
                break;
            default:
                document.getElementById("textarea1").value = 'Error';
                document.getElementById("textarea2").value = 'Error';
                document.getElementById("textarea3").value = 'Error';
                break;
        }
    }
