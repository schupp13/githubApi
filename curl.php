<?php
$username = 'schupp13';
$url = 'https://api.github.com/users/schupp13';
$process = curl_init($url);
curl_setopt($process, CURLOPT_USERAGENT, $username);
curl_setopt($process, CURLOPT_RETURNTRANSFER,1);
$return = curl_exec($process);
$results = json_decode($return);
echo '<img src="' . $results->avatar_url . '"></img>';
curl_close($process);
?>
