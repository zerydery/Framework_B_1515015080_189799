<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'Matakuliah';
    protected $fillable = ['title','keterangan'];
    protected $guarded=['id'];


    public function Dosen_matakuliah()
    {
	return $this->HasMany(Dosen_Matakuliah::class);//Berelasi dengan model dosen_matakuliah
	}	
	public function getUsernameAttribute(){
    	return $this->pengguna->username;
    }

    public function listMahasiswaDanNim(){
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
    return $out;
    }
}

