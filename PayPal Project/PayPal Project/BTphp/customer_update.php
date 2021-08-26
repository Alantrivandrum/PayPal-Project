<?php
require_once ("braintree_init.php");
require_once ("lib/Braintree.php");


$customer_id = $_POST['customer_id'];
$email = $_POST['email'];

$result = $gateway->customer()->update(
  $customer_id,
  [
    'email' => $email
  ]
);

$response = json_encode($result, JSON_PRETTY_PRINT);


?>