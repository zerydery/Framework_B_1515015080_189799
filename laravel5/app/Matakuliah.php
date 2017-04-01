<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'Matakuliah';
    protected $fillable = ['title','keterangan'];

    public function Dosen_matakuliah()
    {
	return $this->HasMany(Dosen_Matakuliah::class);//Berelasi dengan model dosen_matakuliah
	}	
}

