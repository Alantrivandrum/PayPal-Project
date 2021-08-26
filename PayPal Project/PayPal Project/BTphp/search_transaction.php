<?php
require_once ("braintree_init.php");
require_once ("lib/Braintree.php");


$customer_id = $_POST['customer_id'];

$collection = $gateway->transaction()->search([
  Braintree\TransactionSearch::customerId()->is($customer_id),
]);

$response = json_encode($collection, JSON_PRETTY_PRINT);

?>