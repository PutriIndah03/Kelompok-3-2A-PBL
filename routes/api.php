<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriApiController;
use App\Http\Controllers\MemberApiController;
use App\Http\Controllers\SupplierApiController;
use App\Http\Controllers\ProdukApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// table kategori
Route::get('/kategori', [KategoriApiController::class, 'index']);
Route::get('/kategori/{id_kategori}', [KategoriApiController::class, 'show']);
Route::post('/kategori', [KategoriApiController::class, 'create']);
Route::put('/kategori/{id_kategori}', [KategoriApiController::class, 'update']);
Route::delete('/kategori/{id_kategori}', [KategoriApiController::class, 'delete']);

// tabel member
Route::get('/member', [MemberApiController::class, 'index']);
Route::get('/member/{id_member}', [MemberApiController::class, 'show']);
Route::post('/member', [MemberApiController::class, 'create']);
Route::put('/member/{id_member}', [MemberApiController::class, 'update']);
Route::delete('/member/{id_member}', [MemberApiController::class, 'delete']);

// tabel supplier
Route::get('/supplier', [SupplierApiController::class, 'index']);
Route::get('/supplier/{id_supplier}', [SupplierApiController::class, 'show']);
Route::post('/supplier', [SupplierApiController::class, 'create']);
Route::put('/supplier/{id_supplier}', [SupplierApiController::class, 'update']);
Route::delete('/supplier/{id_supplier}', [SupplierApiController::class, 'delete']);

// tabel produk
Route::get('/produk', [ProdukApiController::class, 'index']);
Route::get('/produk/{id_produk}', [ProdukApiController::class, 'show']);
Route::post('/produk', [ProdukApiController::class, 'create']);
Route::put('/produk/{id_produk}', [ProdukApiController::class, 'update']);
Route::delete('/produk/{id_produk}', [ProdukApiController::class, 'delete']);
