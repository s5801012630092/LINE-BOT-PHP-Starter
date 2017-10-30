<?php

$proxy = 'fixie:bglYmiLPH45Bx7U';
$proxyauth = 'velodrome.usefixie.com:80';

$access_token = 'IA5TvSQ5R7vRqjc+rlu0jKcKRjGO6Boiqa6xEIoJKpbaSvGv3tWdsAjaAgB8NKIITv8NtDsPUaE2mzUVQYuwtO31WMCgk7VS8U32JGF8wIzwXZQ2OJlhzoEleQWfDh8VbMym33ckDwzZSsTFLBzJVgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
