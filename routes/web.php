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

// Route::get('/', 'HomeController@home')->name('home');
//Route::get('/layanan', 'LayananController@layanan');



Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
// Route::get('/layanan', [layananController::class, 'index']);


// ini route layanan
Route::get('/manage/layanan', [layananController::class, 'index'])->name('manage.layanan');
Route::get('/layanan/create', [layananController::class, 'create'])->name('layanan.create');
Route::post('/layanan/store', [layananController::class, 'store'])->name('layanan.store');
Route::get('/layanan/edit/{id}', [layananController::class, 'edit'])->name('layanan.edit');
Route::post('/layanan/update/{id}', [layananController::class, 'update'])->name('layanan.update');
Route::get('/layanan/delete/{id}', [layananController::class, 'destroy'])->name('layanan.delete');
Route::get('/layanan/detail/{id}', [layananController::class, 'show'])->name('layanan.detail');


// Route::get('/status_pesanan', [StatusPesananController::class, 'index']);


Route::get('/kreasi', [KreasiController::class, 'index']);
Route::get('/notifikasi', [NotifikasiController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);

// Route::get('/manage/layananuser', [LayananController::Class, 'index'])->name('manage.layananuser');





// Route::get('/login', 'UserController@halamanLogin')->name('login');
// Route::post('/postlogin', 'UserController@postLogin')->name('postlogin');

// Route::get('/signup', 'UserController@halamanSignup')->name('signup');
// Route::post('/postsignup', 'UserController@postsignup')->name('postsignup');

// Route::get('/homeuser', 'UserController@halamanuser');

// Route::get('/logout', 'UserController@logout')->name('logout');




// Route::get('/login', function() {
//     return view('/layouts/login');
// });

// Route::post('/postlogin', 'UserController@postlogin')->name('postlogin');




Route::prefix('admin')->group(function(){
    Route::get('/', [Admin\Auth\LoginController::class, 'loginform']);
    Route::get('/login', [Admin\Auth\LoginController::class, 'loginform'])->name('admin.login');
    Route::post('/login', [Admin\Auth\LoginController::class, 'login'])->name('admin.login');
    Route::get('/home', [Admin\HomeController::class, 'index'])->name('admin.home');
    Route::get('/logout', [Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');

    
});



// Route::get('/hometest', function(){
//     return 'HOME';
// })->name('home');