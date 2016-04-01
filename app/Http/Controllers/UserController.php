<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

use App\User;
use Response;
use DB;

class UserController extends Controller
{
	 public function getUsers(Request $data,$id = null)
    {
    	if($id == null){
    	  $value = DB::table('users')->get();
    	}else{
    	   $value = DB::table('users')->where('id',$id)->first();
    	}
        return response()->json($value);
    }

    public  function updateProfile(Request $request) {
    	$profileUrl='';
        if (strlen($request->get('profile_url')) > 1000) {
            $base64data = $request->get('profile_url');
            $filename = str_random(60);
            $uri = substr($base64data, strpos($base64data, ",") + 1);
            $url = public_path() . '/images/fm/profile/';
            if (!File::exists($url)) {
                File::makeDirectory($url, $mode = 0777, true, true);
            }
            File::put($url . $request->get('id') . '.jpg', base64_decode($uri));
            $profileUrl = 'http://localhost/images/fm/profile/' . $request->get('id') . '.jpg';
        }else{
        	$profileUrl =$request->get('profile_url');
        }

        $data = array(
            'name' => $request->get('name'),
            'city' => $request->get('city'),
            'description' => $request->get('description'),
            'profile_url' => $profileUrl
        );

        	$user=DB::table('users')->where('id', $request->get('id'))->update($data);
            log::info($user);
            return response()->json((int)$request->get('id'));
    }

  

}