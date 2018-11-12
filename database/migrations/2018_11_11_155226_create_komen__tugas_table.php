<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomenTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komen__tugas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tugas_id');
            $table->integer('siswa_id');
            $table->integer('guru_id');
            $table->text('komen');
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
        Schema::dropIfExists('komen__tugas');
    }
}
