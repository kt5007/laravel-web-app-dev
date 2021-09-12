<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookdetail extends Model
{
    public function getKanaAttributes(string $value): string
    {
        //kanaカラムの値を半角カナに変換
        return mb_convert_kana($value, "k");
    }

    public function setKanaAttributes(string $value): void
    {
        //kanaカラムの値を全角カナに変換
        $this->attributes['kana'] = mb_convert_kana($value, "KV");
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
