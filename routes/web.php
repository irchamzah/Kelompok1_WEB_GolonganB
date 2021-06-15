<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin;

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

Route::get('/', 'HomeController@home')->name('home');

Route::get('/layanan', 'LayananController@layanan');


Route::get('/status_pesanan', 'StatusPesananController@status_pesanan');

Route::get('/kreasi', 'KreasiController@kreasi');

Route::get('/notifikasi', 'NotifikasiController@notifikasi');

Route::get('/profil', 'ProfilController@profil');


// Route::get('/login', function() {
//     return view('/layouts/login');
// });

// Route::post('/postlogin', 'UserController@postlogin')->name('postlogin');

Route::get('/login', 'UserController@halamanLogin')->name('login');
Route::post('/postlogin', 'UserController@postLogin')->name('postlogin');

Route::get('/signup', 'UserController@halamanSignup')->name('signup');
Route::post('/postsignup', 'UserController@postsignup')->name('postsignup');

Route::get('/homeuser', 'UserController@halamanuser');

Route::get('/logout', 'UserController@logout')->name('logout');

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