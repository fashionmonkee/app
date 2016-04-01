<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
     protected $table = 'ratings';

     protected $fillable = ['shop_id','user_id','value','created_at','updated_at'];
}