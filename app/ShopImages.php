<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ShopImages extends Model
{
     protected $table = 'shop_images';

     protected $fillable = [
            'image_url'
     ];
}
