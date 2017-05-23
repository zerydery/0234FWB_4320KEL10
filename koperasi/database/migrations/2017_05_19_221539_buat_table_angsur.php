<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableAngsur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angsur', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('pinjam_id',false,true);
			$table->foreign('pinjam_id')->references('id')->on('pinjam');
			$table->integer('pengelola_id',false,true);
			$table->foreign('pengelola_id')->references('id')->on('pengelola');
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
        Schema::dropIfExists('angsur');
    }
}
