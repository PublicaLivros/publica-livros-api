<?php 

use Books\Controller\{
    Home,
    Request
};

$pathInfo = $_SERVER['REQUEST_URI'];
$pathMethod = $_SERVER['REQUEST_METHOD'];

if ( $pathInfo === '/home' ) {
    require_once __DIR__ . '/../view/home.html';
    return;
}

http_response_code(404);
require_once __DIR__ . '/../view/404.html';
die();
