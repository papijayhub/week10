<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoriesController extends Controller
{
    //

    public function index()
    {

        $categories = Category::all();
        return view('week10.categories',['categories'=>$categories]);
    }
}
