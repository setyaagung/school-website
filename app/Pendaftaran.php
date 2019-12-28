<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $dates = ['buka', 'tutup'];
    protected $fillable = ['user_id', 'tahun_ajaran', 'buka', 'tutup', 'kuota', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
