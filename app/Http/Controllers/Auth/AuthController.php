<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\AuthBaseController;
use Illuminate\Http\Request;
use App\Models\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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

    // Logout
    public function logout(Request $request)
    {
        return redirect('login')->with(Auth::logout());
    }

    // Forgot Password
    public function forgotPassword(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if($validator->fails()) {
            return $this->sendError('Validator Error.', $validator->errors());
        }

        $user = User::where('email', $request->email)->first();

        $status = Password::sendResetLink(
            $request->only('email')
        );
    
        return $status === Password::RESET_LINK_SENT
                    ? $this->sendResponse('Sent mail successfully.')
                    : $this->sendError('Sent mail error.', ['error' => 'Lỗi gửi mail']);
    }
    // Reset password
    public function resetPassword (Request $request) {
        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
            'r_password' => 'required|same:password',
        ], [
            'email.required' => 'Vui lòng điền email',
            'email.email' => 'Email không hợp lệ',
            'password.required' => 'Vui lòng điền mật khẩu',
            'password.min' => 'Mật khẩu tối thiểu 5 kí tự',
            'password.max' => 'Mật khẩu tối đa 12 kí tự',
            'r_password.required' => 'Vui lòng điền mật khẩu',
            'r_password.same' => 'Mật khẩu xác nhận không khớp'
        ]);

        if($validator->fails()) {
            return $this->sendError('Validator Error.', $validator->errors());
        }

        $status = Password::reset(
            $request->only('email', 'password', 'r_password', 'token'),
            function ($user, $password) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
    
                $user->setRememberToken(Str::random(60));
    
                event(new PasswordReset($user));
            }
        );
    
        return $status == Password::PASSWORD_RESET
                    ? $this->sendResponse('Sent mail successfully.')
                    : $this->sendError('Sent mail error.', ['error' => 'Đã xảy ra lỗi']);
    }
}
