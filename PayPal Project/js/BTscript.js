/******Tom's Credentials*****/
var enviroment = "sandbox";
var merchant_id = "'h9wc5bh6tg2pzq3n'";
var public_key = "'x5h37hbmswps7h5g'";
var private_key = "'c6fdbe08931add724de96436f6106e63'";
// Braintree Initialisation


    function ChangeText(content) {

        switch(content) {
          case "bt_init":
            document.getElementById("textareabt1").value = "'enviroment' => "+enviroment+",\n'merchantId' => "+merchant_id+",\n'publicKey' => "+public_key+",\n'privateKey' => "+private_key+"";
            document.getElementById("textareabt2").value = '';
            document.getElementById("enviroment").value = enviroment;
            document.getElementById("merchant_id").value = merchant_id;
            document.getElementById("public_key").value = public_key;
            document.getElementById("private_key").value = private_key;
            document.getElementById("BT_request").value = 'BraintreeInit';
            break;
          
          case "sale":
            document.getElementById("textareabt1").value = "'amount' => '10.00',\n'paymentMethodNonce' => 'fake-valid-nonce',\n'options' => [\n'submitForSettlement' => 'True',\n]";
            document.getElementById("textareabt2").value = '';
            document.getElementById("BT_request").value = 'CreateTransaction';
            break;

          case "refund":
            document.getElementById("textareabt1").value = "{transaction_id}";
            document.getElementById("textareabt2").value = '';
            document.getElementById("BT_request").value = 'Refund';
            break;
              
          case "void":
            document.getElementById("textareabt1").value = "{transaction_id}";
            document.getElementById("textareabt2").value = '';
            document.getElementById("BT_request").value = 'Void';
            break;
               
          case "transactionSearch":
            document.getElementById("textareabt1").value = "Braintree\TransactionSearch::customerId()->is({customer_id}),";
            document.getElementById("textareabt2").value = '';
            document.getElementById("BT_request").value = 'CreateTransaction';
            break;

          case "paymentMethodCreate":
            document.getElementById("textareabt1").value = "'customerId' => '{customer_id}',\n'paymentMethodNonce' => 'fake_valid_nonce'";
            document.getElementById("textareabt2").value = '';
            document.getElementById("BT_request").value = 'PaymentMethodCreate';
            break;
          
          case "paymentMethodUpdate":
            document.getElementById("textareabt1").value = "{payment_method_token},\n[\n'billingAddress' => [\n'streetAddress' => '100 Oak Lane',\n'options' => [\n'updateExisting' => true\n]\n]";
            document.getElementById("textareabt2").value = '';
            document.getElementById("BT_request").value = 'PaymentMethodUpdate';
            break;
          
          case "createSub":
            document.getElementById("textareabt1").value = "'paymentMethodToken' => '{payment_method_token}',\n'planId' => '(Create Plan ID In The Control Panel)';"
            document.getElementById("textareabt2").value = '';
            document.getElementById("BT_request").value = 'CreateSubscription';
            break;
                      
               
            case "updateSub":
              document.getElementById("textareabt1").value = "'id' => '123456',\n'paymentMethodToken' => '(New Payment Method Token)',\n'price' => '12.34',\n'planId' => '(Create Plan ID In The Control Panel)',\n'merchantAccountId' => '(Merchant Account ID Taken From Control Panel)'";
              document.getElementById("textareabt2").value = '';
              document.getElementById("BT_request").value = 'UpdateSubscription';
              break;
          
            case "customerCreate":
              document.getElementById("textareabt1").value = "'firstName' => 'Mike',\n'lastName' => 'Jones',\n'company' => 'Jones Co.',\n'email' => 'mike.jones@example.com',\n'phone' => '281.330.8004',\n'fax' => '419.555.1235',\n'website' => 'http://example.com'";
              document.getElementById("textareabt2").value = '';
              document.getElementById("BT_request").value = 'CreateCustomer';
              break;
          
            case "customerUpdate":
              document.getElementById("textareabt1").value = "'customer_id',\n[\n'firstName' => 'John',\n'lastName' => 'Doe',\n'company' => 'Doe Co.',\n'email' => 'john.doe@example.com',\n'phone' => '281.330.8004',\n'fax' => '419.555.1235',\n'website' => 'http://example.com'\n]";
              document.getElementById("textareabt2").value = '';
              document.getElementById("BT_request").value = 'CreateUpdate';
              break;
                      
          default:
            document.getElementById("textarea1").value = 'Error';
            document.getElementById("textarea2").value = 'Error';
            break;
        }
      }