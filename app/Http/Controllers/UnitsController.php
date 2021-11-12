<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Unit;

class UnitsController extends Controller
{
    //

    public function index()
    {
        $units = Unit::all();

        return view('week10.units',['units'=>$units]);
    }
}
