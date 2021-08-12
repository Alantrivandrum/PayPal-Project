<?php
require_once ("braintree_init.php");
require_once ('lib/Braintree.php');

$transaction_id = $_SESSION['transaction_id'];

$result = $gateway->transaction()->void($transaction_id);

echo json_encode($result);

?>