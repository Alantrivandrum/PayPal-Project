<?php

if ($_POST)
{
    if ($_POST['request_name'] == "AccessToken")
    {
        include 'php/access_token.php';
    }
    else if (isset($_SESSION['access_token']))
    {
        switch($_POST['request_name'])
        {
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

            // Subscriptions
            case "CreateProduct":
                include "create_product.php";
                break;
            
            case "CreatePlan":
                include "create_plan.php";
                break;

            case "ActivatePlan":
                include "activate_plan.php";
                break;

            case "CreateSubscription":
                include "create_subscription.php";
                break;
            
            case "ActivateSubscription":
                include "activate_subscription.php";
                break;

            case "SuspendSubscription":
                include "suspend_subscription.php";
                break;

            case "AuthoriseSubscription":
                include "authorise_subscription.php";
                break;
            
        }
    }
    else
    {
        $response = "Please do the Access Token with Credentials first!!!";
    }
}

?>