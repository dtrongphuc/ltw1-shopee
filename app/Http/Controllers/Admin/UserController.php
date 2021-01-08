<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', '=', '0')->paginate(10);
        return view('Admin/User', ['users' => $users]);
    }
}
