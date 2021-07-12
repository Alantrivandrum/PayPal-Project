/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content
    This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

/* Change content in textareas when clicking a certain dropdown button */
function changeText(content) {

    var endpoint = "https://api.sandbox.paypal.com";

    switch(content) {
        case "product":
            document.getElementById("textarea1").value = 'Product';
            document.getElementById("textarea2").value = 'Product';
            document.getElementById("textarea3").value = 'Product';
            break;
        case "apiCall":
            document.getElementById("textarea1").value = 'APICall';
            document.getElementById("textarea2").value = 'APICall';
            document.getElementById("textarea3").value = 'APICall';
            break;
        case "something":
            document.getElementById("textarea1").value = 'Something';
            document.getElementById("textarea2").value = 'Something';
            document.getElementById("textarea3").value = 'Something';
            break;
        case "somethingElse":
            document.getElementById("textarea1").value = 'Something Else';
            document.getElementById("textarea2").value = 'Something Else';
            document.getElementById("textarea3").value = 'Something Else';
            break;
        // Payments

        case "createOrder":
            document.getElementById("textarea1").value = endpoint + '/v2/checkout/orders';
            document.getElementById("textarea2").value = `{
    "intent": "CAPTURE",
    "purchase_units": [
        {
            "amount": {
            "currency_code": "USD",
            "value": "100.00"
            }
        }
    ]
}`;
            document.getElementById("textarea3").value = 'Create Order';
            break;
        case "showOrder":
            document.getElementById("textarea1").value = endpoint + '/v2/checkout/orders/{id}';
            document.getElementById("textarea2").value = '';
            document.getElementById("textarea3").value = 'Show Order';
            break;
        case "captureOrder":
            document.getElementById("textarea1").value = endpoint + '/v2/checkout/orders/{id}/capture';
            document.getElementById("textarea2").value = '';
            document.getElementById("textarea3").value = 'Capture Order';
            break;
        case "authoriseOrder":
            document.getElementById("textarea1").value = endpoint + '/v2/checkout/orders/{id}/authorize';
            document.getElementById("textarea2").value = '';
            document.getElementById("textarea3").value = 'Authorise Order';
            break;
        case "refund":
            document.getElementById("textarea1").value = endpoint + '/v2/payments/captures/{{capture_id}}/refund';
            document.getElementById("textarea2").value = '';
            document.getElementById("textarea3").value = 'Refund';
            break;

        // Reference Transactions
        case "createToken":
            document.getElementById("textarea1").value = endpoint + '/v1/billing-agreements/agreement-tokens';
            document.getElementById("textarea2").value = `{
    "description": "Billing Agreement",
    "shipping_address": {
        "line1": "1350 North First Street",
        "city": "San Jose",
        "state": "CA",
        "postal_code": "95112",
        "country_code": "US",
        "recipient_name": "John Doe"
    },
    "payer": {
        "payment_method": "PAYPAL"
    },
    "plan": {
        "type": "MERCHANT_INITIATED_BILLING",
        "merchant_preferences": {
        "return_url": "https://example.com/return",
        "cancel_url": "https://example.com/cancel",
        "notify_url": "https://example.com/notify",
        "accepted_pymt_type": "INSTANT",
        "skip_shipping_address": false,
        "immutable_shipping_address": true
        }
    }
}`;
            document.getElementById("textarea3").value = 'Create Token';
            break;
        case "showDetails":
            document.getElementById("textarea1").value = endpoint + '/v2/checkout/orders/{id}';
            document.getElementById("textarea2").value = '';
            document.getElementById("textarea3").value = 'Show Details';
            break;
        case "createAgreement":
            document.getElementById("textarea1").value = endpoint + '/v1/billing-agreements/agreements';
            document.getElementById("textarea2").value = `{
    "token_id": "{{token_id}}"
}`;
            document.getElementById("textarea3").value = 'Create Agreement';
            break;
        case "showAgreement":
            document.getElementById("textarea1").value = endpoint + '/v1/payments/billing-agreements/{agreement_id}';
            document.getElementById("textarea2").value = '';
            document.getElementById("textarea3").value = 'Show Agreement';
            break;
        case "cancelAgreement":
            document.getElementById("textarea1").value = endpoint + '/v1/payments/billing-agreements/{agreement_id}/cancel';
            document.getElementById("textarea2").value = '';
            document.getElementById("textarea3").value = 'Cancel Agreement';
            break;

        // Subscriptions
        case "createProduct":
            document.getElementById("textarea1").value = endpoint + '/v1/catalogs/products';
            document.getElementById("textarea2").value = `{
    "name": "Video Streaming Service",
    "description": "Video streaming service",
    "type": "SERVICE",
    "category": "SOFTWARE",
    "image_url": "https://example.com/streaming.jpg",
    "home_url": "https://example.com/home"
}`;
            document.getElementById("textarea3").value = 'Create Product';
            break;
        case "createPlan":
            document.getElementById("textarea1").value = endpoint + '/v1/billing/plans';
            document.getElementById("textarea2").value = `{
    "product_id": "{{product_id}}",
    "name": "Video Streaming Service Plan",
    "description": "Video Streaming Service basic plan",
    "status": "ACTIVE",
    "billing_cycles": [
        {
        "frequency": {
            "interval_unit": "MONTH",
            "interval_count": 1
        },
        "tenure_type": "TRIAL",
        "sequence": 1,
        "total_cycles": 2,
        "pricing_scheme": {
            "fixed_price": {
            "value": "3",
            "currency_code": "USD"
            }
        }
        },
        {
        "frequency": {
            "interval_unit": "MONTH",
            "interval_count": 1
        },
        "tenure_type": "TRIAL",
        "sequence": 2,
        "total_cycles": 3,
        "pricing_scheme": {
            "fixed_price": {
            "value": "6",
            "currency_code": "USD"
            }
        }
        },
        {
        "frequency": {
            "interval_unit": "MONTH",
            "interval_count": 1
        },
        "tenure_type": "REGULAR",
        "sequence": 3,
        "total_cycles": 12,
        "pricing_scheme": {
            "fixed_price": {
            "value": "10",
            "currency_code": "USD"
            }
        }
        }
    ],
    "payment_preferences": {
        "auto_bill_outstanding": true,
        "setup_fee": {
        "value": "10",
        "currency_code": "USD"
        },
        "setup_fee_failure_action": "CONTINUE",
        "payment_failure_threshold": 3
    },
    "taxes": {
        "percentage": "10",
        "inclusive": false
    }
}`;
            document.getElementById("textarea3").value = 'Create Plan';
            break;
        case "activatePlan":
            document.getElementById("textarea1").value = endpoint + '/v1/billing/plans/{id}/activate';
            document.getElementById("textarea2").value = '';
            document.getElementById("textarea3").value = 'Activate Plan';
            break;
        case "createSubscription":
            document.getElementById("textarea1").value = endpoint + '/v1/billing/subscriptions';
            document.getElementById("textarea2").value = `{
    "plan_id": "{{plan_id}}"
}`;
            document.getElementById("textarea3").value = 'Create Subscription';
            break;
        case "activateSubscription":
            document.getElementById("textarea1").value = endpoint + '/v1/billing/subscriptions/{id}/activate';
            document.getElementById("textarea2").value = `{
    "reason": "Reactivating the subscription"
}`;
            document.getElementById("textarea3").value = 'Activate Subscription';
            break;
        case "suspendSubscription":
            document.getElementById("textarea1").value = endpoint + '/v1/billing/subscriptions/{id}/suspend';
            document.getElementById("textarea2").value = `{
    "reason": "Item out of stock"
}`;
            document.getElementById("textarea3").value = 'Suspend Subscription';
            break;
        case "authoriseSubscription":
            document.getElementById("textarea1").value = endpoint + '/v1/billing/subscriptions/{id}/capture';
            document.getElementById("textarea2").value = `{
    "note": "Charging as the balance reached the limit",
    "capture_type": "OUTSTANDING_BALANCE",
    "amount": {
        "currency_code": "USD",
        "value": "100"
    }
}`;
            document.getElementById("textarea3").value = 'Authorise Subscription';
            break;
        default:
            document.getElementById("textarea1").value = 'Error';
            document.getElementById("textarea2").value = 'Error';
            document.getElementById("textarea3").value = 'Error';
            break;
    }
}

// function parseText(element2) {
    
//     request = document.getElementById(element2).value;

//     console.log(element2);
//     console.log(request);

//     console.log(JSON.parse(request));

//     obj = JSON.parse(request);

//     console.log(obj.intent);

// }
