<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table='guru';
    protected $fillable= array('nama', 'nik','alamat','mata_pelajaran');

    public function siswa()
    {
    	return $this->hasOne('App\Siswa','id_guru')
    }

}
