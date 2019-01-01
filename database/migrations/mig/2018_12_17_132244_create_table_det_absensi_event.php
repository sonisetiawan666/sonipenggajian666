<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetAbsensiEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_absensi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_absensi');
            $table->foreign('id_absensi')->references('id')->on('absensi');
            $table->string('id_user');
            $table->foreign('id_user')->references('id')->on('user');
            $table->dateTime('jam_mulai');
            $table->dateTime('jam_selesai');
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
