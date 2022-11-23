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
        Schema::create('informasi_pribadi', function (Blueprint $table) {
            $table->id();
            $table->string('profesi');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('email');
            $table->string('no_hp');
            $table->string('alamat');       
            $table->string('photo');
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
        Schema::dropIfExists('informasi_pribadi');
    }
};
