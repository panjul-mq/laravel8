<?php

namespace App\Http\Controllers;
use\App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function showProduct(Product $product)
    {
        $data = $product;
        //$data = Product::where('product_slug',$slug)
        //        ->firstOrFail();
        //dd($data);
        //if (!$data) {
        //    abort(404);
        //}

        return view('product',compact('data'));
    }
}
