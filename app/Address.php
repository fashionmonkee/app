<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use DB;

class Address extends Model
{
     protected $table = 'address';

     protected $fillable = [
            'address1',
            'address2',
            'area',
            'city',
            'state',
            'country',
            'phone',
            'mobile',
            'pin',
            'latitude',
            'longitude',
            'created_at',
            'updated_at'
     ];

     public static function saveAddress($request,$id=null)
    {
        $addressData = array(
            "address1" => $request["address1"],
            "address2" => $request["address2"],
            "area" => $request["area"],
            "city" => $request["city"],
            "state" => $request["state"],
            "country" => $request["country"],
            "pin" => $request["pin"],
            "mobile" => $request["mobile"],
            "phone" => $request["phone"],
            "latitude" =>$request["latitude"],
            "longitude" =>$request["longitude"]
        );
        if($id != null){
             DB::table('address')->where('id', $id)->update($addressData);
        }else{
          return Address::create($addressData)->id;  
        }
        
    } 
}
