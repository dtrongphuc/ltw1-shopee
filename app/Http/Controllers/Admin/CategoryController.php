<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categories;

class CategoryController extends Controller
{
    public function index(){

        $category = categories::All();
        return view('adminthucong/User', ['users' => $users]);
    }
}
