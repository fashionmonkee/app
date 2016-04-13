<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Input;

use App\Banners;
use Response;
use DB;

class BannerController extends Controller
{
	 public function getBanners(Request $data,$id = null)
    {
    	if($id == null){
    	  if(Input::get('city')){
    	  	$value = DB::table('banner_images')->where('city',Input::get('city'))->get();
    	  }else{
    	  	$value = DB::table('banner_images')->get();
    	  } 
    	}else{
    	   $value = DB::table('banner_images')->where('id',$id)->first();
    	}
        return response()->json($value);
    }

 
}