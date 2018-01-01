<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pasien');
            $table->date('tanggal_lahir_pasien');;
            $table->enum('jenis_kelamin_pasien', ['Laki-laki','Perempuan']);
            $table->text('alamat_pasien');
            $table->text('riwayat_sakit');
            $table->integer('no_urut');
            $table->date('tanggal_berobat');
            $table->time('waktu_masuk');
            $table->time('waktu_aman');
            $table->integer('user_id')->unsigned()->index();
            // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('jadwal_id')->unsigned()->index();
            // $table->foreign('jadwal_id')->references('id')->on('jadwals')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pasiens');
    }
}
