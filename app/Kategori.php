<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Kategori extends Model
{
    protected $fillable = ['name'];

    //satu buah kategori bisa dimiliki banyak post 1:M
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
