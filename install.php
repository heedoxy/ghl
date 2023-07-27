<?php

require_once __DIR__ . '/bootstrap/autoload.php';
$user = new User();

$name = 'admin';
$family = 'admin';
$username = 'admin';
$phone = '09218248954';
$email = 'admin@admin.admin';
$password = md5('admin');
$profile = 'profile.jpg';
$is_active = 1;

$user->add($name, $family, $username, $phone, $email, $password, $profile, $is_active);

header('Location: ./');
die;
