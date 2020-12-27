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
    // Login
    public function login(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
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
                return $this->sendError('Verify Error.', ['verify' => 'Tài khoản chưa được xác thực'], 401);
            }
            Auth::login($user);
            return $this->sendResponse('User login successfully.');
        } else {
            return $this->sendError('Unauthorized.', ['error' => 'Lỗi xác thực']);
        }
    }

    // Register
    public function register(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',
            'r_password' => 'required|same:password',
        ], [
            'email.required' => 'Vui lòng điền email',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Tài khoản đã tồn tại',
            'password.required' => 'Vui lòng điền mật khẩu',
            'password.min' => 'Mật khẩu tối thiểu 5 kí tự',
            'password.max' => 'Mật khẩu tối đa 12 kí tự',
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

        return $this->sendResponse('User register successfully.');
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
