<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Book::class, function (Faker $faker) {
    $now = Carbon::now();
    return [

        'name' => $faker->name,                                           //ISBN-13（書籍コード）
        'bookdetail_id' => $faker->date($format = 'Y-m-d', $max = 'now'),  //日付
        'author' => $faker->randomNumber(4),                                 //4桁までのランダムな値
        'created_at' => $now,
        'updated_at' => $now,

    ];
});
