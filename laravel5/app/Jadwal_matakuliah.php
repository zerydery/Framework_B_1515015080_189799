<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_matakuliah extends Model
{
    protected $table = 'Jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
}
