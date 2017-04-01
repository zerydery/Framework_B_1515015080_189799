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
Route::get('mahasiswa_pengguna','MahasiswaController@mahasiswa');
Route::get('dosen_pengguna','DosenController@dosen');
Route::get('DosenMatakuliah','Dosen_matakuliahController@Dos_mat');
Route::get('Jadwal','Jadwal_matakuliahController@jadual');

Route::get('/', function () {
    return view('welcome');
});

Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah', 'PenggunaController@tambah');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('Dosen', 'DosenController@awal');
Route::get('Dosen/tambah', 'DosenController@tambah');
Route::get('Mahasiswa', 'MahasiswaController@awal');
Route::get('Mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('ruangan', 'ruangancontroller@awal');
Route::get('ruangan/tambah', 'ruangancontroller@tambah');
Route::get('ruangan/{ruangan}','ruangancontroller@lihat');
Route::post('ruangan/simpan','ruangancontroller@simpan');
Route::get('ruangan/edit/{ruangan}','ruangancontroller@edit');
Route::post('ruangan/edit/{ruangan}','ruangancontroller@update');
Route::get('ruangan/hapus/{ruangan}','ruangancontroller@hapus');

Route::get('matakuliah', 'matakuliahcontroller@awal');
Route::get('matakuliah/tambah', 'matakuliahcontroller@tambah');
Route::get('matakuliah/{matakuliah}','matakuliahcontroller@lihat');
Route::post('matakuliah/simpan','matakuliahcontroller@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahcontroller@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahcontroller@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahcontroller@hapus');

Route::get('Dosen_matakuliah', 'Dosen_matakuliahController@awal');
Route::get('Dosen_matakuliah/tambah', 'Dosen_matakuliahController@tambah');

Route::get('Jadwal_matakuliah', 'Jadwal_matakuliahController@awal');
Route::get('Jadwal_matakuliah/tambah', 'Jadwal_matakuliahController@tambah');

