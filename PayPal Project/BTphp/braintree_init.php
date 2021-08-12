<?php

session_start();
require_once ("lib/autoload.php");

/*$filename = __DIR__."/../.env";
if(file_exists($filename)){
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
    $dotenv->load();
}*/

$gateway = new Braintree\Gateway([
  'environment' => 'sandbox',
  'merchantId' => 'h9wc5bh6tg2pzq3n',
  'publicKey' => 'x5h37hbmswps7h5g',
  'privateKey' => 'c6fdbe08931add724de96436f6106e63'
]);
?>