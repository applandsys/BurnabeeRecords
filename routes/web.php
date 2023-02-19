<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::namespace('Front')->group(function(){
    Route::get('/',[FrontController::class,'index']);
});


Route::group(['prefix' => 'admin','middleware' => 'auth','namespace'=>'Admin'], function() {
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::match(['get','post'],'/add-movie', [AdminController::class, 'addMovie'])->name('admin.addMovie');
    Route::get('/movie-list', [AdminController::class, 'movieList'])->name('admin.movieList');
    Route::get('/slider-list', [AdminController::class, 'sliderList'])->name('admin.sliderList');
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
