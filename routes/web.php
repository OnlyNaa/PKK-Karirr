<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SesiController;
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
Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class,'index'])->name('login');
    Route::post('/', [SesiController::class,'login']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/home', function(){
        if (auth()->user()->role == 'admin') {
            return redirect()->route('admin');
        } elseif (auth()->user()->role == 'siswa') {
            return redirect()->route('dashboard');
            // Redirect ke halaman siswa jika diperlukan
        } elseif (auth()->user()->role == 'guru') {
            return redirect()->route('dashboard');
            // Redirect ke halaman guru jika diperlukan
        }
    });
});
Route::middleware(['auth', 'role:siswa'])->group(function(){
    Route::get('/dashboard', 'SesiController@siswa')->name('siswa');
});

Route::middleware(['auth'])->group(function(){
    // Route yang memerlukan autentikasi pengguna
    Route::get('/admin', 'SesiController@admin')->name('admin');
    Route::get('/guru', 'SesiController@guru')->name('guru');
    Route::get('/siswa', 'SesiController@siswa')->name('siswa');
    // Route::post('/logout', 'SesiController@logout', 'logout')->name('logout');
// Anda dapat menambahkan route lain yang memerlukan autentikasi di sini
});

Route::get('detail_status',[AdminController::class, 'detailStatus'])->name('detail.status');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/guru', [AdminController::class, 'guru'])->name('guru');
Route::get('/siswa', [AdminController::class, 'siswa'])->name('siswa');
Route::post('/logout', [SesiController::class, 'logout'])->name('logout');
// Route::post('/login', [SesiController::class, 'index'])->name('login');
Route::get('/login', [SesiController::class,'index'])->name('login');
Route::post('/login', [SesiController::class,'login']);
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
// Route::get('/siswa/dashboard', 'SesiController@siswa')->name('siswa');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// routes/web.php
// Route::get('/logout', 'SesiController@logout')->name('logout');
// Route::get('/logout',  'SesiController@logout')->name('logout');

// Route::get('/siswa', 'SiswaController@index')->name('siswa.index');
// Route::get('/siswa/create', 'SiswaController@create')->name('siswa.create');
// Route::post('/siswa/store', 'SiswaController@store')->name('siswa.store');
// Route::get('/siswa/{siswa}', 'SiswaController@show')->name('siswa.show');
// Route::get('/siswa/{siswa}/edit', 'SiswaController@edit')->name('siswa.edit');
// Route::put('/siswa/{siswa}', 'SiswaController@update')->name('siswa.update');
// Route::delete('/siswa/{siswa}', 'SiswaController@destroy')->name('siswa.destroy');







