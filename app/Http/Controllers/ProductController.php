<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function updateProduct(Request $request){
        $id=$request->id;
     //   return response()->json($id);
        $p=Product::whereId($id)->first();
        if($p){
            $p->item_name=$request->item_name ?? $p->item_name ;
            $p->cost=$request->cost ?? $p->cost;
            $p->price=$request->price ?? $p->price;
            $p->qty=$request->qty ?? $p->qty;
            $p->update();
            return response()->json(['msg'=>'The product has been updated.']);
        }else{
            return response()->json(["error"=>"The product not found."]);
        }
    }
    public function deleteProduct($product_id){
        $p=Product::whereId($product_id)->first();
        if($p){
            $p->delete();
            return response()->json(["msg"=>"The product has been deleted."]);
        }else{
            return response()->json(["error"=>"The product not found."]);
        }
    }

    public function getProductById($product_id){
        $p=Product::where("id", $product_id)->first();
        if($p){
            return response()->json($p);
        }else{
            return response()->json(["error"=>"The product not found."]);
        }
    }

    public function getProducts(){
        $p=Product::OrderBy("id", "desc")->get();
        return response()->json($p);
    }
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

//khinewin/lv-api1