<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // nameとkanaカラムを指定可能にする
    protected $fillable = [
        'name',
        'kana',
    ];
}
