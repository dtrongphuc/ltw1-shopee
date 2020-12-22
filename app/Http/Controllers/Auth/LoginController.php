<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Model;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    // Login API
    public function login(Request $request) {
        if(Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password,     
        ])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('user')->accessToken;
            $success['email'] = $user->email;

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorized.', ['error' => 'Unauthorized']);
        }
    }
}