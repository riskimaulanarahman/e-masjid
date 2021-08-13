<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id();
            $table->string('thn_kepengurusan', 15);
            $table->string('dewan_pembina', 100);
            $table->string('ketua', 50);
            $table->string('sekertaris', 50);
            $table->string('bendahara', 50);
            $table->string('seksi_ibadah', 50);
            $table->string('seksi_sarana', 50);
            $table->string('seksi_pembinawanita', 50);
            $table->string('seksi_pemuda', 50);
            $table->string('seksi_fadhukifayah', 50);
            $table->string('seksi_zakat', 50);
            $table->string('seksi_qurban', 50);
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
        Schema::dropIfExists('pengurus');
    }
}
