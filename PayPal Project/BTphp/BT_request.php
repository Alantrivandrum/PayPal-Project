<?php

if ($_POST)
{
    switch($_POST['request_name'])
    {
        case "BraintreeInit":
            include 'BTphp/Braintree_init.php';
            break;

        // Transaction
        case "CreateTransaction":
            include 'BTphp/sale.php';
            break;
        case "SearchTransaction":
            include 'BTphp/search_transaction.php';
            break;
        case "Void":
            include 'BTphp/void.php';
            break;
        case "Refund":
            include 'BTphp/refund.php';
            break;

        // Payment Method
        case "CreateCustomer":
            include "customer_create.php";
            break;
        case "CustomerUpdate":
            include "customer_update.php";
            break;
        case "PaymentMethodCreate":
            include "PaymentMethodCreate.php";
            break;
        case "PaymentMethodUpdate":
            include "payment_method_update.php";
            break;

        // Subscriptions
        case "CreateSubscription":
            include "create_sub.php";
            break;
        
        case "UpdateSubscription":
            include "sub_update.php";
            break;
          
    }
}
// $api_endpoint = $response["links"][0]["href"];
?>