<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('iportfolio.index');
    }
    public function inner(){
        return view('iportfolio.inner-page');
    }
    public function portfolio(){
        return view('iportfolio.portfolio-details');
    }
}
