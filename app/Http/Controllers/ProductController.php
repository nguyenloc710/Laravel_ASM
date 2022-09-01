<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductsRequest;
use App\Models\Products;
use App\Models\Category;


class ProductController extends Controller
{
    public function index(){
        $category = Category::select('*')
        ->paginate();
        $product = Products::select('*')
        ->orderBy('id','desc')
        ->paginate(5);
        // dd($category);

        return view('admin.Products.list',['products_list' => $product,'category' => $category]);
    }

    public function delete(Products $product){
        if($product){
            $product->delete();
            return redirect()->back();
        }
    }
    private function saveFile($file, $prefixName = '', $folder = 'public')
    {
        if ($file) {
            $fileName = $file->hashName();
            $fileName = isset($prefixName)
                ? $prefixName . '_' . $fileName
                : $fileName;

            return $file->storeAs($folder, $fileName);
        }
    }
    public function create(){
        $category = Category::select('*')
        ->orderBy('id','desc')
        ->paginate();
        return view('admin.Products.create',['category_list' => $category]);
    }

    public function store(Request $request){
        // dd($request);

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'role' => 'required',
        ]);
        $product = new Products();

        $product->fill($request->all());
        if ($request->hasFile('thumbnail_url')) {
            $avatar = $request->thumbnail_url;
            $avatarName = $avatar->hashName();
            $avatarName = $request->name . '_' . $avatarName;
            $product->thumbnail_url = $avatar->storeAs('users', $avatarName);
        } else {
            $product->thumbnail_url = '';
        }
        $product->save();
        return redirect()->route('product.list');   
    }

    public function edit(Products $product)
    {
        // dd($product);
        $category = Category::select('*')
        ->paginate();
        return view('admin.Products.create', [
            'products' => $product,
            'category_list' => $category,
        ]);
    }

    public function update(Products $product , ProductsRequest $request) {
        // dd($request);
        $product->fill($request->all());
        if ($request->hasFile('thumbnail_url')) {
            $product->thumbnail_url = $this->saveFile(
                $product->thumbnail_url,
                $product->name,
                '/products'
            );
        }
        // dd($product->thumbnail_url);
        $product->save();
        return redirect()->route('product.list');
    }
}
