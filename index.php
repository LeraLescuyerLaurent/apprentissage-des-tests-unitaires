<?php

use TWITTER\Http\Response;

require_once __DIR__.'/vendor/autoload.php';


$name = $_GET['name'];

$response = new Response();
$response->setHeaders(['content-type' => 'text/html']);
$response->setStatusCode(200);

// header('content-type: text/html');

// http_response_code(200);

$response->setContent("hello $name");
$response->send();
// echo "hello $name";


// possible d amméliorer avec des condition si setHeader est different et si statusCode est differrent de 200 renvoyer le content