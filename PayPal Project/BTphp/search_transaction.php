<?php
require_once ("braintree_init.php");
require_once ('lib/Braintree.php');

// $cusomter_id = $_POST['customer_id'];

$collection = $gateway->transaction()->search([
  Braintree\TransactionSearch::customerId()->is('403040340'),//$cusomter_id),
]);

foreach($collection as $transaction) {
    echo json_encode($transaction);
}

?>