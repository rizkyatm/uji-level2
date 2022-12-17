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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->bigInteger('nip');
            $table->string('namaguru');
            $table->string('matpel');
            $table->date('tgllahir');
            $table->string('tmptlahir');
            $table->enum('jkelamin',['Laki-laki','Perempuan']);
            $table->bigInteger('ntlp');
            $table->enum('agama',['Islam','Kristen','Katolik','Hindu','Budha','Konghucu']);
            $table->string('email');
            $table->string('password');
            $table->string('alamat');
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
        Schema::dropIfExists('gurus');
    }
};
