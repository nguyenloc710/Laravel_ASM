<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('',[ShopController::class, 'index'])->name('home');
// Route::get('',[AuthController::class, 'getLogin']);
Route::get('/shop',[ShopController::class, 'shop'])->name('shop');
Route::get('/product/{product}',[ShopController::class, 'product_details'])->name('details');
Route::get('/lien-he',function  () {return view('client.contact_us');})->name('contact_us');
Route::middleware('auth')->get('/auth/logout', [AuthController::class, 'logout'])->name('logout');


Route::prefix('/auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('getLogin');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('/register', [AuthController::class, 'getRegister'])->name('getRegister');
    Route::post('/register', [AuthController::class, 'postResister'])->name('postResister');
});

Route::middleware(['checkAdmin','auth'])->prefix('/admin/category')->name('category.')->group(function () {
    Route::get('',[CategoryController::class , 'index'])->name('list');
    Route::delete('/{category}',[CategoryController::class , 'delete'])->name('delete');
    Route::get('/create',[CategoryController::class , 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/update/{category}', [CategoryController::class, 'update'])->name('update');
});
Route::middleware(['checkAdmin','auth'])->prefix('/admin/product')->name('product.')->group(function () {
    Route::get('',[ProductController::class , 'index'])->name('list');
    Route::delete('/{product}',[ProductController::class , 'delete'])->name('delete');
    Route::get('/create',[ProductController::class , 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');
});
Route::middleware(['checkAdmin','auth'])->prefix('/admin/user')->name('user.')->group(function () {
    Route::get('',[UserController::class , 'index'])->name('list');
    Route::delete('/{user}',[UserController::class , 'delete'])->name('delete');
    Route::get('/create',[UserController::class , 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
    Route::put('/update/{user}', [UserController::class, 'update'])->name('update');
});