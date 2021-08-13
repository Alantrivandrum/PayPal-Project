<?php

//session_start();
require_once ("lib/autoload.php");

/*$filename = __DIR__."/../.env";
if(file_exists($filename)){
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
    $dotenv->load();
}*/
$enviroment = $_POST['enviroment'];
$merchantID = $_POST['merchant_id'];
$publicKey = $_POST['public_key'];
$privateKey = $_POST['private_key'];

$gateway = new Braintree\Gateway([
  'environment' => $enviroment,
  'merchantId' => $merchantID ,
  'publicKey' => $publicKey,
  'privateKey' => $privateKey
]);

$response = $gateway;
?>
