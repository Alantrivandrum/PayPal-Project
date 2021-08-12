<?php
require_once ("braintree_init.php");
require_once ('lib/Braintree.php');

$sub_id = $_SESSION['sub_id']; 

$result = $gateway->subscription()->update($sub_id, [
    'id' => '123456',
    'paymentMethodToken' => 'mnppqzg',
    'price' => '12.34',
    'planId' => 'abcdefg',
    'merchantAccountId' => 'bibitopia'
]);
  
if ($result->success) {
  print_r(json_encode($result));
  // See $result->transaction for details
} else {
  print("Failed" . json_encode($result));
}


?>