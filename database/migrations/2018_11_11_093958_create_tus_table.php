<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tus', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('agama_id');
            $table->string('nama', 255);
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin',['Laki-Laki','Perempuan']);
            $table->string('alamat',255);
            $table->string('no_hp',255);
            $table->string('pict',255);
            $table->string('username',255);
            $table->string('password',255);
            $table->string('email',255);
            $table->enum('first',['0','1']);
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
        Schema::dropIfExists('tus');
    }
}
