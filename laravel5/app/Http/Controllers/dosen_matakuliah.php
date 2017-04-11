<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable=['dosen_id','matakuliah_id'];
public function jadwal_matakuliah()
{
	return $this->hasMany(Jadwal_Matakuliah::class,'jadwal_matakulia_id');
}
public function dosen()
{
	return $this->belongsTo(Dosen::class,'dosen_id');
}
public function mahasiswa()
{
	return $this->belongsTo(Mahasiswa::class,'mahasiswa_id');
}
public function matakuliah(){
	return $this->belongsTo(Matakuliah::class,'matakuliah_id');
    }
public function ListMahasiswaDanNim()
{
	$out=[];
	foreach ($this->all() as $mhs) {
		$out[$mhs->id]= "{$mhs->nama} ({$mhs->nim})";
	}
	return $out;
}
public function ListDosenDanMatakuliah()
{
	$out=[];
	foreach ($this as $dsnMtk) {
		$out[$dsnMtk->id]="{$dsnMtk->dosen->nama} ({matakuliah->title})";
	}
	return $out;
}
}
