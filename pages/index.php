<?php

$db = new DataBase();
$rooms = $db->query('SELECT * FROM rooms');

echo $blade->run("index", array('rooms' => $rooms));
