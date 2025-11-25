<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function createProduct(Request $request){
        $request->validate([
            'item_name'=>'required',
            'cost'=>'required',
            'price'=>'required',
            'qty'=>'required'
        ]);

        $p=new Product();
        $p->item_name=$request->item_name;
        $p->cost=$request->cost;
        $p->price=$request->price;
        $p->qty=$request->qty;
        $p->save();

        return response()->json(["msg"=>"The product has been created."]);

    }
}
