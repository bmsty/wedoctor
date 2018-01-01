<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_doctor');
            $table->string('alamat_doctor');
            $table->string('status');
            $table->float('rating')->default(0);
            $table->integer('spesialisasi_id')->unsigned()->index();
            // $table->foreign('spesialisasi_id')->references('id')->on('spesialisasis')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('doctors');
    }
}
