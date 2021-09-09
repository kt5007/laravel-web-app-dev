<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookdetail;
use App\Model;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Bookdetail::class, function (Faker $faker) {
    $now = Carbon::now();
    return [
        'isbn' => $faker->isbn13,                                           //ISBN-13（書籍コード）
        'published_date' => $faker->date($format = 'Y-m-d', $max = 'now'),  //日付
        'price' => $faker->randomNumber(4),                                 //4桁までのランダムな値
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
