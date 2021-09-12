<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    // nameとkanaカラムを指定可能にする
    protected $fillable = [
        'name',
        'kana',
    ];
    
    //追加
    public function getKanaAttribute(string $value): string
    {
        //kanaカラムの値を半角カナに変換
        return mb_convert_kana($value, "k");
    }

    public function setKanaAttribute(string $value): void
    {
        //kanaカラムの値を全角カナに変換
        $this->attributes['kana'] = mb_convert_kana($value, "KV");
    }
}
