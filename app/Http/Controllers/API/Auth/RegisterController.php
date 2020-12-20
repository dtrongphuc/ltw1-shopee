<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Validator;

class RegisterController extends BaseController
{
    // Register API 
    public function register(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
            'r_password' => 'required|same:password',
        ]);

        if($validator->fails()) {
            return $this->sendError('Validator Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        event(new Registered($user));
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['email'] = $user->email;

        return $this->sendResponse($success, 'User register successfully.');
    }
}