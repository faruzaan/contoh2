<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tugas', function (Blueprint $table) {
            $table->id('id_tugas');
            $table->string('id_dft_proses', 100);
            $table->string('id_produk', 100);
            $table->string('id_user', 100);
            $table->string('start', 100);
            $table->string('finish', 100);
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
        Schema::dropIfExists('tb_tugas');
    }
}
