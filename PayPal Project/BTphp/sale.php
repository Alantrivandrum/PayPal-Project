<?php
require_once ("braintree_init.php");
require_once ('lib/Braintree.php');

$_SESSION['fake_valid_nonce'] = 'fake-valid-nonce';
$nonce = $_SESSION['fake_valid_nonce'];

$result = $gateway->transaction()->sale([
  'amount' => '10.00',
  'paymentMethodNonce' => $nonce,
  'options' => [
  'submitForSettlement' => True,
  ]
]);
  
if ($result->success) {
  print_r("Successfull!" . json_encode($result));
  // See $result->transaction for details
} else {
  print("Failed" . json_encode($result));
}

$_SESSION['transaction_id'] = $result->transaction->id;

?>