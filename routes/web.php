<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\daftarController;

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


// Route::view('/daftar_anggota',('.pendaftaran'));
Route::view('/',('welcome'));
Route::view('/admin',('halaman_login'));
Route::resource('home',daftarController::class);
 //Route::get('/produk',[produkController::class,'produk']);
// Route::get('provinces', [DependentDropdownController::class,'provinces'])->name('provinces');
// Route::get('cities', [DependentDropdownController::class, 'cities'])->name('cities');
// Route::get('districts', [DependentDropdownController::class, 'districts'])->name('districts');
// Route::get('villages', [DependentDropdownController::class, 'villages'])->name('villages');

Route::get('home/create',[daftarController::class, 'indexP']);
Route::post('/getkabupaten',[daftarController::class, 'kabupaten'])->name('getkabupaten');

