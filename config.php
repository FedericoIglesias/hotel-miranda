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

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}