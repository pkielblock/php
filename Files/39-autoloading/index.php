<?php

require_once 'vendor/autoload.php';

use app\Email as E;
use app\Person as P;

$email = new E();
$person = new P();

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

echo '<pre>';
echo $response->getStatusCode();
echo '</pre>';
echo '<pre>';
echo $response->getHeaderLine('content-type');
echo '</pre>';
echo '<pre>';
echo $response->getBody();
echo '</pre>';
