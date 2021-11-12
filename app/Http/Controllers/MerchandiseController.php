<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Merchandise;

class MerchandiseController extends Controller
{
    //
    public function index()
    {
        $merchandises = Merchandise::all();

        return view('week10.merchandise',['merchandises'=>$merchandises]);
    }
}
