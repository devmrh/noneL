<?php

namespace App\Model;

use App\Model\User;
use App\Model\Database;


//require '../../vendor/autoload.php';

class GetUser{

 static function getusers(){

   Database::init();


   $users = User::get();

   print_r($users);
 }

}
