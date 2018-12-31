<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetailGaji extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_gaji', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_gaji');
            $table->foreign('id_gaji')->references('id')->on('gaji');
            $table->string('daftar_gaji');
            $table->string('deskripsi_gaji');
            $table->decimal('jumlah');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
