<?php
//include 'create_payment.php';
include 'capture_payment.php';
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

?>