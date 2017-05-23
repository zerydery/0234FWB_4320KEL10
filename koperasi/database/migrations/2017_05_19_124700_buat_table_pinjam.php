<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('anggota_id',false,true);
			$table->foreign('anggota_id')->references('id')->on('anggota');
			$table->integer('pengelola_id',false,true);
			$table->foreign('pengelola_id')->references('id')->on('pengelola');
			$table->integer('jumlah');
			$table->integer('kali_angsur');
			$table->integer('angsur');
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
        Schema::dropIfExists('pinjam');
    }
}
