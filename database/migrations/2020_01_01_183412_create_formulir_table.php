<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulir', function (Blueprint $table) {
            $table->bigIncrements('id_formulir');
            $table->integer('id_pendaftaran')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->string('no_pendaftaran');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('status_keluarga');
            $table->integer('jml_saudara');
            $table->text('alamat');
            $table->string('asal_sekolah');
            $table->integer('ijasah');
            $table->integer('nisn');
            $table->string('nama_ayah');
            $table->string('agama_ayah');
            $table->string('pekerjaan_ayah');
            $table->text('alamat_ayah');
            $table->string('nama_ibu');
            $table->string('agama_ibu');
            $table->string('pekerjaan_ibu');
            $table->text('alamat_ibu');
            $table->string('status_daftar');
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
        Schema::dropIfExists('formulir');
    }
}
