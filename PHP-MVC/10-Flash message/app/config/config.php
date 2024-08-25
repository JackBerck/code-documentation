<?php

$requestUri = $_SERVER["REQUEST_URI"];
$publicPosition = strpos($requestUri, '/public/');
$baseUrl = substr($requestUri, 0, $publicPosition + 8);
define('BASE_URL', $baseUrl);

// Database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'phpmvc');
