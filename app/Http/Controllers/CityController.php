<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Cities;
use Response;
use DB;

class CityController extends Controller
{
	 public function getCities(Request $data,$id = null)
    {
    	if($id == null){
    	  $value = DB::table('cities')->get();
    	}else{
    	   $value = DB::table('cities')->where('id',$id)->first();
    	}
        return response()->json($value);
    }

 
}