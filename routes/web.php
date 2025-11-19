<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\bukutamuController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

// get(http://127.0.0.1:8000/)
// Route::get('/', fn() => view('xiirpl1'))->name('home');
// route::get(http://127.0.0.1:8000/biodata)
// Route::get('/biodata', fn() => view('biodata'))->name('biodata');
// Route::get('/tabel', fn() => view('tabel'))->name('tabel');
// Route::get('/bukutamu', fn() => view('bukutamu'))->name('bukutamu');

// routing dengn class controller
// Route::method('URI', [NamaController::class, 'nama_function'])->name('nama routing');
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', [AuthController::class, 'dashboard'])->name('home');
// Route::get('/biodata', [BiodataController::class, 'biodata'])->name('biodata');
// Route::get('/tabel', [TableController::class, 'tabel'])->name('tabel');
// Route::get('/bukutamu', [bukutamuController::class, 'bukutamu'])->name('bukutamu');

Route::get('/login2', [AuthController::class, 'login2'])->name('login2');
Route::get('/dashboard2', [AdminController::class, 'index'])->name('dashboard2');
Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/tambahproducts', [ProductController::class, 'tambahProduk'])->name('tambah.product');
Route::post('/products', [ProductController::class, 'store'])->name('store.product');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::put('/products/edit/{id}', [ProductController::class, 'update'])->name('update.product');
Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('delete.product');
Route::get('/customers', [AdminController::class, 'customers'])->name('customers');