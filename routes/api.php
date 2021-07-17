<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [App\Http\Controllers\Api\UserController::class, 'login']);
Route::post('register', [App\Http\Controllers\Api\UserController::class, 'register']);

Route::get('kreasi', [App\Http\Controllers\Api\KreasiController::class, 'index']);

Route::get('notifikasi', [App\Http\Controllers\Api\NotifikasiController::class, 'show']);
Route::get('notifikasi/user/{id}', [App\Http\Controllers\Api\NotifikasiController::class, 'test']);

Route::post('layanan/pesan/{id}', [App\Http\Controllers\Api\LayananController::class, 'pesan']);
