<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah', 'PenggunaController@tambah');

Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah1', 'PenggunaController@tambah1');

Route::get('mahasiswa', 'MahasiswaController@awal');
Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah', 'PenggunaController@tambah');

Route::get('dosen', 'DosenController@awal');
Route::get('dosen/tambah', 'DosenController@tambah');

Route::get('ruangan', 'RuanganController@awal');
Route::get('ruangan/tambah', 'RuanganController@tambah');

Route::get('matakuliah', 'MatakuliahController@awal');
Route::get('matakuliah/tambah', 'MatakuliahController@tambah');

Route::get('dosen_matakuliah', 'DosenMatakuliahController@awal');
Route::get('dosen_matakuliah/tambah', 'DosenMatakuliahController@tambah');

Route::get('jadwa_matakuliah', 'JadwaMatakuliahController@awal');
Route::get('jadwa_matakuliah/tambah', 'JadwaMatakuliahController@tambah');