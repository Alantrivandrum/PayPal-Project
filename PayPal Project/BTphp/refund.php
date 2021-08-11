<?php
require_once ("braintree_init.php");
require_once ('lib/Braintree.php');

$result = $gateway->transaction()->refund($_SESSION['transaction_id']);

echo $result;

?>