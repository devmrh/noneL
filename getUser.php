<?php

require_once "./vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;


$capsule = new Capsule();

$capsule->addConnection([
  'driver'    => 'mysql',
  'host'      => 'localhost',
  'database'  => 'cap',
  'username'  => 'root',
  'password'  => 'root',
  'charset'   => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix'    => '',
]);
$capsule->setAsGlobal();

//require './Model/User.php';

$users = Capsule::table('users')->get();

print_r($users);