<?php
require_once ("braintree_init.php");
require_once ("lib/Braintree.php");


$customer_id = $_POST['customer_id'];

$collection = $gateway->transaction()->search([
  Braintree\TransactionSearch::customerId()->is($customer_id),
]);

$result = array();
//$response = $collection;
foreach($collection as $transaction){
  $result = $transaction;
}
$response = json_encode($result, JSON_PRETTY_PRINT);
?>