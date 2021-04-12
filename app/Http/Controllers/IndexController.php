<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class IndexController extends Controller
{
    public function index(Post $post){
        $post = Post::all();

        return view('iportfolio.index', ['posts'=>$post]);
    }
    public function inner(){
        return view('iportfolio.inner-page');
    }
    public function portfolio(){
        return view('iportfolio.portfolio-details');
    }
}
