<?php
echo '{"name":"John","surname":"Bronson","age":"34","languages":["English","Polish","French"]}';
die;
$ch = curl_init("http://sandbox.dev/curl/receive.php");

$jsonData = [
"success" =>true,      
"error" => null, 
"response"=> [
	"code"=>"ad3f0db2-62b6-4cf4-9027-14829d33cfd2",
	"state"=>"my-secret-state-123456789"
  ]
];
$jsonDataEncoded = json_encode($jsonData);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
curl_close($ch);
