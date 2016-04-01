<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Input;
use App\Ratings;
use Response;
use DB;

class RatingController extends Controller
{
    public function getRatings(Request $data)
    {
        $shop_id = Input::get('shop_id');
        $user_id = Input::get('user_id');
        $rating =  DB::table('ratings')
                    ->where('shop_id', '=', $shop_id)
                    ->where('user_id', '=', $user_id)
                    ->get();
        return response()->json($rating);
    }

    public function postRatings(Request $request)
    {   log::info($request);
        $data = array(
                    "value" => $request->get("value"),
                    "shop_id" => $request->get("shop_id"),
                    "user_id" => $request->get("user_id")
                );
        $status_check = Ratings::where('shop_id', '=', $request->get("shop_id"))
                        ->where('shop_id', '=', $request->get("user_id"))
                        ->first();
                        if(sizeof($status_check) > 0){
                            DB::table('ratings')->where('id',  $status_check['id'])->update($data);
                            $ratings=$status_check['id'];
                        }else{
                            $ratings=Ratings::create($data)->id;
                        }
        return response()->json($ratings);
    }
}
