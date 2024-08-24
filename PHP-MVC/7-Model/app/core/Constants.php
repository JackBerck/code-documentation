<?php

$requestUri = $_SERVER["REQUEST_URI"];
$publicPosition = strpos($requestUri, '/public/');
$baseUrl = substr($requestUri, 0, $publicPosition + 8);
define('BASE_URL', $baseUrl);
