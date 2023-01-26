<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registenant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pemilik_usaha', 255);
            $table->string('email', 255);
            $table->bigInteger('no_telp');
            $table->string('jenis_tenant', 255);
            $table->string('jenis_bidang_usaha', 255);
            $table->string('nama_usaha', 255);
            $table->text('deskripsi');
            $table->string('ktp', 255);
            $table->string('cv', 255);
            $table->string('proposal_bisnis', 255);
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
        Schema::dropIfExists('registenant');
    }
};
