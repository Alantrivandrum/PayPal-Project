<?php
require_once ("braintree_init.php");
require_once ('lib/Braintree.php');

$payment_method_token = $_SESSION['payment_method_token'];
$plan_id = 'abcdefg';

$result = $gateway->subscription()->create([
    'paymentMethodToken' => $payment_method_token,
    'planId' => $plan_id
  ]);
  
if ($result->success) {
  print_r(json_encode($result));
  // See $result->transaction for details
} else {
  print("Failed" . json_encode($result));
}

$_SESSION['sub_id'] = $result->subscription->id;

echo '<br><br>';
echo $_SESSION['sub_id'];

?>