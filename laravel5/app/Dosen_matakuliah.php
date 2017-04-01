<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_matakuliah extends Model
{
    protected $table = 'Dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function dosen()
    {
	return $this->BelongsTo(Dosen::class); //Teralasi dengan model dosen
	}	

	public function matakuliah()
	{
	return $this->BelongsTo(Matakuliah::class); //Terelasi dengan model matakuliah
	//return $this->belongsTo('App\Matakuliah', 'id');
	}

	public function jadwal_matakuliah()
	{
	return $this->HasMany(Jadwal_matakuliah::class);//Berelasi dengan model jadwal_matakuliah
	}
}

