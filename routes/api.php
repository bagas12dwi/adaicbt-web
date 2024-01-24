<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DocumentController;
use App\Http\Controllers\Api\PrivilegeController;
use App\Http\Controllers\Api\Psikoedukasi;
use App\Http\Controllers\Api\RelaksasiController;
use App\Http\Controllers\Api\RestrukturisasiController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\TerapiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/task', [TaskController::class, 'index']);
Route::get('document', [DocumentController::class, 'getAllDocument']);
Route::post('privilege', [PrivilegeController::class, 'cekPrivilege']);
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('psikoedukasi', [Psikoedukasi::class, 'store']);
Route::post('relaksasi', [RelaksasiController::class, 'store']);
Route::post('restrukturisasi', [RestrukturisasiController::class, 'store']);
Route::post('terapi', [TerapiController::class, 'store']);
Route::get('getDetail/{id}', [AuthController::class, 'getDetail']);
