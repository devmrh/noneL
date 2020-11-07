<?php

namespace App;

use App\Model\User;


//require '../../vendor/autoload.php';

class GetUser
{

  static function getusers()
  {

    $users = User::get();

    print_r($users);
  }

  static function createUser(){
    $u = User::create(['name' => 'moon']);
    print_r($u);
  }
}

