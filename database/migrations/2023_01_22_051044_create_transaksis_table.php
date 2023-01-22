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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('anggotas_id');
            $table->integer('kelas_id')->default('0');
            $table->integer('events_id')->default('0');
            $table->string('trx_kode');
            $table->string('jenis');
            $table->string('metode_bayar');
            $table->string('status_bayar')->default('Menunggu Pembayaran');
            $table->text('bukti_transfer')->nullable();
            $table->string('konfirmasi_bayar')->default('Menunggu Pembayaran');
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
        Schema::dropIfExists('transaksis');
    }
};
