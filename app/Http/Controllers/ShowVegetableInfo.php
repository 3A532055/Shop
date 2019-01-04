<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vegetable;
use App\Price;
use App\Shop;

class ShowVegetableInfo extends Controller
{
    public function index($id){
        $vegetableinfo=Vegetable::where('id',$id)->first();
        $data=['vegetables'=>$vegetableinfo];

        $pricedetail=Price::where('v_id',$id)->get();
        $data2=['price'=>$pricedetail];

        $shop=Price::where('s_id',$id)->get();
        $data3=['price'=>$shop];

        $shopdetail=Shop::where('id',$data3)->get();
        $data4=['shops'=>$shopdetail];

        return view('vegetablesinfo',$data,$data2,$data3,$data4);
    }

    public function showprice(){
        
    }
}
