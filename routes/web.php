<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PsikoedukasiController;
use App\Http\Controllers\RelaksasiController;
use App\Http\Controllers\RestrukturisasiController;
use App\Http\Controllers\TerapiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [AuthController::class, 'indexLogin']);

// AUTH ROUTE
Route::get('login', [AuthController::class, 'indexLogin'])->name('login');
Route::get('register', [AuthController::class, 'indexRegister']);
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth', 'cekrole:admin']], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('user', UserController::class);
    Route::resource('dokumen', DocumentController::class);
    Route::resource('psikoedukasi', PsikoedukasiController::class);
    Route::resource('relaksasi', RelaksasiController::class);
    Route::resource('restrukturisasi', RestrukturisasiController::class);
    Route::resource('terapi', TerapiController::class);
});

Route::get('404', function () {
    return view('pages.404');
});
