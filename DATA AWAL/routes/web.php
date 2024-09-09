<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController; 
use App\Http\Controllers\BerandaController; 
use App\Http\Controllers\ProdukController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\PenjualanController; 

Route::get('/beranda', [BerandaController::class, 'home']);
Route::get('/category/food-beverage ', [ProdukController::class, 'kategoriFood']);
Route::get('/category/beauty-health', [ProdukController::class, 'kategoriBeauty']);
Route::get('/category/home-care ', [ProdukController::class, 'kategoriCare']);
Route::get('/category/baby-kid', [ProdukController::class, 'kategoriBaby']);
Route::get('/user', [UserController::class, 'user']);
Route::get('/penjualan', [PenjualanController::class, 'penjualan']);

//Route::get('/hello', [WelcomeController::class, 'hello']);
//
//Route::get('/', [HomeController::class, 'index']);
//Route::get('/about', [  AboutController::class, 'about']);
//Route::get('/articles/{id}', [ArticleController::class, 'articles']);
//
//Route::resource('photos', PhotoController::class);
//Route::resource('photos', PhotoController::class)->only([  'index', 'show' ]); 
//Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy' ]);
//
//Route::get('/greeting', [WelcomeController::class, 
//'greeting']); 
//
//Route::get('/welcome', function () {
//    return ('Selamat Datang');
//});
//
//Route::get('/world', function () { 
//return 'World'; 
//});
//
//Route::get('/user/{name}', function ($name) { 
//    return 'Nama saya '.$name; 
//    }); 
//
//    Route::get('/posts/{post}/comments/{comment}', function 
//($postId, $commentId) { 
//return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
//});
//
//
//    Route::get('/user/{name?}', function ($name='John') { 
//        return 'Nama saya '.$name; 
//        });
//
//
//        