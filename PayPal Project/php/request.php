<?php
//include 'create_payment.php';
/*
if ($response) // If form was submited...
{
    $api_endpoint = $response["links"][0]["href"]; // Get it into a variable
    //print_r( "Api Enpoint: " . $api_endpoint); // Print it!
    //print_r('<br>');
    //print_r("Request Body: " . $request_body);
    // print_r();

}
else{
    //echo "failure";
}
*/
if ($_POST)
{
    switch(isset($_POST['request_name']))
    {
        case "CreateOrder":
            include 'php/create_payment.php';
            break;
        case "ShowOrder":
            include 'php/show_order.php';
            break;
        case "CaptureOrder":
            include 'php/capture_order.php';
            break;
        case "AuthoriseOrder":
            include 'php/authorise_order.php';
            break;
        case "RefundOrder":
            include 'php/refund_order.php';
            break;
    }
}

?>