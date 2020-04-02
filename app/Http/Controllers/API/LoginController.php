<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Log;

class LoginController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()){
            Log::error("Login attempt failed for API Access");
            Log::error(print_r( $validator->errors(), true));
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $input = $request->all();
        if(Auth::attempt(['email'=> $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  $user->name;

            return $this->sendResponse($success, 'User Logged In successfully.');
        }
        return $this->sendError('Error in Login.',array());   
    }
}
