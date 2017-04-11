<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'Dosen';
    protected $guarded = ['id'];
    protected $fillable = ['nama','nip','alamat','pengguna_id'];
    public function pengguna()
    {
    	return $this->belongsTo(Pengguna::class); //Terelasi dengan model pengguna
    }
    public function dosen_matakuliah()
    {
    	return $this->hasMany(dosen_matakuliah::class); //Berelasi pada Model dosen_matakuliah
    }

    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }

    public function listDosenDanNip()
    {
        $out = [];
        foreach ($this->all() as $dsn) {
            $out[$dsn->id] = "{$dsn->nama} ({$dsn->nip})";
        }
    return $out;
    }
}