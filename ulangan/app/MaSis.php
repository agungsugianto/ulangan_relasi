<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaSis extends Model
{
    protected $table='mapel_siswa';
    protected $fillable= array('id_siswa','id_mapel');

    public function mapel()
    {
    	return $this->belongsTo('App\Mapel','id_mapel');
    }

    public function siswa()
    {
    	return $this->belongsTo('App\Siswa','id_siswa');
    }
}
