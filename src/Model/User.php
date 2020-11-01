<?php

//require_once "../vendor/autoload.php";
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
  protected $fillable = ['name'];
}