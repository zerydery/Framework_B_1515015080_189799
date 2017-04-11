<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_matakuliah extends Model
{
    protected $table = 'Jadwal_matakuliah';
    protected $guarded = ['id'];
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

    public function mahasiswa()
    {
	return $this->belongsTo(Mahasiswa::class); //Terelasi dengan model mahasiswa
	}
	public function ruangan()
	{
	return $this->BelongsTo(Ruangan::class);//Terelasi dengan model ruangan
	}	
	public function dosen_matakuliah()
	{
	return $this->BelongsTo(Dosen_matakuliah::class);//Terelasi dengan model dosen_matakuliah
	}
}
