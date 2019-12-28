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
            $table->bigIncrements('id');
            $table->integer('pendaftaran_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('no_pendaftaran');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki - Laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha']);
            $table->enum('status_keluarga', ['Anak Kandung', 'Anak Angkat']);
            $table->integer('jml_saudara');
            $table->text('alamat');
            $table->string('asal_sekolah');
            $table->integer('ijasah');
            $table->integer('nisn');
            $table->string('nama_ayah');
            $table->enum('agama_ayah', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha']);
            $table->enum('pekerjaan_ayah', ['PNS', 'TNI/Polri', 'Guru/Dosen', 'BUMN', 'Pedagang', 'Swasta', 'Wiraswasta', 'Pensiunan', 'Lainnya']);
            $table->text('alamat_ayah');
            $table->string('nama_ibu');
            $table->enum('agama_ibu', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha']);
            $table->enum('pekerjaan_ibu', ['PNS', 'TNI/Polri', 'Guru/Dosen', 'BUMN', 'Pedagang', 'Swasta', 'Wiraswasta', 'Pensiunan', 'Lainnya']);
            $table->text('alamat_ibu');
            $table->enum('status_daftar', ['DAFTAR', 'KONFIRMASI', 'DAFTAR ULANG', 'DITERIMA']);
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
