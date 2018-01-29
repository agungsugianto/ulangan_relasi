<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Walis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('wali', function($table) {
            $table->unsignedInteger('id_siswa')->after('alamat')->nullable();
            $table->foreign('id_siswa')->references('id')->on('siswa')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('mahasiswa', function($table) {
            $table->dropColumn('id_siswa');
        });
    }
}
