<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori;

class Post extends Model
{
    protected $guarded = [];

    //membuat tanggal bulan dan tahun indonesia
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