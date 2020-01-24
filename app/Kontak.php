<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kontak';
    protected $fillable = ['nama_sekolah', 'kata_sambutan', 'visi', 'misi', 'sejarah_sekolah', 'alamat', 'email', 'telepon', 'fax', 'facebook', 'twitter', 'instagram', 'youtube'];
}
