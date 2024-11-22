<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // user harus memasukan atribut atribut yang ada di fillable untuk dapat menjalankan program
    protected $fillable = [
        'title',
        'slug',
        'body',
        'teaser',
        'meta_title',
        'meta_description',
    ];
}
