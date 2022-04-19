<?php

use Illuminate\Support\Facades\Artisan;
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
    return view('frontend/pages/index');
});

Route::get('/about', function () {
    return view('frontend/pages/about');
});

Route::get('/blog', function () {
    return view('frontend/pages/blog');
});

Route::get('/blogs', function () {
    return view('frontend/pages/blogs');
});

Route::get('/admin', function () {
    return view('backend/pages/dashboard');
});


//artisan
Route::get('/storage/link',  function (){
    Artisan::call('storage:link');
    dd("storage link successful");
});