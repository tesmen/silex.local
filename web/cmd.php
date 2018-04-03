<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../Entity/User.php';


$conn = new \TinyORM\Base\Connection('root', 'password', 'orm_test');
$conn->connect();
\TinyORM\ActiveRecord::setConnection($conn);

$user = new \Entity\User();

$user
    ->setName('jordan')
    ->save();