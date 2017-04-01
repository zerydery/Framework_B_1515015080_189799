<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    //
    Protected $table='peran';
    public function pengguna()
    {
    	return $this->belongsToMany(Pengguna::class);//Terelasi dengan model pengguna
;    }
}
