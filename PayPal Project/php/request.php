<?php

if ($_POST) // If form was submited...
{
    $api_endpoint = $_POST["api_endpoint"];
    $request_body = $_POST["request_body"]; // Get it into a variable
    // print_r( "Api Enpoint: " . $api_endpoint); // Print it!
    // print_r('<br>');
    // print_r("Request Body: " . $request_body);
    //print_r($_POST);

    $url = $api_endpoint;

    $data_array = json_decode($request_body, true);
    $data = http_build_query($data_array);

    $ch = curl_init();

    $headers = array(
        "Content-Type: application/json",
        "Authorization: Bearer ",
    );

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $res = curl_exec($ch);

    if($e = curl_error($ch))
    {
        echo $e;
    }
    else
    {
        $decoded = json_decode($res);
    }

    curl_close($ch);
}
else
{
    echo "failure";
}

?>