<?php

use App\Model\GetUser;


require './vendor/autoload.php';

GetUser::getusers();

// use Illuminate\Events\Dispatcher;
// use Illuminate\Container\Container;
// use Illuminate\Database\Capsule\Manager as Capsule;


// $capsule = new Capsule();

// $capsule->addConnection([
//   'driver'    => 'mysql',
//   'host'      => 'localhost',
//   'database'  => 'cap',
//   'username'  => 'root',
//   'password'  => 'root',
//   'charset'   => 'utf8',
//   'collation' => 'utf8_unicode_ci',
//   'prefix'    => '',
// ]);



// $capsule->setEventDispatcher(new Dispatcher(new Container));
// $capsule->setAsGlobal();
// $capsule->bootEloquent();

// Capsule::schema()->create('users', function($table){
//   $table->increments('id');
//   $table->string('name');
// });