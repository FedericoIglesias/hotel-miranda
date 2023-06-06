<?php

require_once('blade/BladeOne.php');
require_once('blade/BladeOneCache.php');
use eftec\bladeone\BladeOne;
$views = __Dir__ . '/view';
$cache = __Dir__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);


$servername = "localhost";
$username = "root";
$password = "1234";

