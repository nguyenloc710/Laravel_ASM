<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Products;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        $category = Category::select('*')
        ->orderBy('id','desc')
        ->paginate(5);
        return view('admin.category.list',['category_list' => $category]);
    }

    public function delete(Category $category){
        if($category){
            $category->delete();
            return redirect()->back();
        }
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'role' => 'required',
        ]);
        $category = new Category();

        $category->fill($request->all());

        $category->save();
        return redirect()->route('category.list');   
    }

    public function edit(Category $category)
    {

        return view('admin.category.create', [
            'category' => $category
        ]);
    }

    public function update(Category $category , CategoryRequest $request) {
        // dd($request);
        $category->fill($request->all());
        $category->save();
        return redirect()->route('category.list');
    }
}
