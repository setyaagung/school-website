<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Informasi extends Model
{
    use Sluggable;

    protected $table = 'informasi';
    protected $primaryKey = 'id_informasi';
    protected $dates = ['created_at'];
    protected $fillable = ['id_user', 'judul', 'kategori', 'isi', 'slug', 'gambar'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function gambar()
    {
        if ($this->gambar) {
            return $this->gambar;
        } else {
            return asset('images/no-thumbnail.jpg');
        }
    }
}
