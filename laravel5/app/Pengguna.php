<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'Pengguna';
    protected $guarded = ['id']; 
    protected $fillable = ['username','password'];
    public function mahasiswa()
    {
    	return $this->hasOne(Mahasiswa::class); //Berelasi dengan model mahasiswa
    }
    public function peran()
    {
    	return $this->belongsToMany(Peran::class); //Terelasi dengan model peran
    }
    public function dosen()
    {
    	return $this->hasOne(Dosen::class); //Berelasi dengan model dosen
    }
}
