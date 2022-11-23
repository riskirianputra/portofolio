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
        Schema::create('project', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_bahasa')->unsigned();
            $table->foreign('id_bahasa')->references('id')->on('bahasa')->onDelete('cascade');
            $table->integer('id_aplikasi')->unsigned();
            $table->foreign('id_aplikasi')->references('id')->on('aplikasi')->onDelete('cascade');
            $table->string('keterangan');            
            $table->string('img');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->string('img5');
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
        Schema::dropIfExists('project');
    }
};
