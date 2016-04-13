<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Response;
use DB;
use Mail;

class contactMailController extends Controller
{
	 public function sendMail(Request $request)
    {
        log::info('dadada'.$request);
    	Mail::send('emails.contact', array('name' => $request->get('name'),
            'mobile'=> $request->get('mobile'),
            'email' => $request->get('email'),
            'messages' => $request->get('message')), 
        function ($message) {
            $message->to('naveensftwr@gmail.com')->subject('Contact from home page');
        });

        return response()->json("Success");
    }

 
}