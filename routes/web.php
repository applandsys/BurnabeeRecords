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
    Route::get('/',[FrontController::class,'index'])->name('home_page');
    Route::get('/details/{id?}/{slug?}',[FrontController::class,'detail'])->name('home.vide_detail');
    Route::match(['get','post'],'/contact',[FrontController::class,'contact'])->name('home.contact');
    Route::get('/page/{slug}',[FrontController::class,'page'])->name('home.page');
    Route::get('/celebrity',[FrontController::class,'celebrity'])->name('home.celebrity');
    Route::get('/celebrity_detail/{id}/{slug}',[FrontController::class,'celebrity_detail'])->name('home.celebrity_detail');
    Route::get('/privacy-plicy',[FrontController::class,'privacyPlicy'])->name('home.privacy-plicy');
    Route::get('/faq',[FrontController::class,'faq'])->name('home.faq');
    Route::get('/watch-list',[FrontController::class,'watchList'])->name('home.watch-list');
    Route::get('/videos',[FrontController::class,'videos'])->name('home.videos');

    Route::get('/search-video',[FrontController::class,'searchVideo'])->name('home.searchVideo');
    Route::get('/blog',[FrontController::class,'blog'])->name('home.blog');
   
});


Route::group(['prefix' => 'admin','middleware' => 'auth','namespace'=>'Admin'], function() {
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::match(['get','post'],'/add-movie', [AdminController::class, 'addMovie'])->name('admin.addMovie');
    Route::get('/movie-list', [AdminController::class, 'movieList'])->name('admin.movieList');
    Route::get('/movie-edit/{id}', [AdminController::class, 'movieEdit'])->name('admin.movieEdit');
    Route::post('/movie-update/{id}', [AdminController::class, 'movieUpdate'])->name('admin.movieUpdate');

    Route::get('/slider-list', [AdminController::class, 'sliderList'])->name('admin.sliderList');
    Route::get('/page-list', [AdminController::class, 'pageList'])->name('admin.pageList');
    Route::get('/page-edit/{id}', [AdminController::class, 'pageEdit'])->name('admin.pageEdit');
    Route::post('/page-update/{id}', [AdminController::class, 'pageUpdate'])->name('admin.pageUpdate');

    
    Route::get('/user-list', [AdminController::class, 'userList'])->name('admin.userList');


    Route::match(['get','post'],'/add-category', [AdminController::class, 'addCategory'])->name('admin.addCategory');
    Route::get('/category-list', [AdminController::class, 'categoryList'])->name('admin.categoryList');
    Route::get('/category-edit/{id}', [AdminController::class, 'categoryEdit'])->name('admin.categoryEdit');

    Route::get('/slider-list', [AdminController::class, 'sliderList'])->name('admin.sliderList');
    Route::get('/slider-edit/{id}', [AdminController::class, 'sliderEdit'])->name('admin.sliderEdit');

    Route::post('/slider-update/{id}', [AdminController::class, 'sliderUpdate'])->name('admin.sliderUpdate');

    Route::get('/rating-list', [AdminController::class, 'ratingList'])->name('admin.ratingList');
    Route::get('/review-list', [AdminController::class, 'reviewList'])->name('admin.reviewList');

    Route::get('/celebrity-list', [AdminController::class, 'celebrityList'])->name('admin.celebrityList');
    Route::match(['get','post'],'/add-celebrity', [AdminController::class, 'addCelebrity'])->name('admin.addCelebrity');

    
    Route::get('/blog-list', [AdminController::class, 'blogList'])->name('admin.blogList');

    Route::match(['get','post'],'/add-blog', [AdminController::class, 'addBlog'])->name('admin.addBlog');

    Route::match(['get','post'],'/Settings', [AdminController::class, 'Settings'])->name('admin.Settings');


    
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

