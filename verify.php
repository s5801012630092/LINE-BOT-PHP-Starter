<?php
$access_token = 'uCCdiLcK039j014oEpGBy9GhkLLknbBxsNt2GuuRUVfakLbzBeRtdBY/usUME9IjTv8NtDsPUaE2mzUVQYuwtO31WMCgk7VS8U32JGF8wIzpS6ALRfHPKNJmCq3t/PBtU134tk5kDneDNVYZeCh4ewdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
