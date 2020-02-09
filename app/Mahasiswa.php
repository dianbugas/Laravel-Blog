<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nama',
        'jk',
        'tmp_lahir',
        'tgl_lahir',
        'email',
        'no_hp',
        'alamat',
        'foto',
        'angkatan',
        'status_kerja',
        'tmp_kerja',
        'beasiswa_id',
        'prodi_id'
    ];
}
