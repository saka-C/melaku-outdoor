<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TipeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DetailController;


use App\Models\Tipe;


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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('catalog')->group(function () {
    Route::get('/index', [CatalogController::class, 'index']);
});





Route::prefix('produk')->group(function () {
    Route::get('/index', [ProdukController::class, 'index']);
    Route::get('/create', [ProdukController::class, 'create']);
    Route::get('/detail/{id}', [ProdukController::class, 'detail'])->name('produk.detail');
    Route::get('/show/{tipeId}', [ProdukController::class, 'produkCategory'])->name('produk.category'); //dibenerin arip
    Route::post('/store', [ProdukController::class, 'store']);
    Route::get('/edit/{produk}', [ProdukController::class, 'edit']);
    Route::patch('/update/{produk}', [ProdukController::class, 'update']);
    Route::get('/destroy/{produk}', [ProdukController::class, 'destroy']);
});




Route::prefix('tipe')->group(function () {
    Route::get('/index', [TipeController::class, 'index']);
    Route::get('/create', [TipeController::class, 'create']);
    Route::post('/store', [TipeController::class, 'store']);
    Route::get('/edit/{tipe}', [TipeController::class, 'edit']);
    Route::post('/update/{tipe}', [TipeController::class, 'update']);
    Route::get('/destroy/{tipe}', [TipeController::class, 'destroy']);
});
