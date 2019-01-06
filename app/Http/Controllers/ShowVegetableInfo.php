<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vegetable;
use App\Price;
use App\Shop;
use DB;

class ShowVegetableInfo extends Controller
{
    public function index($id){
        $vegetableinfo=Vegetable::where('id',$id)->first();
        $data=['vegetables'=>$vegetableinfo];

        $info=DB::table('price')
        ->join('shops','price.s_id','=','shops.id')
        ->join('vegetables','price.v_id','=','vegetables.id')
        ->where('v_id',$id)
        ->select('shops.name','price')
        ->get();
        $data2=['price'=>$info];

        return view('vegetablesinfo',$data,$data2);
    }

    public function showprice(){
        
    }
}
