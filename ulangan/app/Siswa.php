<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa' ;
    protected $fillable = array('nama', 'nis','id_guru','id_kelas');
   
    public function guru()
    {
    	return $this->belongsTo('App\Guru','id_guru');
    }

    public function kelas()
    {
    	return $this->belongsTo('App\Kelas','id_kelas');
    }

    public function wali()
    {
    	return $this->hasMany('App\Wali','id_siswa')
    }

    public function masis($value='')
    {
        return $this->hasOne('App\Masis','id_siswa')
    }
    
}
