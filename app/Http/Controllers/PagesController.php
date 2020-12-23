<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\categories;



class PagesController extends Controllers
{
    public function ListCategories()
    {
        $category = categories::all();
        return view('pages.index',['category' => $category]);
    }
}
