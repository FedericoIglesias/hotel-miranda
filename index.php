<?php

require 'db.php';
require_once('config.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'pages/index.php',
    '/about-us' => 'pages/about-us.php',
    '/rooms' => 'pages/rooms.php',
    '/offers'  => 'pages/offers.php',
    '/new-details' => 'pages/new-details.php',
];


if(array_key_exists($uri,$routes)){
    require $routes[$uri];
}else{
    require $routes['/'];
}

