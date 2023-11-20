<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detailProduct;

class productDetails extends Controller
{
    public function insert(Request $request){
        $product = new detailProduct;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->product_id = $request->product_id;
        $product->product_type = $request->product_type;
    }
}
