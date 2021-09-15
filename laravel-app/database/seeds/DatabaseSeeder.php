<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //呼び出すSeederクラスを記述
        // $this->call(AuthorsTableSeeder::class);
        // $this->call(PublishersTableSeeder::class);
        // $this->call(BookdetailsTableSeeder::class);
        // $this->call(BooksTableSeeder::class);
        $this->call(UserSeeder::class);
    }
}
