<?php
require_once ("braintree_init.php");
require_once ("lib/Braintree.php");


$transaction_id = $_SESSION['transaction_id'];

$response = $gateway->transaction()->void($transaction_id);

$response = json_encode($response, JSON_PRETTY_PRINT);

?>