<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
     protected $table = 'reviews';

     protected $fillable = ['shop_id','user_id','reviews','created_at','updated_at'];
}