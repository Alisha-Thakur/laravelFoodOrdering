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
    return view('welcome');
});
Route::get('/review',function(){
    return view('Reviews');
});
Route::get('/index1.php',function(){
    return view('Index12');
});
Route::get('/ali1.php',function(){
    return view('ali');
});
Route::get('/login.php',function(){
    return view('login');
});
Route::get('/cart',function(){
    return view('cart');
});
Route::get('/admin',function(){
    return view('admin');
});
Route::get('/checkout',function(){
    return view('checkout');
});
Route::get('/logout.php',function(){
    return view('logout');
});
Route::get('/yourreview',function(){
    return view('yourreview');
});
Route::get('/revsub',function(){
    return view('revsub');
});
Route::get('/reviews2',function(){
    return view('reviews2');
});
Route::get('/user567','reviewcon@somemethod');