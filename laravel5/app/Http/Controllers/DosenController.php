<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
     public function awal(){
    	return "Hello dari DosenController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new Dosen();
    	$dosen->nama = "Andre Prasetya Rahman";
    	$dosen->nip = "1515015080";
    	$dosen->alamat = "Perjuangan 07";
    	$dosen->pengguna_id = 3;
    	$dosen->save();
    	return "Data Dosen dengan Nama {$dosen->nama} telah disimpan";
    }

        public function Dosen()
        {
        $mahasiswa = dosen::all(); //variable mahasiswa sebagai menampung semua data dari tabel dosen
        foreach ($mahasiswa as $mhs) { //foreach untuk menampilkan semua data yang ada dari tabel dosen
        echo "Nama: ".$mhs->nama;
        echo "<br>";
        echo "NIP: ".$mhs->nip;
        echo "<br>";
        echo "Alamat: ".$mhs->alamat;
        echo "<br>";
        echo "Dibuat Oleh: ".$mhs->pengguna->username; //Menampilkan data dari tabel pengguna yang telah terelasi dengan dosen
        echo "<br>";
        echo "<br>";
        }

    }
}
