<?php

require_once('BladeOne.php');
require_once('BladeOneCache.php');
use eftec\bladeone\BladeOne;
$views = __Dir__ . '/view';
$cache = __Dir__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);