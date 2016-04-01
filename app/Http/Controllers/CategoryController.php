<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\MainCategory;
use App\SubCategory;
use Response;
use DB;

class CategoryController extends Controller
{
	 public function getMainCategory(Request $data,$id = null)
    {
    	if($id == null){
    	  $value = DB::table('main_category')->get();
    	}else{
    	   $value = DB::table('main_category')->where('id',$id)->first();
    	}
        return response()->json($value);
    }

     public function getSubCategory(Request $data,$id = null)
    {
        if($id == null){
    	  $value = DB::table('sub_category')->get();
    	}else{
    	   $value = DB::table('sub_category')->where('id',$id)->first();
    	}
        return response()->json($value);
    }
 
}