<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // nameとkanaカラムを指定可能にする
    protected $fillable = [
        'name',
        'bookdetail_id',
        'author_id',
        'publiser_id',
    ];

    public function detail()
    {
        return $this->hasOne(\App\Bookdetail::class);
    }
}
