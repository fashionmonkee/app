<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Shops extends Model
{
     protected $table = 'shops';

     protected $fillable = [
            'name',
            'address_id',
            'banner_image',
            'description',
            'ratings'
     ];

 
    public function address()
    {
        return $this->hasOne('App\Address','id','address_id');
    }  
     public function images()
    {
        return $this->hasMany('App\ShopImages','shop_id');
    }

    public function category()
    {
        return $this->belongsToMany('App\SubCategory','shop_category','shop_id','category_id');
    } 

    /* public static function saveShop($data){
     	$data['status'] = 1;
     	$shopId = Shops::create($data);
     	return $shopId;
     }

     public function draftShop($data){
     	$data['status'] = 0;
     	$shopId = Shops::create($data);
     	return $shopId;
     }*/
}
