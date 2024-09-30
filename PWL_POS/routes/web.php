<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController; 
use App\Http\Controllers\BerandaController; 
use App\Http\Controllers\ProdukController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\PenjualanController; 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController; 
use App\Http\Controllers\KategoriController; 

 Route::get('/', [WelcomeController::class, 'index']); 

 
Route::group(['prefix' => 'user'], function () {
Route::get('/', [UserController::class, 'index']); 
Route::post('/list', [UserController::class, 'list']); 
Route::get('/create', [UserController::class, 'create']); 
Route::post('/', [UserController::class, 'store']); 
Route::get('/{id}', [UserController::class, 'show']); 
Route::get('/{id}/edit', [UserController::class, 'edit']); 
Route::put('/{id}', [UserController::class, 'update']); 
Route::delete('/{id}', [UserController::class, 'destroy']); 
});

// Route::get('/', function () { return view('welcome');});
// Route::get('/level', [LevelController::class, 'index']); 
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);

// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

// Route::get('/beranda', [BerandaController::class, 'home']);
// Route::get('/category/food-beverage ', [ProdukController::class, 'kategoriFood']);
// Route::get('/category/beauty-health', [ProdukController::class, 'kategoriBeauty']);
// Route::get('/category/home-care ', [ProdukController::class, 'kategoriCare']);
// Route::get('/category/baby-kid', [ProdukController::class, 'kategoriBaby']);
// Route::get('/user', [UserController::class, 'user']);
// Route::get('/penjualan', [PenjualanController::class, 'penjualan']);

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