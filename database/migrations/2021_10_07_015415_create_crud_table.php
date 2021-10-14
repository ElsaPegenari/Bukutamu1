<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crud', function (Blueprint $table) {
            $table->id();
            $table->string('no_identitas');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('instansi');
            $table->string('nama_instansi');
            $table->string('no_tlpn');
            $table->string('jenis_keperluan');
            $table->string('bidang');
            $table->string('jumlah_pengunjung');
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
        Schema::dropIfExists('crud');
    }
}
