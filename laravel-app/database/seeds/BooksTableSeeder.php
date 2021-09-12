<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Book;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ja_JP');
        $params = [];
        $now = Carbon::now();
        for ($i=1; $i < 51; $i++) { 
            $name = $faker->name;
            $bookdetail_id = $i;
            $author_id = $i - 10 * floor(($i-1) / 10);
            $publisher_id = $i - 10 * floor(($i-1) / 10);
            $created_at = $now;
            $updated_at = $now;
            $params[] = [
                'name' => $name,
                'bookdetail_id' => $bookdetail_id,
                'author_id' => $author_id,
                'publisher_id' => $publisher_id,
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ];
            Book::insert($params);
            $params = [];
        }
    }
}
