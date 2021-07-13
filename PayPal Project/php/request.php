<?php

if ($_POST) // If form was submited...
{
    $api_endpoint = $_POST["api_endpoint"];
    $request_body = $_POST["request_body"]; // Get it into a variable
    print_r( "Api Enpoint: " . $api_endpoint); // Print it!
    print_r('<br>');
    print_r("Request Body: " . $request_body);
    //print_r($_POST);

}
else{
    echo "failure";
}

?>