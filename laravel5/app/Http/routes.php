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

Route::get('Pengguna', 'PenggunaController@awal');
Route::get('Pengguna/tambah', 'PenggunaController@tambah');
Route::get('Dosen', 'DosenController@awal');
Route::get('Dosen/tambah', 'DosenController@tambah');
Route::get('Mahasiswa', 'MahasiswaController@awal');
Route::get('Mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('Ruangan', 'RuanganController@awal');
Route::get('Ruangan/tambah', 'RuanganController@tambah');

Route::get('Matakuliah', 'MatakuliahController@awal');
Route::get('Matakuliah/tambah', 'MatakuliahController@tambah');

Route::get('Dosen_matakuliah', 'Dosen_matakuliahController@awal');
Route::get('Dosen_matakuliah/tambah', 'Dosen_matakuliahController@tambah');

Route::get('Jadwal_matakuliah', 'Jadwal_matakuliahController@awal');
Route::get('Jadwal_matakuliah/tambah', 'Jadwal_matakuliahController@tambah');