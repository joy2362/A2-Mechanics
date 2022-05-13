<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\FounderController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserQuestionController;
use App\Http\Controllers\Admin\WebSettingController;
use App\Http\Controllers\Admin\WorkController;
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

Route::group(['prefix'=>env('ADMIN_PANEL_URL'),'as'=>'admin.','middleware' => 'auth'],function(){
    //artisan
    Route::get('/storage/link',  function (){
        Artisan::call('storage:link');
        dd("storage link successful");
    });

    Route::get('/home', function () {
        return view('backend/pages/dashboard');
    })->name('home');
    Route::get('/home',HomeController::class)->name('home');


    //admin profile
    Route::get('/profile/setting',[ProfileController::class,'profile_setting'])->name('profile.setting');
    Route::get('/profile/setting/recovery-codes', [ProfileController::class, 'recoveryCodeShow']);
    Route::get('/profile/edit',[ProfileController::class, 'profile_edit'])->name('profile.edit');
    Route::put('/profile-image', [ProfileController::class, 'image_update'])->name('profile-image.update');

    //crud operation
    Route::resource('setting', SettingsController::class,array('only'=>['index','update']));
    Route::resource('user', AdminController::class,array('except'=>['show']));
    Route::resource('websetting', WebSettingController::class,array('only'=>['index','update']));
    Route::resource('founder', FounderController::class,array('except'=>['create','show']));
    Route::resource('faq', FaqController::class,array('except'=>['create','show']));
    Route::resource('category', CategoryController::class,array('except'=>['create','show']));
    Route::resource('visitor/question', UserQuestionController::class,array('only'=>['index','destroy']));
    Route::resource('visitor/feedback', FeedbackController::class,array('only'=>['index','destroy','show']));
    Route::resource('team', TeamController::class,array('except'=>['create','show']));
    Route::resource('work', WorkController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('comment', CommentController::class,array('only'=>['destroy']));
    Route::get('blog/{blog}/comment', [CommentController::class,'index'])->name('comment.index');

    //app icon change
    Route::post('setting/change/logo', [SettingsController::class,'change_logo'])->name('setting.logo.change');
    Route::post('setting/change/about_us_image', [SettingsController::class,'change_about_us_image'])->name('setting.about_us_image.change');
    Route::post('setting/change/hero_image', [SettingsController::class,'change_hero_image_image'])->name('setting.hero.image.change');

    //founder image change
    Route::post('founder/change/logo', [FounderController::class,'change_logo'])->name('founder.image.change');

    //change admin panel url name
    Route::post('panel/change/url', [WebSettingController::class,'change_admin_url'])->name('panel.url.update');
});