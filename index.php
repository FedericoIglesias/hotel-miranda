<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'pages/index.php',
    '/about-us' => 'pages/about-us.php',
    '/rooms' => 'pages/rooms.php',
    '/offers'  => 'pages/offers.php',
    '/new-details' => 'pages/new-details.php',
];


// if(array_key_exists($uri,$routes)){
//     require $routes[$uri];
// }else{
//     require $routes['/'];
// }

$configDB = 'mysql:host=localhost;port=3306;dbname=hotel_miranda;user=root;password=1234;charset=utf8';

$db = new PDO($configDB);

$statament = $db -> prepare('select * from rooms');

$statament -> execute();

$posts = $statament -> fetchAll(PDO::FETCH_ASSOC);

// echo(implode('',$posts));

foreach($posts as $post){
    echo implode(' ',$post) . "<br/>\n";
}