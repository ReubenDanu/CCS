<?php
// create a new cURL resource

// set URL and other appropriate options
$postParameter = array(
    'name' => 'Jane',
    'dateOfBirth' => '1974-8-17'
);

$curlHandle = curl_init('localhost/CCS/USER/LOGIC/edit_profile.php');
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);

$curlResponse = curl_exec($curlHandle);
curl_close($curlHandle);

var_dump($curlResponse);
