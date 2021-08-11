<?php
require_once ("braintree_init.php");
require_once ('lib/Braintree.php');

$customer_id = $_SESSION['customer_id'];

$result = $gateway->customer()->update(
  $customer_id,
  [
    'firstName' => 'John',
    'lastName' => 'Doe',
    'company' => 'Doe Co.',
    'email' => 'john.doe@example.com',
    'phone' => '281.330.8004',
    'fax' => '419.555.1235',
    'website' => 'http://example.com'
  ]
);

echo json_encode($result);


?>