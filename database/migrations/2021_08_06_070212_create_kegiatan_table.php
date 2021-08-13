<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('hari_mg');
            $table->time('jam_mg');
            $table->date('tgl_mg');
            $table->string('tema_mg');
            $table->string('penceramah_mg');
            $table->time('jam_bln');
            $table->string('hari_bln');
            $table->date('tgl_bln');
            $table->string('tema_bln');
            $table->string('penceramah_bln');
            $table->unsignedBigInteger('id_masjid');
            $table->foreign('id_masjid')->references('id')->on('masjid')->onDelete('cascade');
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
        Schema::dropIfExists('kegiatan');
    }
}
