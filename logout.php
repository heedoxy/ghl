<?php

require_once __DIR__ . '/bootstrap/autoload.php';
$auth = new Auth();

if (! $auth->guest()) {
    $auth->logout();
    warning('خروج از سیستم');
}

go('./login.php');
