<?php
require_once ("braintree_init.php");
require_once ("lib/Braintree.php");


$email = $_POST['email'];

$result = $gateway->customer()->create([
  'email' => $email
]);

if ($result->success) {
  $_SESSION['customer_id'] = $result->customer->id;
}

$response = json_encode($result, JSON_PRETTY_PRINT);

?>