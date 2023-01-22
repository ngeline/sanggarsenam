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
        Schema::create('subcribes', function (Blueprint $table) {
            $table->id();
            $table->integer('anggotas_id');
            $table->integer('kelas_id');
            $table->string('lama_sub')->nullable();
            $table->datetime('periode_mulai');
            $table->datetime('periode_akhir')->nullable();
            $table->datetime('tgl_cancel')->nullable();
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
        Schema::dropIfExists('subcribes');
    }
};
