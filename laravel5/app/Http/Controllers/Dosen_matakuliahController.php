<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen_matakuliah;

class Dosen_matakuliahController extends Controller
{
     public function awal(){
    	return "Hello dari Dosen matakuliahController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen_matakuliah = new Dosen_matakuliah();
    	$dosen_matakuliah->dosen_id = 1;
    	$dosen_matakuliah->matakuliah_id = 1;
    	$dosen_matakuliah->save();
    	return "Data Dosen Matakuliah dengan id Dosen {$dosen_matakuliah->dosen_id} telah disimpan";
    }
    public function Dos_mat()
        {
        $mahasiswa = dosen_matakuliah::all(); //variable mahasiswa sebagai menampung semua data dari tabel dosen_matakuliah
        foreach ($mahasiswa as $mhs) { //foreach untuk menampilkan semua data yang ada dari tabel dosen_matakuliah
        echo "Nama Dosen: ".$mhs->dosen->nama; // Menampilkan nama dosen dan nip dosen dari tabel dosen yang terelasi dengan tabel Dosen_matakuliah
        echo "<br>";
        echo "NIP: ".$mhs->dosen->nip; 
        echo "<br>";
        echo "Mengajar pada Matakuliah: ".$mhs->matakuliah->title; // Menampilkan title matakuliah dari tabel matakuliah yg terelasi dengan tabel Dosen_matakuliah
        echo "<br>";
        echo "<br>";
        }

    }

}