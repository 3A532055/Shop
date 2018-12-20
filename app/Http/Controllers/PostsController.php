<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        //
        return view('index');
    }
    public function show()
    {
        //
        return view('shop');
    }

    public function shows()
    {
        //
        return view('vegetables');
    }

    public function about()
    {
        //
        return view('about');
    }
    public function contact()
    {
        //
        return view('contact');
    }
    public function news()
    {
        //
        return view('news');
    }

}
