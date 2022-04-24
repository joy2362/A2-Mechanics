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
Route::group(['middleware' => 'VisitorCount'],function(){
    Route::get('/',[PageController::class,'index'])->name('index');
    Route::get('/terms-and-condition',[PageController::class,'terms'])->name('terms');
    Route::get('/about',[PageController::class,'about'])->name('about');
    Route::get('/problem',[PageController::class,'problem'])->name('problem');
    Route::get('/contact-us',[PageController::class,'contact'])->name('contact');
    Route::get('/team',[PageController::class,'team'])->name('team');
    Route::get('/work',[PageController::class,'work'])->name('work');
    Route::get('/blogs',[PageController::class,'blogs'])->name('blogs');
    Route::get('/blog/{blog}',[PageController::class,'single_blog'])->name('blog');
    Route::get('/work/{work}',[PageController::class,'single_work'])->name('single.work');
});

Route::post('/blog/{blog}/comment',[PageController::class,'comment'])->name('blog.comment');
Route::post('/problem/create',[PageController::class,'problem_create'])->name('problem.create');
Route::post('/feedback/create',[PageController::class,'feedback_create'])->name('feedback.create');
