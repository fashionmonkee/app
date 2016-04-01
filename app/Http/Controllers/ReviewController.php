<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Input;
use App\Reviews;
use Response;
use DB;

class ReviewController extends Controller
{
    public function getReviews(Request $data)
    {
        $key = Input::get('shop_id');
        $reviews = DB::table('reviews')
            ->join('users', 'users.id', '=', 'reviews.user_id')
            ->select('reviews.*', 'users.name as user_name','users.profile_url')
            ->where('shop_id', $key)->get();
        return response()->json($reviews);
    }

    public function postReviews(Request $request)
    {
    	$data = array(
                    "reviews" => $request->get("reviews"),
                    "shop_id" => $request->get("shop_id"),
                    "user_id" => $request->get("user_id")
                );
     	if($request->get("id") != null){
     		DB::table('reviews')->where('id',  $request->get("id"))->update($data);
            $reviews=$request->get("id");
     	}else{
     		$reviews=Reviews::create($data)->id;
     	}
    }

    public function deleteReviews(Request $request)
    {
    	$id = Input::get('id');
     	DB::table('reviews')->where('id', '=', $id)->delete();
    }
}
