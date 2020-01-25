<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'id_staff';
    protected $fillable = ['nama', 'status', 'deskripsi', 'foto'];

    public function foto()
    {
        if ($this->foto) {
            return $this->foto;
        } else {
            return asset('images/no-thumbnail.jpg');
        }
    }
}
