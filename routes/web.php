<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;


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

Route::get('/', function () {
    return view('catalog');
});

Route::prefix('produk')->group(function(){
    Route::get('/index',[ProdukController::class, 'index']);
    Route::get('/create',[ProdukController::class, 'create']);
    Route::post('/store',[ProdukController::class, 'store']);
    Route::get('/edit/{produk}',[ProdukController::class, 'edit']);
    Route::post('/update/{produk}',[ProdukController::class, 'update']);
    Route::get('/destroy/{produk}',[ProdukController::class, 'destroy']);
});

