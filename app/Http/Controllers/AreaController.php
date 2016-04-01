<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Areas;
use Response;
use DB;

class AreaController extends Controller
{
	 public function getAreas(Request $data,$id = null)
    {
    	if($id == null){
    	  $value = DB::table('areas')->get();
    	}else{
    	   $value = DB::table('areas')->where('id',$id)->first();
    	}
        return response()->json($value);
    }

 
}