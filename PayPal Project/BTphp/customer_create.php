<?php
require_once ("braintree_init.php");
require_once ('lib/Braintree.php');

$result = $gateway->customer()->create([
  'firstName' => 'Mike',
  'lastName' => 'Jones',
  'company' => 'Jones Co.',
  'email' => 'mike.jones@example.com',
  'phone' => '281.330.8004',
  'fax' => '419.555.1235',
  'website' => 'http://example.com'
]);

echo json_encode($result);

# Generated customer id
$_SESSION['customer_id'] = $result->customer->id;

?>