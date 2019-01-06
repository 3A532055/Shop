<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Price;
use App\Shop;
use DB;

class ShowShopInfo extends Controller
{
    public function index($id){
        $shopinfo=Shop::where('id',$id)->first();
        $data=['shops'=>$shopinfo];

        $info=DB::table('price')
        ->join('shops','price.s_id','=','shops.id')
        ->join('vegetables','price.v_id','=','vegetables.id')
        ->where('s_id',$id)
        ->select('vegetables.name','price')
        ->get();
        $data2=['price'=>$info];

        return view('shopinfo',$data,$data2);
    }

    public function showprice(){
        
    }
}
