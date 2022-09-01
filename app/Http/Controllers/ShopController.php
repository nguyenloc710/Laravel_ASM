<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class ShopController extends Controller
{
    public function index(){
        $category = Category::select('*')
        ->paginate();
        $product = Products::select('*')
        ->orderBy('id','desc')
        ->paginate(8);
        return view('home',['products_list' => $product,'category' => $category]);
    }

    public function product_details(Products $product){
        // dd($product);
        return view('client.product_details',[
            'products' => $product,
        ]);
    }

    public function shop(){
        $product = Products::select('*')
        ->orderBy('id','desc')
        ->paginate(9);
        return view('client.shop',['products' => $product]);
    }
}
