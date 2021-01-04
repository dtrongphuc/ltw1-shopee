<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function account() {
        $user = \Auth::user();
        return view('pages.profile', ['user' => $user]);
    }

    public function updateInfo(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'phoneNumber' => ['regex:/(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/']
        ], [
            'email.required' => 'Vui lòng điền email',
            'phoneNumber.regex' => 'Nhập số điện thoại hợp lệ',
        ]);

        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors());
        }

        $user = \Auth::user();

        $birthday;
        if(isset($request->birthday)) {
            $birthday = Carbon::createFromFormat('d/m/Y', $request->birthday)->format('Y-m-d');
        }

        $user->email = $request->email;
        $user->name = $request->name ?? null;
        $user->phoneNumber = $request->phoneNumber ?? null;
        $user->gender = $request->gender ?? null;
        $user->birthday = $birthday ?? null;
        $user->address = $request->address ?? null;
        $user->save();

        return \Redirect::back()->with('message', 'Cập nhật thông tin thành công');
    }

    public function changePassword(Request $request) {
        $validator = Validator::make($request->all(), [
            'old-password' => 'required',
            'new-password' => 'required|min:5|max:12|different:password',
            'confirm-password' => 'same:new-password',
        ], [
            'old-password.required' => 'Vui lòng điền mật khẩu hiện tại',
            'new-password.required' => 'Vui lòng điền mật khẩu mới',
            'new-password.min' => 'Mật khẩu tối thiểu 5 kí tự',
            'new-password.max' => 'Mật khẩu tối đa 12 kí tự',
            'confirm-password.required' => 'Vui lòng điền mật khẩu',
            'confirm-password.same' => 'Mật khẩu xác nhận không khớp'
        ]);

        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors());
        }

        $user = \Auth::user();

        if(!Hash::check($request->oldPassword, $user->password)) {
            return \Redirect::back()->withErrors('error', 'Mật khẩu không chính xác');
        }
        
        $user->password = Hash::make($request->newPassword);
        $user->save();

        return \Redirect::back()->with('message', 'Đổi mật khẩu thành công');
    }
}
