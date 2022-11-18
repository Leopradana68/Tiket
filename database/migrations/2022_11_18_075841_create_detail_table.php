<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail', function (Blueprint $table) {
            $table->id();
            $table->string('nama_konser');
            $table->integer('harga');
            $table->time('jam');
            $table->unsignedBigInteger('tiket_id');
            $table->timestamps();

            $table->foreign('tiket_id')->references('id')->on('tiket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail');
    }
}
