<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('id',10);
			$table->string('nama',40);
			$table->string('jk',15);
			$table->string('tempat_lahir',25);
			$table->date('tang_lahir');
			$table->text('alamat');
			$table->integer('pengguna_id',false,true);
			$table->foreign('pengguna_id')->references('id')->on('pengguna');
			$table->integer('kd_jab',false,true);
			$table->foreign('kd_jab')->references('id_jab')->on('jabatan');
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
        Schema::dropIfExists('anggota');
    }
}
