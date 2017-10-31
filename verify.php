<?php


$access_token = 'OGQmM70UyBouqcPvHkkMROOSSMw+PUmFHmOs782sOozvah49r85WnwCPL1D075fiTv8NtDsPUaE2mzUVQYuwtO31WMCgk7VS8U32JGF8wIz99zm/nC9znoBfnrIu/jt14s6VHFbsLsJWHElUaFtsQgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);


$result = curl_exec($ch);
curl_close($ch);

echo $result;
