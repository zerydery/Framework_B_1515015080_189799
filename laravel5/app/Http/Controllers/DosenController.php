<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;
use App\Pengguna;

class DosenController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';

    public function awal()
    {
        $semuaDosen = Dosen::all();
        return view('dosen.awal',compact('semuaDosen'));
    }


    public function tambah()
    {
        return view('dosen.tambah');
    }


     public function simpan(Request $input)
    {

    $pengguna = new Pengguna($input->only('username','password'));

    if ($pengguna->save()) {
    $dosen = new Dosen;
    $dosen->nama = $input->nama;
    $dosen->nip = $input->nip;
    $dosen->alamat = $input->alamat;

    if ($pengguna->dosen()->save($dosen)) $this->informasi = "Berhasil simpan data Dosen";
    }
    return redirect('dosen')-> with(['informasi'=>$this->informasi]);
    }


    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.edit')->with(array('dosen'=>$dosen));
    }

    public function lihat($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.lihat')->with(array('dosen'=>$dosen));
    }


   public function update($id, Request $input)
    {

    $dosen = Dosen::find($id);
    $dosen->nama = $input->nama;
    $dosen->nip = $input->nip;
    $dosen->alamat = $input->alamat;
    $dosen->save();

    if(!is_null($input->username)) {
        $pengguna = $dosen->pengguna->fill($input->only('username'));
    
    if(!empty($input->password)) $pengguna->password = $input->password;
    
    if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data Dosen';
    }

    else {
    $this->informasi = 'Berhasil perbaharui data Dosen';
    }

    return redirect('dosen')->with(['informasi'=> $this->informasi]);
    }


     public function hapus($id)
    {
        $dosen = Dosen::find($id);
        if($dosen->pengguna()->delete()){
            if($dosen->delete()) $this->informasi = 'Berhasil hapus data Dosen';
        }
            return redirect('dosen')-> with(['informasi'=>$this->informasi]);
        
    }
    //  public function awal(){
    // 	return "Hello dari DosenController";
    // }
    // public function tambah(){
    // 	return $this->simpan();
    // }
    // public function simpan(){
    // 	$dosen = new Dosen();
    // 	$dosen->nama = "Andre Prasetya Rahman";
    // 	$dosen->nip = "1515015080";
    // 	$dosen->alamat = "Perjuangan 07";
    // 	$dosen->pengguna_id = 3;
    // 	$dosen->save();
    // 	return "Data Dosen dengan Nama {$dosen->nama} telah disimpan";
    // }

    //     public function Dosen()
    //     {
    //     $mahasiswa = dosen::all(); //variable mahasiswa sebagai menampung semua data dari tabel dosen
    //     foreach ($mahasiswa as $mhs) { //foreach untuk menampilkan semua data yang ada dari tabel dosen
    //     echo "Nama: ".$mhs->nama;
    //     echo "<br>";
    //     echo "NIP: ".$mhs->nip;
    //     echo "<br>";
    //     echo "Alamat: ".$mhs->alamat;
    //     echo "<br>";
    //     echo "Dibuat Oleh: ".$mhs->pengguna->username; //Menampilkan data dari tabel pengguna yang telah terelasi dengan dosen
    //     echo "<br>";
    //     echo "<br>";
    //     }

    // }
}
