<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../Entity/User.php';


$conn = new \TinyORM\Base\Connection('root', 'password', 'orm_test');
$conn->connect();
\TinyORM\ActiveRecord::setConnection($conn);

$user = \Entity\User::findByFields(['id' => 11, 'name' => 'change me']);
//$user = new \Entity\User();


if ($user) {
    $user
        ->setName('setName')
        ->save();

    $user
        ->setLastName('setLastName')
        ->save();

    var_export('success');
} else {
    var_export(' not found');
}

var_export($user);
