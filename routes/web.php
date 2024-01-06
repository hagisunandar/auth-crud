<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\ProdiController;
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

Route::resource('dosen', DosenController::class);
// Route::get('/dosen',[DosenController::class,'index'])->name('dosen.index');
Route::get('/dosen',[DosenController::class,'index'])->name('dosen.index');
Route::post('/create',[DosenController::class, 'create'])->name('dosen.create');
Route::get('/edit/{id}',[DosenController::class,'edit'])->name('dosen.edit');
Route::put('/update/{id}',[DosenController::class,'update'])->name('dosen.update');
Route::get('/search', [DosenController::class,'search'])->name('dosen.search');
Route::delete('/destroy/{id}',[DosenController::class,'destroy'])->name('dosen.destroy');
// Route::delete('/destroy/{id}',[DosenController::class,'destroy'])->name('dosen.destroy')->middleware('auth');


Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/mahasiswa',[MahasiswaController::class,'index'])->name('mahasiswa.index');
Route::post('/create',[MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::get('/edit/{id}',[MahasiswaController::class,'edit'])->name('mahasiswa.edit');
Route::put('/update/{id}',[MahasiswaController::class,'update'])->name('mahasiswa.update');
Route::get('/search', [MahasiswaController::class,'search'])->name('mahasiswa.search');
Route::delete('/destroy/{id}',[MahasiswaController::class,'destroy'])->name('mahasiswa.destroy');

Route::resource('matkul', MatkulController::class);
Route::get('/matkul',[MatkulController::class,'index'])->name('matkul.index');
Route::post('/create',[MatkulController::class, 'create'])->name('matkul.create');
Route::get('/edit/{id}',[MatkulController::class,'edit'])->name('matkul.edit');
Route::put('/update/{id}',[MatkulController::class,'update'])->name('matkul.update');
Route::get('/search', [MatkulController::class,'search'])->name('matkul.search');
Route::delete('/destroy/{id}',[MatkulController::class,'destroy'])->name('matkul.destroy');

Route::resource('matkul', MatkulController::class);
Route::get('/matkul',[MatkulController::class,'index'])->name('matkul.index');
Route::post('/create',[MatkulController::class, 'create'])->name('matkul.create');
Route::get('/edit/{id}',[MatkulController::class,'edit'])->name('matkul.edit');
Route::put('/update/{id}',[MatkulController::class,'update'])->name('matkul.update');
Route::get('/search', [MatkulController::class,'search'])->name('matkul.search');
Route::delete('/destroy/{id}',[MatkulController::class,'destroy'])->name('matkul.destroy');

Route::resource('prodi', ProdiController::class);
Route::get('/prodi',[ProdiController::class,'index'])->name('prodi.index');
Route::post('/create',[ProdiController::class, 'create'])->name('prodi.create');
Route::get('/edit/{id}',[ProdiController::class,'edit'])->name('prodi.edit');
Route::put('/update/{id}',[ProdiController::class,'update'])->name('prodi.update');
Route::get('/search', [ProdiController::class,'search'])->name('prodi.search');
Route::delete('/destroy/{id}',[ProdiController::class,'destroy'])->name('prodi.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
