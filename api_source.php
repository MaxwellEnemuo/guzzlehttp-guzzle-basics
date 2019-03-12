<?php

use GuzzleHttp\Client;


$client = new Client();
$res = $client->request('GET', 'https://remoteok.io/api?ref=producthunt', ['verify' => false]);
$decode_res = json_decode($res->getBody(), true);

// var_dump($decode_res);