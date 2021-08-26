<?php
require_once ("lib/autoload.php");


if($_POST && $_POST['environment'] != '') {
  $environment = $_POST['environment'];
  $merchantId = $_POST['merchant_id'];
  $publicKey = $_POST['public_key'];
  $privateKey = $_POST['private_key'];
} else {
  //Tom's
  $environment = 'sandbox';
  $merchantId = 'h9wc5bh6tg2pzq3n';
  $publicKey = 'x5h37hbmswps7h5g';
  $privateKey = 'c6fdbe08931add724de96436f6106e63';
}

$_SESSION['environment'] = $environment;
$_SESSION['merchant_id'] = $merchantId; 
$_SESSION['public_key'] = $publicKey; 
$_SESSION['private_key'] = $privateKey;

$gateway = new Braintree\Gateway([
  'environment' => $_SESSION['environment'],
  'merchantId' => $_SESSION['merchant_id'],
  'publicKey' => $_SESSION['public_key'],
  'privateKey' => $_SESSION['private_key']
]);

$response = $gateway;

?>