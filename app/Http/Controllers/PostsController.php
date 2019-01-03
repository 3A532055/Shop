<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vegetable;
use App\Shop;

class PostsController extends Controller
{

    public function index(){
        return view('index');
    }

    public function shop(){
        $shopinfo=Shop::get();
        $data=['shops'=>$shopinfo];
        return view('shop',$data);
    }

    public function vegetables(){
        $vegetableinfo=Vegetable::get();
        $data=['vegetables'=>$vegetableinfo];
        return view('vegetables',$data);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
    
    public function news(){
        return view('news');
    }

}
