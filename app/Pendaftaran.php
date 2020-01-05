<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendaftaran extends Model
{
    use SoftDeletes;
    protected $table = 'pendaftaran';
    protected $dates = ['buka', 'tutup'];
    protected $fillable = ['user_id', 'tahun_ajaran', 'buka', 'tutup', 'kuota', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function formulir()
    {
        return $this->hasMany(Formulir::class);
    }
}
