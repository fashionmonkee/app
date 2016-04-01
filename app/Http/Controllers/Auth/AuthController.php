<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Mail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Hash;
use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTFactory;
use DB;
use Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class AuthController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Registration & Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users, as well as the
      | authentication of existing users. By default, this controller uses
      | a simple trait to add these behaviors. Why don't you explore it?
      |
     */

use AuthenticatesAndRegistersUsers,
    ThrottlesLogins;

   
   
  

    //LOGIN
    protected function login(Request $request) {

        $email = $request->get('email');
        $password = $request->get('password');
        $credentials = array('email' => $email, 'password' => $password);
        $status_check = User::where('email', '=', $email)->first();
        if ($status_check['status'] == "1") {
            if (Auth::once($credentials)) {
                $user = Auth::user();
                $token = JWTAuth::fromUser($user);
                $login_info = array();
                $login_info['id'] = $user['id'];
                $login_info['name'] = $user['name'];
                $login_info['email'] = $user['email'];
                $login_info['role_id'] = $user['role_id'];
                $login_info['profile_url'] = $user['profile_url'];
                $login_info['city'] = $user['city'];
                $login_info['description'] = $user['description'];
                $login_info['token'] = $token;
                return response()->json($login_info);
            } else
                return response()->json('Invalid Credentials', 401);
        }else {
            return response()->json('Your not fashionMonkee user.Please Register!', 401);
        }
    }

    //REGISTER
    protected function register(Request $request) {

        log::info($request->get("name"));

            $check = User::where('email', '=', $request->get("email"))->first();

            if ($check == null) {
                $user_data = array(
                    "name" => $request->get("name"),
                    "email" => $request->get("email"),
                    "password" => bcrypt($request->get("password")),
                    "status" => "1",
                    "role_id" => "2",
                    "city" =>$request->get("city")
                );
                //Users table entry
                User::create($user_data);
                $credentials = array('email' => $request->get("email"), 'password' => $request->get("password"));
                $status_check = User::where('email', '=', $request->get("email"))->first();
                log::info($status_check);
                 if ($status_check['status'] == "1") {
                    if (Auth::once($credentials)) {
                        $user = Auth::user();
                        $token = JWTAuth::fromUser($user);
                        $login_info = array();
                        $login_info['id'] = $user['id'];
                        $login_info['name'] = $user['name'];
                        $login_info['email'] = $user['email'];
                        $login_info['role_id'] = $user['role_id'];
                        $login_info['profile_url'] = $user['profile_url'];
                        $login_info['city'] = $user['city'];
                        $login_info['description'] = $user['description'];
                        $login_info['token'] = $token;
                        return response()->json($login_info);
                    } else
                        return response()->json('Invalid Credentials', 401);
                }

            } else {
                return response()->json("You are already Registered user");
            }
    }

}