<?php
require_once ("braintree_init.php");
require_once ("lib/Braintree.php");


$transaction_id = $_POST['transaction_id'];

$response = $gateway->transaction()->refund($transaction_id);

$response = json_encode($response, JSON_PRETTY_PRINT);

?>