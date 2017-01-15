<?php
$access_token = 'zZ5GTN4/Cr29Zk4S/J3orfRbqT6Zm/n+M7uoZex37Cb/bUCxUD9BZJHK0QWoSzv1SbbavCIpbxXSXb1VO1kb0ExA4jk8brCJjqLjH0d8QjNT1oUHl5tEPHa6SwPJaO03Xph5VI/uclpApY4q/HqjagdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' .
$access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;


?>
