<?php

use Pimple\Container;

ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../Entity/User.php';

class Foo
{
    private $ts;
    private $host;

    /**
     * Foo constructor.
     */
    public function __construct($host)
    {
        $this->ts = microtime(1);
        $this->host = $host;
    }
}


$container = new Container();
$container->offsetSet('db.host','localhost');
$container['random_func'] = $container->protect(function () {
    return rand();
});

// define some services
$container['foo'] = function ($c) {
    return new Foo($c['db.host']);
};
var_export($container['random_func']());
return;
$conn = new \TinyORM\Base\Connection('root', 'password', 'orm_test');
$conn->connect();
\TinyORM\ActiveRecord::setConnection($conn);

$user = \Entity\User::findByFields(['id' => 11, 'name' => 'change me']);
//
//if($user){
//    $user
//        ->setName('change me')
//        ->save();
//    var_export('success');
//} else {
//    var_export(' not found');
//}
var_export($user);