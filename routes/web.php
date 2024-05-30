<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPages;


// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[FrontPages::class,'home'] )->name('home');
Route::get('/about',[FrontPages::class,'about'] )->name('about');
Route::get('/blog',[FrontPages::class,'blog'] )->name('blog');
Route::get('/shop',[FrontPages::class,'shop'] )->name('shop');
