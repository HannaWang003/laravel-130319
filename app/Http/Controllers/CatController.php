<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CatController extends Controller
{
    public function cat()
    {
        return view('cat.index');
    }
}
