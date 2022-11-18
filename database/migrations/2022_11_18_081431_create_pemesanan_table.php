<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('kursi')->nullable();
            $table->timestamp('waktu');
            $table->integer('total');
            $table->enum('status', ['Belum Bayar', 'Sudah Bayar'])->default('Belum Bayar');
            $table->unsignedBigInteger('detail_id');
            $table->unsignedBigInteger('pembeli_id');
            $table->unsignedBigInteger('penjual_id')->nullable();
            $table->timestamps();

            $table->foreign('detail_id')->references('id')->on('detail');
            $table->foreign('pembeli_id')->references('id')->on('users');
            $table->foreign('penjual_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}
