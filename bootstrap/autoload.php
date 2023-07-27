<?php

require_once __DIR__ . '/../application/Helper.php';

session_start();

if (! file_exists(__DIR__ . '/../vendor/autoload.php')) {
    echo "Please install composer !";
    die();
}

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../application/Database.php';
require_once __DIR__ . '/../application/Auth.php';
require_once __DIR__ . '/../application/User.php';
require_once __DIR__ . '/../application/Log.php';


