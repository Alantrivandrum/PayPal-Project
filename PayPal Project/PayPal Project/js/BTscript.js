/******Tom's Credentials*****/
var environment = "sandbox";
var merchant_id = "h9wc5bh6tg2pzq3n";
var public_key = "x5h37hbmswps7h5g";
var private_key = "c6fdbe08931add724de96436f6106e63";

document.getElementById("CTC").style.display = "none";
// document.getElementById("MID").style.display = "none"; 
document.getElementById("amount").style.display = "none"; 
document.getElementById("td").style.display = "none";  
document.getElementById("ci").style.display = "none";
document.getElementById("pmt").style.display = "none";    
document.getElementById("cbs").style.display = "none";
document.getElementById("pd").style.display = "none"; 
document.getElementById("nsi").style.display = "none";
document.getElementById("em").style.display = "none";    
document.getElementById("si").style.display = "none";   

function ChangeText(content) {
  switch(content) {
    case "bt_init":
      document.getElementById("si").style.display = "none"; 
      document.getElementById("CTC").style.display = ""; 
      document.getElementById("amount").style.display = "none"; 
      document.getElementById("td").style.display = "none";  
      document.getElementById("ci").style.display = "none";
      document.getElementById("pmt").style.display = "none";    
      document.getElementById("cbs").style.display = "none";
      document.getElementById("pd").style.display = "none"; 
      document.getElementById("nsi").style.display = "none";
      document.getElementById("em").style.display = "none";  

      document.getElementById("environment").value = environment;
      document.getElementById('environment').type = '';
      document.getElementById("merchant_id").value = merchant_id;
      document.getElementById('merchant_id').type = '';
      document.getElementById("public_key").value = public_key;
      document.getElementById('public_key').type = '';
      document.getElementById("private_key").value = private_key;
      document.getElementById('private_key').type = '';
      document.getElementById("textareabt2").value = 'Braintree Initialize'; 
      document.getElementById("BT_request").value = 'BraintreeInit';
      document.getElementById('amount').type = 'hidden';
      document.getElementById('transaction_id').type = 'hidden';
      document.getElementById('customer_id').type = 'hidden';
      document.getElementById('payment_token').type = 'hidden';
      document.getElementById('email').type = 'hidden';
      document.getElementById('street_address').type = 'hidden';
      document.getElementById('new_sub_id').type = 'hidden';
      
      
      break;
    

    case "sale":
      document.getElementById("si").style.display = "none"; 
      document.getElementById("amount").style.display = ""; 
      document.getElementById("CTC").style.display = "none";
      document.getElementById("td").style.display = "none";  
      document.getElementById("ci").style.display = "none";
      document.getElementById("pmt").style.display = "none";    
      document.getElementById("cbs").style.display = "none";
      document.getElementById("pd").style.display = "none"; 
      document.getElementById("nsi").style.display = "none";
      document.getElementById("em").style.display = "none";    
      document.getElementById("textareabt2").value = 'Transaction Sale'; 
      document.getElementById("BT_request").value = 'CreateTransaction';
      document.getElementById('amount').type = '';
      document.getElementById('transaction_id').type = 'hidden';
      document.getElementById('transaction_id').value = transaction_id;
       document.getElementById('customer_id').type = 'hidden';
      document.getElementById('payment_token').type = 'hidden';
      document.getElementById('plan_id').type = 'hidden';
      document.getElementById('email').type = 'hidden';
      document.getElementById('street_address').type = 'hidden';
      document.getElementById('new_sub_id').type = 'hidden';

      document.getElementById('environment').type = 'hidden';
      document.getElementById('merchant_id').type = 'hidden';
      document.getElementById('public_key').type = 'hidden';
      document.getElementById('private_key').type = 'hidden';

   


      break;

    case "refund":
      document.getElementById("si").style.display = "none"; 
      document.getElementById("amount").style.display = "none"; 
      document.getElementById("CTC").style.display = "none";
      document.getElementById("td").style.display = "";  
      document.getElementById("ci").style.display = "none";
      document.getElementById("pmt").style.display = "none";    
      document.getElementById("cbs").style.display = "none";
      document.getElementById("pd").style.display = "none"; 
      document.getElementById("nsi").style.display = "none";
      document.getElementById("em").style.display = "none";  

      document.getElementById("textareabt2").value = 'Transaction Refund'; 
      document.getElementById("BT_request").value = 'Refund';
      document.getElementById('amount').type = 'hidden';
      document.getElementById('transaction_id').type = '';
      document.getElementById('transaction_id').value = transaction_id;
      document.getElementById('customer_id').type = 'hidden';
      document.getElementById('payment_token').type = 'hidden';
      document.getElementById('plan_id').type = 'hidden';
      document.getElementById('email').type = 'hidden';
      document.getElementById('street_address').type = 'hidden';
      document.getElementById('new_sub_id').type = 'hidden';

      document.getElementById('environment').type = 'hidden';
      document.getElementById('merchant_id').type = 'hidden';
      document.getElementById('public_key').type = 'hidden';
      document.getElementById('private_key').type = 'hidden';
      break;
        
    case "void":
      document.getElementById("si").style.display = "none"; 
      document.getElementById("amount").style.display = "none"; 
      document.getElementById("CTC").style.display = "none";
      document.getElementById("td").style.display = "";  
      document.getElementById("ci").style.display = "none";
      document.getElementById("pmt").style.display = "none";    
      document.getElementById("cbs").style.display = "none";
      document.getElementById("pd").style.display = "none"; 
      document.getElementById("nsi").style.display = "none";
      document.getElementById("em").style.display = "none";   

      document.getElementById("textareabt2").value = 'Transaction Void'; 
      document.getElementById("BT_request").value = 'Void';
      document.getElementById('amount').type = 'hidden';
      document.getElementById('transaction_id').type = '';
      document.getElementById('transaction_id').value = transaction_id;
      document.getElementById('customer_id').type = 'hidden';
      document.getElementById('payment_token').type = 'hidden';
      document.getElementById('plan_id').type = 'hidden';
      document.getElementById('email').type = 'hidden';
      document.getElementById('street_address').type = 'hidden';
      document.getElementById('new_sub_id').type = 'hidden';

      document.getElementById('environment').type = 'hidden';
      document.getElementById('merchant_id').type = 'hidden';
      document.getElementById('public_key').type = 'hidden';
      document.getElementById('private_key').type = 'hidden';
      break;
          
    case "transactionSearch":
      document.getElementById("si").style.display = "none"; 
      document.getElementById("amount").style.display = "none"; 
      document.getElementById("CTC").style.display = "none";
      document.getElementById("td").style.display = "none";  
      document.getElementById("ci").style.display = "";
      document.getElementById("pmt").style.display = "none";    
      document.getElementById("cbs").style.display = "none";
      document.getElementById("pd").style.display = "none"; 
      document.getElementById("nsi").style.display = "none";
      document.getElementById("em").style.display = "none"; 

      document.getElementById("textareabt2").value = 'Transaction Search';
      document.getElementById("BT_request").value = 'SearchTransaction';
      document.getElementById('amount').type = 'hidden';
      document.getElementById('transaction_id').type = 'hidden';
      document.getElementById('customer_id').type = '';
      document.getElementById('customer_id').value = customer_id;
      document.getElementById('payment_token').type = 'hidden';
      document.getElementById('plan_id').type = 'hidden';
      document.getElementById('email').type = 'hidden';
      document.getElementById('street_address').type = 'hidden';
      document.getElementById('new_sub_id').type = 'hidden';

      document.getElementById('environment').type = 'hidden';
      document.getElementById('merchant_id').type = 'hidden';
      document.getElementById('public_key').type = 'hidden';
      document.getElementById('private_key').type = 'hidden';
      break;


    case "paymentMethodCreate":
      document.getElementById("si").style.display = "none"; 
      document.getElementById("amount").style.display = "none"; 
      document.getElementById("CTC").style.display = "none";
      document.getElementById("td").style.display = "none";  
      document.getElementById("ci").style.display = "";
      document.getElementById("pmt").style.display = "none";    
      document.getElementById("cbs").style.display = "none";
      document.getElementById("pd").style.display = "none"; 
      document.getElementById("nsi").style.display = "none";
      document.getElementById("em").style.display = "none"; 
       
      document.getElementById("textareabt2").value = 'Payment Method Create';
      document.getElementById("BT_request").value = 'PaymentMethodCreate';
      document.getElementById('amount').type = 'hidden';
      document.getElementById('transaction_id').type = 'hidden';
      document.getElementById('customer_id').type = '';
      document.getElementById('customer_id').value = customer_id;
      document.getElementById('payment_token').type = 'hidden';
      document.getElementById('plan_id').type = 'hidden';
      document.getElementById('email').type = 'hidden';
      document.getElementById('street_address').type = 'hidden';
      document.getElementById('new_sub_id').type = 'hidden';

      document.getElementById('environment').type = 'hidden';
      document.getElementById('merchant_id').type = 'hidden';
      document.getElementById('public_key').type = 'hidden';
      document.getElementById('private_key').type = 'hidden';
      break;
    
    case "paymentMethodUpdate":
      document.getElementById("si").style.display = "none"; 
      document.getElementById("amount").style.display = "none"; 
      document.getElementById("CTC").style.display = "none";
      document.getElementById("td").style.display = "none";  
      document.getElementById("ci").style.display = "none";
      document.getElementById("pmt").style.display = "";    
      document.getElementById("cbs").style.display = "";
      document.getElementById("pd").style.display = "none"; 
      document.getElementById("nsi").style.display = "none";
      document.getElementById("em").style.display = "none"; 

      document.getElementById("textareabt2").value = 'Payment Method Update';
      document.getElementById("BT_request").value = 'PaymentMethodUpdate';
      document.getElementById('amount').type = 'hidden';
      document.getElementById('transaction_id').type = 'hidden';
      document.getElementById('customer_id').type = 'hidden';
      document.getElementById('payment_token').type = '';
      document.getElementById('payment_token').value = payment_token;
      document.getElementById('plan_id').type = 'hidden';
      document.getElementById('email').type = 'hidden';
      document.getElementById('street_address').type = '';
      document.getElementById('street_address').value = street_address;
      document.getElementById('new_sub_id').type = 'hidden';

      document.getElementById('environment').type = 'hidden';
      document.getElementById('merchant_id').type = 'hidden';
      document.getElementById('public_key').type = 'hidden';
      document.getElementById('private_key').type = 'hidden';
      break;
    

    case "createSub":
      document.getElementById("si").style.display = "none";
      document.getElementById("amount").style.display = "none"; 
      document.getElementById("CTC").style.display = "none";
      document.getElementById("td").style.display = "none";  
      document.getElementById("ci").style.display = "none";
      document.getElementById("pmt").style.display = "";    
      document.getElementById("cbs").style.display = "none";
      document.getElementById("pd").style.display = ""; 
      document.getElementById("nsi").style.display = "none";
      document.getElementById("em").style.display = "none"; 

      document.getElementById("textareabt2").value = 'Subscription Create';
      document.getElementById("BT_request").value = 'CreateSubscription';
      document.getElementById('amount').type = 'hidden';
      document.getElementById('transaction_id').type = 'hidden';
      document.getElementById('customer_id').type = 'hidden';
      document.getElementById('payment_token').type = '';
      document.getElementById('payment_token').value = payment_token;
       document.getElementById('plan_id').type = '';
      document.getElementById('plan_id').value = plan_id;
      document.getElementById('email').type = 'hidden';
      document.getElementById('street_address').type = 'hidden';
      document.getElementById('new_sub_id').type = 'hidden';

      document.getElementById('environment').type = 'hidden';
      document.getElementById('merchant_id').type = 'hidden';
      document.getElementById('public_key').type = 'hidden';
      document.getElementById('private_key').type = 'hidden';
      break;
                
    case "updateSub":
      document.getElementById("si").style.display = ""; 
      document.getElementById("env").style.display = "none"; 
      document.getElementById("puk").style.display = "none"; 
      document.getElementById("prk").style.display = "none"; 
      document.getElementById("amount").style.display = ""; 
      document.getElementById("CTC").style.display = "";
      document.getElementById("td").style.display = "none";  
      document.getElementById("ci").style.display = "none";
      document.getElementById("pmt").style.display = "";    
      document.getElementById("cbs").style.display = "none";
      document.getElementById("pd").style.display = ""; 
      document.getElementById("nsi").style.display = "";
      document.getElementById("em").style.display = "none"; 

      document.getElementById("textareabt2").value = 'Subscription Update';
      document.getElementById("BT_request").value = 'UpdateSubscription';
      document.getElementById('amount').type = '';
      document.getElementById('amount').value = amount;
      document.getElementById('transaction_id').type = 'hidden';
      document.getElementById('customer_id').type = 'hidden';
      document.getElementById('payment_token').type = '';
      document.getElementById('payment_token').value = payment_token;
       document.getElementById('plan_id').type = '';
      document.getElementById('plan_id').value = plan_id;
      document.getElementById('email').type = 'hidden';
      document.getElementById('street_address').type = 'hidden';
      document.getElementById('new_sub_id').type = '';
      document.getElementById('new_sub_id').value = new_sub_id;

      document.getElementById('environment').type = 'hidden';
      document.getElementById('merchant_id').type = '';
      document.getElementById('merchant_id').value = merchant_id;
      document.getElementById('public_key').type = 'hidden';
      document.getElementById('private_key').type = 'hidden';
      break;
    

    case "customerCreate":
      document.getElementById("si").style.display = "none"; 
      document.getElementById("amount").style.display = "none"; 
      document.getElementById("CTC").style.display = "none";
      document.getElementById("td").style.display = "none";  
      document.getElementById("ci").style.display = "none";
      document.getElementById("pmt").style.display = "none";    
      document.getElementById("cbs").style.display = "none";
      document.getElementById("pd").style.display = "none"; 
      document.getElementById("nsi").style.display = "none";
      document.getElementById("em").style.display = ""; 

      document.getElementById("textareabt2").value = 'Customer Create';
      document.getElementById("BT_request").value = 'CreateCustomer';
      document.getElementById('amount').type = 'hidden';
      document.getElementById('transaction_id').type = 'hidden';
      document.getElementById('customer_id').type = 'hidden';
      document.getElementById('payment_token').type = 'hidden';
      document.getElementById('plan_id').type = 'hidden';
      document.getElementById('email').type = '';
      document.getElementById('email').value = email;
      document.getElementById('street_address').type = 'hidden';
      document.getElementById('new_sub_id').type = 'hidden';

      document.getElementById('environment').type = 'hidden';
      document.getElementById('merchant_id').type = 'hidden';
      document.getElementById('public_key').type = 'hidden';
      document.getElementById('private_key').type = 'hidden';
      break;
    
    case "customerUpdate":
      document.getElementById("si").style.display = "none"; 
      document.getElementById("amount").style.display = "none"; 
      document.getElementById("CTC").style.display = "none";
      document.getElementById("td").style.display = "none";  
      document.getElementById("ci").style.display = "";
      document.getElementById("pmt").style.display = "none";    
      document.getElementById("cbs").style.display = "none";
      document.getElementById("pd").style.display = "none"; 
      document.getElementById("nsi").style.display = "none";
      document.getElementById("em").style.display = ""; 
      document.getElementById("textareabt2").value = 'Customer Update';
      document.getElementById("BT_request").value = 'CustomerUpdate';
      document.getElementById('amount').type = 'hidden';
      document.getElementById('transaction_id').type = 'hidden';
      document.getElementById('customer_id').type = '';
      document.getElementById('customer_id').value = customer_id;
      document.getElementById('payment_token').type = 'hidden';
      document.getElementById('plan_id').type = 'hidden';
      document.getElementById('email').type = '';
      document.getElementById('email').value = email;
      document.getElementById('street_address').type = 'hidden';
      document.getElementById('new_sub_id').type = 'hidden';

      document.getElementById('environment').type = 'hidden';
      document.getElementById('merchant_id').type = 'hidden';
      document.getElementById('public_key').type = 'hidden';
      document.getElementById('private_key').type = 'hidden';
      break;
            
      
    default:
      document.getElementById("textareabt2").value = 'Error';
      document.getElementById("CTC").style.display = "none"; 
      document.getElementById("amount").style.display = "none"; 
      break;
  }
}