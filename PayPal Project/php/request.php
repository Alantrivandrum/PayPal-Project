<?php

if ($_POST)
{
    if($_POST['request_name'] == "CP") {
        include 'php/create_payment.php';
        // $authorize_link = $response["links"][0]["href"];
    }
    else if($_POST['request_name'] == "CO") {
        include 'php/capture_payment.php';
    }
}

?>