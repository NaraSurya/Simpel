<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',255);
            $table->string('alamat',255);
            $table->string('no_tlp',255);
            $table->enum('jenis_kelamin' , ['L','P']);
            $table->date('tgl_lahir');
            $table->string('pict',255);
            $table->string('username')->unique();
            $table->string('password',255);
            $table->string('email')->unique();
            $table->integer('agama_id');
            $table->enum('first' , ['1','0']);
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
        Schema::dropIfExists('walis');
    }
}
