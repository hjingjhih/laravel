<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');


Route::get('/products', function () {
    return view('frontend.products');
})->name('products');


Route::get('/store', function () {
    return view('frontend.store');
})->name('store');


// GET product的要求轉發給ProductController的index方法處理
Route::get('product', 'ProductController@index');
// GET product{id}的要求轉發給ProductController的show方法處理，同時會傳遞參數id
Route::get('product/{id}', 'ProductController@show');
// POST product的要求轉發給ProductController的store方法處理
Route::post('product', 'ProductController@store');
