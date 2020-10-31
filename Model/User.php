<?php

//require_once "../vendor/autoload.php";


use Illuminate\Database\Eloquent\Model;

class User extends Model {
  protected $fillable = ['name'];
}