<?php
require_once ("braintree_init.php");
require_once ('lib/Braintree.php');
 
//$_SESSION['fake_valid_nonce'] = 'fake-valid-nonce';
//$nonce = $_SESSION['fake_valid_nonce'];
//$data = $_POST['request_body'];

$result = $gateway->transaction()->sale([
  $data = $_POST['request_body']
]);
  
$response = $result;
 
if ($result->success) {
  echo $result;
  print_r($response);
  print_r("Successfull!" . json_encode($result));
  // See $result->transaction for details
} else {
  print("Failed" . json_encode($result));
}

$_SESSION['transaction_id'] = $result->transaction->id;
 
?>