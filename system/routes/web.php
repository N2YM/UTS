<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KomenAdminController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\ClientController;

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

//client pengunjung
Route::get('/', [ClientController::class, 'showHome']);
Route::get('artikel', [ClientController::class, 'showArtikel']);
Route::get('home', [ClientController::class, 'showHome']);
Route::post('artikel/{artikel}', [KomenController::class, 'store']);
Route::get('artikel/{artikel}', [ClientController::class, 'showArtikel']);


//admin
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::resource('komen', KomenController::class);

route::prefix('admin')->middleware('auth')->group(function () {
    Route::post('artikel/filter', [ArtikelController::class, 'filter']);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('user', UserController::class);
    Route::resource('komen', KomenAdminController::class);
});
Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('/', function () {
    return view('login');
});

Route::get('base2', function () {
    return view('fontend.base2');
});


// Route::get('beranda', [HomeController::class, 'showBeranda']);
// Route::get('kategori', [HomeController::class, 'showKategori']);

// Route::prefix('admin')->middleware('auth')->group(function(){
//     Route::post('produk/filter', [ProdukController::class,'filter']);
//     Route::resource('produk', ProdukController::class);
//     Route::resource('user', UserController::class);

// });




// Route::get('produk', [ProdukController::class, 'index']);
// Route::get('produk/create', [ProdukController::class, 'create']);
// Route::post('produk', [ProdukController::class, 'store']);
// Route::get('produk/{produk}', [ProdukController::class, 'show']);
// Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
// Route::put('produk/{produk}', [ProdukController::class, 'update']);
// Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

// Route::get('user', [UserController::class, 'index']);
// Route::get('user/create', [UserController::class, 'create']);
// Route::post('user', [UserController::class, 'store']);
// Route::get('user/{user}', [UserController::class, 'show']);
// Route::get('user/{user}/edit', [UserController::class, 'edit']);
// Route::put('user/{user}', [UserController::class, 'update']);
// Route::delete('user/{user}', [UserController::class, 'destroy']);
