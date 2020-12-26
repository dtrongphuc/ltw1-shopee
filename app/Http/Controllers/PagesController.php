<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;


class PagesController extends Controllers
{
    public function ListCategories()
    {
        $category = Categories::all();
        return view('pages.index',['category' => $category]);
    }
}
