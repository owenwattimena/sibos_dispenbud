<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dinas\SekolahController;
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
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'doLogin'])->name('login.do');
});

Route::get('/', function(){
    return redirect()->route('dashboard');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dinas.dashboard.index');
    })->name('dashboard');

    Route::get('sekolah', [SekolahController::class, 'index'])->name('sekolah');
    Route::get('sekolah/tambah', [SekolahController::class, 'create'])->name('sekolah.tambah');
    Route::post('sekolah/tambah', [SekolahController::class, 'save'])->name('sekolah.simpan');
});
