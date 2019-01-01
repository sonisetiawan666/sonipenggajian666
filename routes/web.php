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

Route::resource('pelanggan', 'PelangganController');


Route::get('userlist', 'EventController@userlist')->name('user-list');
Route::get('panitialist', 'EventController@panitialist')->name('panitia-list');
Route::get('event-detail/{id_event}', 'EventController@detailevent')->name('event-detail');
Route::post('panitiastore', 'EventController@storepanitia')->name('panitia-store');
Route::delete('panitia/{id}', 'EventController@destroypanitia')->name('panitia-destroy');

Route::get('date-event', 'EventController@dateevent')->name('event-date');




Route::get('data-absensi', 'EventController@dataabsensi')->name('absensi-data');
Route::post('absenstore', 'EventController@storeabsen')->name('absen-store');
Route::get('panitiaabsen', 'EventController@panitaabsen')->name('panitia-absen');
Route::post('detabsenstore/{id}', 'EventController@storedetabsen')->name('det-absen');
Route::get('det-panitiaabsen/{id}', 'EventController@detpanitaabsen')->name('detpanitia-absen');


Route::get('penggajian', 'PenggajianController@indexpenggajian')->name('penggajian-index');
Route::get('detail-gaji/{id}', 'PenggajianController@detailgaji')->name('detail-gaji');
Route::get('data-gaji', 'PenggajianController@datagaji')->name('gaji-data');
Route::post('gajistore', 'PenggajianController@storegaji')->name('gaji-store');

Route::post('detgajistore', 'PenggajianController@storedetgaji')->name('detgaji-store');
Route::get('det-gaji/{id}', 'PenggajianController@detgaji')->name('det-gaji');
Route::get('total_gaji/{id}', 'PenggajianController@totalgaji')->name('total-gaji');
Route::get('feegajidet', 'PenggajianController@feegajidetail')->name('fee-detail-gaji');


Route::get('absensi-karyawan', 'AbsensiController@absensiindex')->name('index.absensi');
Route::get('dataabsensi', 'AbsensiController@absensidata')->name('data.absensi');
Route::post('absenkarstore', 'AbsensiController@storeabsenkar')->name('absenkar-store');

Route::get('tglabsensi', 'AbsensiController@absensitanggal')->name('tanggal.absensi');
Route::post('storedetabsensi/{id}/{type}/{idd}', 'AbsensiController@detabsensistore')->name('store.detabsensi');
});

