<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$url = 'https://api.diceblox.com/affiliates/' . $_GET['date'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: e34d9be48cfbbdebd4def62c96a50cf20f9e956d2b2be67cbb']);
echo curl_exec($ch);
curl_close($ch);
?>
