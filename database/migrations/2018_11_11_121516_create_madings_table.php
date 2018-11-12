<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madings', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('tu_id');
            $table->string('judul',255);
            $table->text('keterangan',255);//perlu revisi
            $table->dateTime('tanggal');
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
        Schema::dropIfExists('madings');
    }
}
