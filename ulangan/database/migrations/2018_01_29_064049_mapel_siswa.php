<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MapelSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_siswa');
            $table->unsignedInteger('id_mapel');
            $table->foreign('id_siswa')->references('id')->on('siswa')->onDelete('CASCADE');
            $table->foreign('id_mapel')->references('id')->on('matapelajaran')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapel_siswa');
    }
}
