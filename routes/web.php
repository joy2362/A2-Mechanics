<?php

use App\Http\Controllers\Frontend\PageController;
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

Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/problem',[PageController::class,'problem'])->name('problem');
Route::get('/contact-us',[PageController::class,'contact'])->name('contact');
Route::post('/problem/create',[PageController::class,'problem_create'])->name('problem.create');
Route::post('/feedback/create',[PageController::class,'feedback_create'])->name('feedback.create');


Route::get('/blog', function () {
    return view('frontend/pages/blog');
});

Route::get('/blogs', function () {
    return view('frontend/pages/blogs');
});
