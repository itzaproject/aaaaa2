<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
$username = htmlspecialchars($_GET["username"]);
$url= "https://onlyfans.com/api2/v2/users/".$username."?app-token=33d57ade8c02dbc5a333db99ff9ae26a";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_ENCODING, "");
$result = curl_exec($ch);
curl_close($ch);
//$data = json_encode($result, true);
echo $result;
// echo $data['avatar'];
// var_dump($data);
/*
if ($data['avatar']) {
    echo $data;
} else {
    
    http_response_code("404");
}

*/

?>