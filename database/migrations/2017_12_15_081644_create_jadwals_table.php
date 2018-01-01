<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hari');
            $table->time('waktu_mulai');
            $table->time('waktu_akhir');
            $table->integer('tempat_id')->unsigned()->index();
            // $table->foreign('tempat_id')->references('id')->on('tempats')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('doctor_id')->unsigned()->index();
            // $table->foreign('doctor_id')->references('id')->on('doctors')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('jadwals');
    }
}
