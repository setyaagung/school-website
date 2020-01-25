<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Formulir extends Model
{
    use AutoNumberTrait;
    protected $table = 'formulir';
    protected $primaryKey = 'id_formulir';
    protected $fillable = ['id_pendaftaran', 'id_user', 'no_pendaftaran', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'status_keluarga', 'jml_saudara', 'alamat', 'asal_sekolah', 'ijasah', 'nisn', 'nama_ayah', 'agama_ayah', 'pekerjaan_ayah', 'alamat_ayah', 'nama_ibu', 'agama_ibu', 'pekerjaan_ibu', 'alamat_ibu', 'berkas', 'status_daftar'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran');
    }

    public function getAutoNumberOptions()
    {
        return [
            'no_pendaftaran' => [
                'length' => 3,
                'format' => function () {
                    return '?/MA/' . date('Y');
                }
            ]
        ];
    }
}
