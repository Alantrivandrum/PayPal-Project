<?php

if ($_POST)
{
    switch($_POST['request_name'])
    {
        case "AccessToken":
            include 'php/access_token.php';
            break;

        // Payments
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

        // Reference Transactions
        case "CreateToken":
            include "create_token.php";
            break;
        case "ShowToken":
            include "show_token.php";
            break;
        case "CreateAgreement":
            include "create_agreement.php";
            break;
        case "ShowAgreement":
            include "show_agreement.php";
            break;
        case "CancelAgreement":
            include "cancel_agreement.php";
            break;
    }
}
// $api_endpoint = $response["links"][0]["href"];
?>