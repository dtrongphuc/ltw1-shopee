<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\categories;

class PagesController extends Controller
{
    public function ListCategories()
    {
        $category = categories::all();
        return view('pages.index',['category' => $category]);
    }
}
