<?php

use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;

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


// Rute untuk daftar barang
Route::get('/surat', [SuratController::class, 'index'])->name('surat.index');

// Rute untuk menampilkan form tambah barang
Route::get('/surat/create', [SuratController::class, 'create'])->name('surat.create');

// Rute untuk menyimpan barang baru
Route::post('/surat', [SuratController::class, 'store'])->name('surat.store');
