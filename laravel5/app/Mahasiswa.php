<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $guarded = ['id'];
    protected $fillable = ['nama','nim','alamat','pengguna_id'];
    public function Pengguna()
    {
    	return $this->belongsTo(Pengguna::class);//Terelasi dengan model pengguna
    }

    public function jadwal_mahasiswa()
	{
	return  $this->hasMany(Jadwal_matakuliah::class); //Berelasi one to Many dari Mahasiswa (one) ke Jadwal matakuliah (many)
	}

 public function getUsernameAttribute()
    {
        return $this->pengguna->username;
    }

    public function listMahasiswaDanNim()
    {
    $out = [];
    foreach ($this->all() as $mhs) {
        $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
    }
    return $out;
    }       
}

