<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use JWTAuth;
use Illuminate\Support\Facades\Log;
use Auth;
use Mail;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Organisation;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable,
        CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'status', 'role_id', 'city', 'profile_url','description'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];

    

    

    public static function changes($request) {
        // Get Token
        $token = JWTAuth::getToken();
        // Get Current User ID
        $user_id = JWTAuth::toUser($token)->id;
        $pass = User::find($user_id)->first();
        if (Hash::check($request->get('old_password'), $pass['password'])) {
            $password = array('password' => bcrypt($request->get('new_password')));

            User::find($user_id)->update($password);
            $user = User::where('id', $user_id)->first();
            //Mail Send
            Mail::send('emails.partner', array(
                "user_name" => $user['email'],
                'password' => $request->get("new_password")
                    ), function ($message) use ($user) {
                $message->to($user['email'], $user['name'])->subject('Your Password!');
            });

            $login_info['message'] = 'success';

            return $login_info;
        } else {
            return 'password_mismatched';
        }
    }

}