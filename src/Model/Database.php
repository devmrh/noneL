<?php

namespace App\Model;


//require './vendor/autoload.php';


use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;



class Database{

   static function init(){
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



    $capsule->setEventDispatcher(new Dispatcher(new Container));
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
   }

}
