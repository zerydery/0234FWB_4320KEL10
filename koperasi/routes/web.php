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
    return view('welcome');
});
Route::get('/login2','SesiController@form');
Route::post('/login2','SesiController@validasi');
Route::get('/logout','SesiController@logout');

Route::group(['middleware'=>'AutentifikasiUser'],function()
{
Route::get('/master','SesiController@index');
Route::get('/master2','SesiController@index2');
Route::get('/register','AnggotaController@tambah');
Route::post('anggota/simpan','AnggotaController@simpan');

Route::get('/simpanan','simpanController@tambah');
Route::get('/pinjaman','pinjamController@tambah');
Route::get('/angsuran','angsurController@tambah');
Route::get('/laporan','laporanController@tambah');

Route::get('/simpananawal','simpanController@awal');
Route::get('/pinjamanawal','pinjamController@awal');
Route::get('/angsuranawal','angsurController@awal');
Route::get('/laporanawal','laporanController@awal');

Route::get('/simpananawalang','simpanController@awalang');
Route::get('/pinjamanawalang','pinjamController@awalang');
Route::get('/angsuranawalang/{angsuran}','angsurController@awalang');

Route::get('/simpan/hapus/{simpan}','simpanController@hapus');
//Route::get('/angsuran/bayar/{pinjam}','angsurController@simpan');

Route::post('anggota/simpanan','simpanController@simpan');
Route::post('anggota/pinjaman','pinjamController@pinjam');
Route::post('anggota/angsuran','angsurController@simpan');
Route::post('anggota/laporan','laporanController@simpan');


Route::get('/home', 'HomeController@index')->name('home');
});
