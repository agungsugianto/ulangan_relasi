<?php

use Illuminate\Database\Seeder;
use App\Guru;
use App\Kelas;
use App\Mapel;
use App\Masis;
use App\Siswa;

class SeederRelasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guru')->delete();
        DB::table('kelas')->delete();
        DB::table('matapelajaran')->delete();
        DB::table('wali')->delete();
        DB::table('mapel_siswa')->delete()

    }
}
