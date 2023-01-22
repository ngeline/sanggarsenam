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
        Schema::create('subcribe_statuses', function (Blueprint $table) {
            $table->id();
            $table->integer('subs_id');
            $table->datetime('jatuh_tempo');
            $table->datetime('tgl_bayar')->nullable();
            $table->string('status')->default('Menunggu Pembayaran');
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
        Schema::dropIfExists('subcribe_statuses');
    }
};
