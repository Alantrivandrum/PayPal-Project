<?php
//session_start();

require_once ("lib/autoload.php");

//Bianca's
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

//Tom's
// $gateway = new Braintree\Gateway([
//   'environment' => 'sandbox',
//   'merchantId' => 'h9wc5bh6tg2pzq3n',
//   'publicKey' => 'x5h37hbmswps7h5g',
//   'privateKey' => 'c6fdbe08931add724de96436f6106e63'
// ]);


$response = "done";

?>