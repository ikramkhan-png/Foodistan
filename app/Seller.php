<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
     protected $fillable = ['user_id','name', 'email','shop_name', 'description','address','profile','documents']; 
}
