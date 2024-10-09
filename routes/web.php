<?php

use App\Http\Controllers\SuratController;
use App\Models\Surat;
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


// Rute untuk daftar surat
Route::get('/surat', [SuratController::class, 'index'])->name('surat.index');
// Rute untuk menampilkan form tambah surat
Route::get('/surat/create', [SuratController::class, 'create'])->name('surat.create');
Route::post("/surat",[SuratController::class, 'store'])->name('surat.store');
Route::get('/surat/{surat}',[SuratController::class, 'edit'])->name('surat.edit');
Route::put('surat/{surat}', [SuratController::class, 'update'])->name('surat.update');
Route::delete('surat/{surat}', [SuratController::class, 'destroy'])->name('surat.destroy');
//Route::resource('surat', SuratController::class);
