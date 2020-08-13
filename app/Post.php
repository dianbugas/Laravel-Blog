<?php

namespace App;

use App\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    public function hapusCover(){
        Storage::delete($this->cover);
    }
}
