<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account() {
        $user = \Auth::user();
        return view('pages.profile', ['user' => $user]);
    }
}
