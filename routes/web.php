<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\users\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[HomeController::class,"index"] );

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    return 'Cache cleared successfully';
});
//Routes for users
Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'index'])->name('homePage');
    Route::get('/aboutUs', [UserController::class, 'aboutUs'])->name('aboutUs');
    Route::get('/OurProjects', [UserController::class, 'OurProject'])->name('OurProject');
    Route::get('/OurServices', [UserController::class, 'OurServices'])->name('OurServices');
    Route::get('/contactUs', [UserController::class, 'contactUs'])->name('contactUs');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

Route::get("/about",[AboutController::class,"index"]);
Route::get("/services",[ServiceController::class,"index"]);
Route::get("/project",[ProjectController::class,"index"]);
Route::get("/contact",function(){
    return view("contact");
});

Route::get("/change-language/{lang}",function($lang){
    Session::put("locale",$lang);
    return redirect()->back();
});