<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jadwal_matakuliah;

class Jadwal_matakuliahController extends Controller
{
     public function awal(){
    	return "Hello dari Jadwal_matakuliahController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$jadwal_matakuliah = new Jadwal_matakuliah();
    	$jadwal_matakuliah->mahasiswa_id = 1;
    	$jadwal_matakuliah->ruangan_id = 1;
    	$jadwal_matakuliah->dosen_matakuliah_id = 1;
    	$jadwal_matakuliah->save();
    	return "Data Jadwal matakuliah telah disimpan";
    }

    public function jadual()
        {
        $mahasiswa = jadwal_matakuliah::all(); //variable mahasiswa sebagai menampung semua data dari tabel jadwal_matakuliah
        foreach ($mahasiswa as $mhs) { //foreach untuk menampilkan semua data yang ada dari tabel jadwal_matakuliah
        echo "Nama Mahasiswa: ".$mhs->mahasiswa->nama; // Menampilkan nama mahasiswa dari tabel mahasiswa yang terelasi dengan tabel jadwal_matakuliah
        echo "<br>";
        echo "Nama Ruangan: ".$mhs->ruangan->title; // Menampilkan title ruangan dari tabel ruangan yang terelasi dengan tabel jadwal_matakuliah
        echo "<br>";
        echo "Nama Dosen: ".$mhs->dosen_matakuliah->dosen->nama; // Menampilkan nama Dosen dari tabel Dosen yg terelasi dengan tabel Dosen_matakuliah lalu terelasi dengan tabel Jadwal_matakuliah
        echo "<br>";
        echo "<br>";
        }

    }
}