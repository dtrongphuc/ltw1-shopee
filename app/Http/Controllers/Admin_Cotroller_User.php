<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Admin_Cotroller_User extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('adminthucong/User', ['users' => $users]);
    }
}
