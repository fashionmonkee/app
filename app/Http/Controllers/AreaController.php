<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Input;

use App\Areas;
use Response;
use DB;
use Mail;

class AreaController extends Controller
{
	 public function getAreas(Request $data,$id = null)
    {

    	if($id == null){
    	  if(Input::get('city')){
    	  	$value = DB::table('areas')->where('city',Input::get('city'))->get();
    	  }else{
    	  	$value = DB::table('areas')->get();
    	  }    	  
    	}else{
    	   $value = DB::table('areas')->where('id',$id)->first();
    	}
        return response()->json($value);
    }

 
}