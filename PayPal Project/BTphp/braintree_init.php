<?php
session_start();

require_once ("lib/autoload.php");

$environment = "sandbox";
$merchantId = "xc46m64sjdtxj7g9";
$publicKey = "s3ky489md3dtjd6z";
$privateKey = "0b8950e38e66477c998853ae542c339b";

$gateway = new Braintree\Gateway([
  'environment' => $environment,
  'merchantId' => $merchantId,
  'publicKey' => $publicKey,
  'privateKey' => $privateKey
]);

// echo 'done';

?>