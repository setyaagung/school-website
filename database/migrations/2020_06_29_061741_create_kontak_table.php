<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontak', function (Blueprint $table) {
            $table->bigIncrements('id_kontak');
            $table->string('nama_sekolah');
            $table->text('kata_sambutan');
            $table->text('visi');
            $table->text('misi');
            $table->text('sejarah_sekolah');
            $table->text('alamat');
            $table->string('email');
            $table->string('telepon');
            $table->string('fax');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('instagram');
            $table->text('youtube');
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
        Schema::dropIfExists('kontak');
    }
}
