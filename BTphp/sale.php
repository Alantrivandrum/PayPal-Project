<?php
require_once ("braintree_init.php");
require_once ("lib/Braintree.php");


$nonceFromTheClient = $_POST["payment_method_nonce"];
$amount = $_POST['amount'];
$device_data = $_POST['device_data'];

$result = $gateway->transaction()->sale([
  'amount' => $amount,
  'paymentMethodNonce' => $nonceFromTheClient,
  'options' => [
    'submitForSettlement' => True
  ],
  'deviceData' => $device_data
]);
  
if ($result->success) {
  $_SESSION['transaction_id'] = $result->transaction->id;
}

$response = json_encode($result, JSON_PRETTY_PRINT);

?>