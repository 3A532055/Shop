<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;
use App\Price;

class ShowShopInfo extends Controller
{
    public function index($id){
        $shopinfo=Shop::where('id',$id)->get();
        $data=['shops'=>$shopinfo];
        $showprice=Price::where('s_id',$id)->get();
        $data=['price'=>$showprice];

        return view('shopinfo',$data);
    }

    public function showprice(){
        
    }
}
