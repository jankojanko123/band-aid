<?php

function getSpotifySongs($id)
{

    //The URL you're sending the request to.
    $url = 'https://api.spotify.com/v1/playlists/'.$id.'/tracks';
    $token = 'BQAvcPJBiCiLOaUP77jZU92ZBl8ozdU5aextEv8H05J5Mre8Eu72J9qQXuX1l5inhAe5vLS6pU132wQdGKUyhAO3FBMZUcQ8RLKCP86X88P1vRKobtJcgIdU_Bt_yq8ToQq7WFr6cdiZCd-2TCXdJKz4JoZ_jN4_nVvVIdDc3ciGi_BZvaH9B1Fqu9tovPpiH5Ld3C9r2iWb8CyF9CJmg9F5FHX4wQTk5QSE889FgCFHSBvWcI0VsqNKqkCeLBIL9JpCK0gelmebxhcO2-57yDjF67uRwA';
    $token = 'BQBpEz3uCi7jfLR9FQs2cYMpRqGqA7vsYn4sCtbstbSKKHhae39FMKQwo0MmOst9N9dFWlcaWKm4PrKXnrRMGQNKZCIWCwm-1c4B1jukZomky6ABUgdV2V2j0SqzDt1_euCb1rqI4CQvTfrXb5KbQkNm-sXrBuuSQRfPg7QKU805F5TQ8bweDdMeBtc6p8-v7XesuaZ4-9AB9qrZYB91rT61wlyrjPzbq2cumcMxQv71tSyrvdIP1Ztx9cyQRxUCcVFveA_qzcLOxGvlWuWR0ZL30pdh_A';
    //Create a cURL handle.
    $ch = curl_init($url);

    //Create an array of custom headers. 
    $customHeaders = array(
        'Accept: application/json',
        'Content-Type: application/json',
        'Authorization: Bearer '.$token
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $customHeaders);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $result=json_decode(curl_exec($ch),true);

    return $result;
}
//fresh $id = '1zheEQFBAwxMNG9Gxvz51g';

$id = '5I9NecvE0fXYr3fsQR2QGF';
//$id = '1zheEQFBAwxMNG9Gxvz51g';

$res = getSpotifySongs($id);
var_dump($res);
var_dump($res['items'][0]['track']['album']['name']);
var_dump($res['items'][0]['track']['album']['artists'][0]['name']);
var_dump($res['items'][0]['track']['album']['images'][0]['url']);
var_dump($res['items'][0]['track']['album']['images'][1]['url']);
var_dump($res['items'][0]['track']['album']['images'][2]['url']);
var_dump($res['items'][0]['track']['name']);
var_dump($res['items'][0]['track']['popularity']);

var_dump($res['href']);

for ($i = 0; $i <=count($res['items'])-1; $i++) {
    var_dump($res['items'][$i]['track']['name']);
    var_dump($res['items'][$i]['track']['popularity']);
}


