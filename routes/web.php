<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('adminMenu');
// });

Route::get('/form_user', 'App\Http\Controllers\UserController@index');
Route::get('/tambah_user', 'App\Http\Controllers\UserController@tambah');
Route::post('/simpan_user', 'App\Http\Controllers\UserController@simpan'); 
Route::get('/edit_user/{id}', 'App\Http\Controllers\UserController@edit');
Route::post('/update_user/{id}', 'App\Http\Controllers\UserController@update');
Route::get('/hapus_user/{id}', 'App\Http\Controllers\UserController@hapus');

Route::get('/form_barang', 'App\Http\Controllers\BarangController@index');
Route::get('/tambah_barang', 'App\Http\Controllers\BarangController@tambah');
Route::post('/simpan_barang', 'App\Http\Controllers\BarangController@simpan'); 
Route::get('/edit_barang/{id}', 'App\Http\Controllers\BarangController@edit');
Route::post('/update_barang/{id}', 'App\Http\Controllers\BarangController@update');
Route::get('/hapus_barang/{id}', 'App\Http\Controllers\BarangController@hapus');

Route::get('/form_member', 'App\Http\Controllers\MemberController@index');
Route::get('/tambah_member', 'App\Http\Controllers\MemberController@tambah');
Route::post('/simpan_member', 'App\Http\Controllers\MemberController@simpan'); 
Route::get('/edit_member/{id}', 'App\Http\Controllers\MemberController@edit');
Route::post('/update_member/{id}', 'App\Http\Controllers\MemberController@update');
Route::get('/hapus_member/{id}', 'App\Http\Controllers\MemberController@hapus');

Route::get('/data_transaksi', 'App\Http\Controllers\MemberController@index');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cetakpdf', [App\Http\Controllers\UserController::class, 'cetakpdf']);
Route::get('/cetakpdf', [App\Http\Controllers\BarangController::class, 'cetakpdf']);