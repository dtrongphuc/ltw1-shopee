<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\AuthBaseController;
use Illuminate\Http\Request;
use App\Models\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Validator;

class AuthController extends AuthBaseController
{
    // Login API
    public function login(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ], [
            'email.required' => 'Vui lòng điền email',
            'password.required' => 'Vui lòng điền mật khẩu',
        ]);

        if($validator->fails()) {
            return $this->sendError('Validator Error.', $validator->errors());
        }

        if(Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password,     
        ])) {
            $user = Auth::user();
            if(!Auth::user()->hasVerifiedEmail()) {
                return $this->sendError('Verify Error.', ['verify' => 'Tài khoản chưa được xác thực']);
            }
            $success['token'] = $user->createToken('user')->accessToken;
            $success['email'] = $user->email;
            $success['verified'] = Auth::user()->hasVerifiedEmail();
            $success['id'] = $id = Auth::id();
            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorized.', ['error' => 'Unauthorized']);
        }
    }

    // Register API
    public function register(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'r_password' => 'required|same:password',
        ], [
            'email.required' => 'Vui lòng điền email',
            'email.unique' => 'Tài khoản đã tồn tại',
            'password.required' => 'Vui lòng điền mật khẩu',
            'r_password.required' => 'Vui lòng điền mật khẩu',
            'r_password.same' => 'Mật khẩu xác nhận không khớp'
        ]);

        if($validator->fails()) {
            return $this->sendError('Validator Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        event(new Registered($user));
        Auth::login($user);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['email'] = $user->email;

        return $this->sendResponse($success, 'User register successfully.');
    }

    // Logout API
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
