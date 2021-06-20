<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\StatusPesananController;
use App\Http\Controllers\KreasiController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\StatusController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|z`
*/




Auth::routes();
Route::get('/',[WelcomeController::class, 'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

/////////////////////////////////////////// INI ROUTE USER
// ini route layanan User
Route::get('/layanan', [layananController::class, 'index']);
Route::get('/layanan/create/{id}', [layananController::class, 'create']);
Route::post('/layanan/store/{id}', [layananController::class, 'store']);
Route::get('/layanan/edit/{id}', [layananController::class, 'edit']);
Route::post('/layanan/update/{id}', [layananController::class, 'update']);
Route::get('/layanan/delete/{id}', [layananController::class, 'destroy']);
// Route::get('/layanan/detail/{id}', [layananController::class, 'show']);

// ini route kreasi User
Route::get('/kreasi', [KreasiController::class, 'index']);
Route::get('/kreasi/detail/{id}', [KreasiController::class, 'show']);

// ini route notifikasi User
Route::get('/notifikasi', [NotifikasiController::class, 'index']);

// ini route profil User
Route::get('/profil', [ProfilController::class, 'index']);
Route::post('/profil', [ProfilController::class, 'update']);


/////////////////////////////////////////// INI ROUTE ADMIN
Route::prefix('admin')->group(function(){
    Route::get('/', [Admin\Auth\LoginController::class, 'loginform']);
    Route::get('/login', [Admin\Auth\LoginController::class, 'loginform'])->name('admin.login');
    Route::post('/login', [Admin\Auth\LoginController::class, 'login'])->name('admin.login');
    Route::get('/logout', [Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');

    Route::get('/home', [Admin\HomeController::class, 'index'])->name('admin.home');

    Route::get('/manage/layanan', [Admin\LayananController::class, 'index'])->name('admin.manage.layanan');
    Route::get('/layanan/create', [Admin\LayananController::class, 'create'])->name('admin.layanan.create');
    Route::get('/layanan/store', [Admin\LayananController::class, 'store'])->name('admin.layanan.store');
    Route::get('/layanan/edit/{id}', [Admin\LayananController::class, 'edit'])->name('admin.layanan.edit');
    Route::get('/layanan/update/{id}', [Admin\LayananController::class, 'update'])->name('admin.layanan.update');
    Route::get('/layanan/delete/{id}', [Admin\LayananController::class, 'destroy'])->name('admin.layanan.delete');
    Route::get('/layanan/detail/{id}', [Admin\LayananController::class, 'show'])->name('admin.layanan.detail');

    Route::get('/kreasi', [Admin\KreasiController::class, 'index'])->name('admin.kreasi');

    Route::get('/notifikasi', [Admin\NotifikasiController::class, 'index'])->name('admin.notifikasi');

    Route::get('/profilAdmin', [Admin\ProfilAdminController::class, 'index'])->name('admin.profiladmin');

    Route::get('/profilUser', [Admin\ProfilUserController::class, 'index'])->name('admin.profiluser');
});
