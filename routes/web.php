<?php

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

Route::get('/', function () {
    return view('login');
});
Auth::routes();

Route::group(['middleware' => ['auth']], function() {

Route::get('/dashboard', function(){
    return view('dashboard.dashboard');
});

Route::resource('jabatan', 'JabatanController');

Route::resource('karyawan', 'KaryawanController');

Route::resource('kategori', 'KategoriController');

Route::resource('user', 'UserController');

Route::resource('event', 'EventController');

Route::resource('panitia', 'PanitiaController');

Route::resource('absensi', 'AbsensiController');

Route::resource('pelanggan', 'PelangganController');


Route::get('userlist', 'EventController@userlist')->name('user-list');

});

