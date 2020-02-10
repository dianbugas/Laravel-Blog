<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    protected $dates = [
        'tgl_publis',
        'create_at',
        'update_at'
    ];

    // satu buah post memiliki satu buah kategori 1:1
    // fungsi akan di akses oleh view post
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
