<?php

define('WEB_PATH', __DIR__ );

$path = WEB_PATH . $_SERVER['REQUEST_URI'];
if (is_file($path)) {
    return false;
}

require_once 'index_dev.php';
