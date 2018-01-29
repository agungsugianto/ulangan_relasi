<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table='matapelajaran';
    protected $fillable = array('nama_mapel','kkm');

    public function Masis()
    {
    	return $this->hasOne('App\Masis','id_mapel')
    }
}
