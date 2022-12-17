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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('foto');
            $table->integer('kelas');
            $table->integer('nisn');
            $table->enum('jeniskelamin',['Laki-laki','Perempuan']);
            $table->bigInteger('notlp');
            $table->enum('jurusan',['TJKT','PPLG','ANIMASI','BROADCASTING','TE']);
            $table->string('email');
            $table->string('password');
            $table->unsignedBigInteger('guru_id');

            
            $table->timestamps();

            $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};
