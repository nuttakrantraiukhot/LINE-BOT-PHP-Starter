<?php
$access_token = '/jlPwu9B9zHK3uZu+NlIRAoTqhYISpzevh1qeAVyqNKDVpM5X7+GtW3aK1gdB6k96Fkd14LElyqGZ2y1Ln59AY2/F6+0jVtmsIyUFArhRmB7ui1WcYNAEDNYwslg4UvDVxz/fhKLSxZFOmLah1gaTAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
