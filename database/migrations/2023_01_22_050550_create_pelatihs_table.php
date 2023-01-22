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
        Schema::create('pelatihs', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('nama');
            $table->integer('nik')->default('0');
            $table->string('jk');
            $table->text('alamat');
            $table->string('email');
            $table->integer('telepon');
            $table->text('foto');
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
        Schema::dropIfExists('pelatihs');
    }
};
