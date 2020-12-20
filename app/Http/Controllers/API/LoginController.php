<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Model;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends BaseController
{
    // Login API
    public function login(Request $request) {
        if(Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password,     
        ])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['email'] = $user->email;

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorized.', ['error' => 'Unauthorized']);
        }
    }
}