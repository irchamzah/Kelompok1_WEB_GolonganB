<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controllers\HomeController;
use App\Https\Controllers\UserController;

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

Route::get('/', 'App\Http\Controllers\HomeController@home')->name('home');

Route::get('/layanan', 'App\Http\Controllers\LayananController@layanan');


Route::get('/status_pesanan', 'App\Http\Controllers\StatusPesananController@status_pesanan');

Route::get('/kreasi', 'App\Http\Controllers\KreasiController@kreasi');

Route::get('/notifikasi', 'App\Http\Controllers\NotifikasiController@notifikasi');

Route::get('/profil', 'App\Http\Controllers\ProfilController@profil');


// Route::get('/login', function() {
//     return view('/layouts/login');
// });

// Route::post('/postlogin', 'App\Http\Controllers\UserController@postlogin')->name('postlogin');

Route::get('/login', 'App\Http\Controllers\UserController@halamanLogin')->name('login');
Route::post('/postlogin', 'App\Http\Controllers\UserController@postLogin')->name('postlogin');

Route::get('/signup', 'App\Http\Controllers\UserController@halamanSignup')->name('signup');
Route::post('/postsignup', 'App\Http\Controllers\UserController@postsignup')->name('postsignup');

Route::get('/homeuser', 'App\Http\Controllers\UserController@halamanuser');

Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');



// Route::get('/hometest', function(){
//     return 'HOME';
// })->name('home');