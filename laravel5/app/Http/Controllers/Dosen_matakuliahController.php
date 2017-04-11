<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen_matakuliah;
use App\Matakuliah;
use App\Dosen;

class Dosen_matakuliahController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';

    public function awal()
    {
        $semuaDosen_matakuliah = Dosen_matakuliah::all();
        return view('dosen_matakuliah.awal',compact('semuaDosen_matakuliah'));
    }
    

    public function tambah()
    {
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('dosen_matakuliah.tambah',compact('dosen','matakuliah'));
    }


    public function simpan(Request $input)
    {
        $dosen_matakuliah = new Dosen_matakuliah($input->only('dosen_id','matakuliah_id'));

        if ($dosen_matakuliah->save()) $this->informasi = "Jadwal Dosen berhasil disimpan";

        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }


    public function lihat($id)
    {
        $dosen_matakuliah = Dosen_matakuliah::find($id);
        return view('dosen_matakuliah.lihat',compact('dosen_matakuliah'));
    }   


    public function edit($id)
    {
        $dosen_matakuliah = Dosen_matakuliah::find($id);
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('dosen_matakuliah.edit',compact('dosen','matakuliah','dosen_matakuliah'));
    }


    public function update($id, Request $input)
    {

        $dosen_matakuliah = Dosen_matakuliah::find($id);
        $dosen_matakuliah->fill($input->only('dosen_id','matakuliah_id'));

         if($dosen_matakuliah->save()) $this->informasi = 'Jadwal Dosen berhasil diperbaharui';
        
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]); 
    }


    public function hapus($id, Request $input)
    {
        $dosen_matakuliah = Dosen_matakuliah::find($id);

            if($dosen_matakuliah->delete()) $this->informasi = 'Jadwal Dosen berhasil dihapus';
            return redirect('dosen_matakuliah')-> with(['informasi'=>$this->informasi]);
        
    } 
    //  public function awal(){
    // 	return "Hello dari Dosen matakuliahController";
    // }
    // public function tambah(){
    // 	return $this->simpan();
    // }
    // public function simpan(){
    // 	$dosen_matakuliah = new Dosen_matakuliah();
    // 	$dosen_matakuliah->dosen_id = 1;
    // 	$dosen_matakuliah->matakuliah_id = 1;
    // 	$dosen_matakuliah->save();
    // 	return "Data Dosen Matakuliah dengan id Dosen {$dosen_matakuliah->dosen_id} telah disimpan";
    // }
    // public function Dos_mat()
    //     {
    //     $mahasiswa = dosen_matakuliah::all(); //variable mahasiswa sebagai menampung semua data dari tabel dosen_matakuliah
    //     foreach ($mahasiswa as $mhs) { //foreach untuk menampilkan semua data yang ada dari tabel dosen_matakuliah
    //     echo "Nama Dosen: ".$mhs->dosen->nama; // Menampilkan nama dosen dan nip dosen dari tabel dosen yang terelasi dengan tabel Dosen_matakuliah
    //     echo "<br>";
    //     echo "NIP: ".$mhs->dosen->nip; 
    //     echo "<br>";
    //     echo "Mengajar pada Matakuliah: ".$mhs->matakuliah->title; // Menampilkan title matakuliah dari tabel matakuliah yg terelasi dengan tabel Dosen_matakuliah
    //     echo "<br>";
    //     echo "<br>";
    //     }

    // }

}