<?php

if ($_POST)
{
    switch($_POST['request_name'])
    {
        case "CreateOrder":
            include 'php/create_payment.php';
            break;
        case "ShowOrder":
            include 'php/show_order.php';
            break;
        case "CaptureOrder":
            include 'php/capture_payment.php';
            break;
        case "AuthoriseOrder":
            include 'php/authorise_order.php';
            break;
        case "RefundOrder":
            include 'php/refund_order.php';
            break;
    }
}
// $api_endpoint = $response["links"][0]["href"];
?>