<?php 
header('Content-Type: application/json; charset=utf-8');
header ('Access-Control-Allow-Origin', '*');
// Associative array having name and age 
$name = array("Deepak"=>12, "Arun"=>20, "Nandita"=>10); 
$google_api_url_main = "https://maps.googleapis.com/maps/api/place/details/json?";
$google_fields = array( "name", "rating", "formatted_address" );
$google_fields = $_GET['fields'];
$google_api_key = "AIzaSyCufM9HxximdErND3ZmfaSCEnEiFZwaKVY";
$google_api_key = $_GET['google_api_key'];
$google_place_id = "ChIJrTLr-GyuEmsRBfy61i59si0";
$google_place_id = $_GET['google_place_id'];
$final_url= $google_api_url_main .  $google_fields . "&key=" . $google_api_key . "&" .  "&place_id=" .$google_place_id;

$response = file_get_contents($final_url);
echo $response;
// json_encode function  
$json_pretty = json_encode($name, JSON_PRETTY_PRINT); 
#echo $json_pretty ; 
?> 
