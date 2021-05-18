<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonasiController;
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

Route::get('/', function () {
    return redirect('login');
});
Route::get('/tentang', function() {
    return view('tentang');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Donasi
Route::get('/donasi', [App\Http\Controllers\DonasiController::class, 'donasi'])->name('donasis');
Route::post('/donasi/tambah', [App\Http\Controllers\DonasiController::class, 'tambahdonasi']);
Route::get('/profil/detail_profil', [App\Http\Controllers\DonasiController::class, 'detail_profil'])->name('detailprofil');
Route::get('/profil/edit_profil', [App\Http\Controllers\DonasiController::class, 'edit_profil']);
Route::post('/profil/edit_profil/update', [App\Http\Controllers\DonasiController::class, 'update_profil']);

Route::group(['middleware' => 'admin'], function () {
    //Donatur Edit
    Route::get('/donatur_verifikasi', [App\Http\Controllers\DonasiController::class, 'donatur'])->name('donaturs');
    Route::get('/donatur_verifikasi/hapus/{id_donatur}', [DonasiController::class,'hapus']);
    Route::post('/donatur_verifikasi/update/{id_donatur}', [DonasiController::class,'update']);
    Route::get('/donatur_verifikasi/ubah/{id_donatur}', [DonasiController::class,'ubah']);
});
