<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Authorsテーブルに10件登録
        $now = Carbon::now();
        for ($i=1; $i < 10; $i++) { 
            $author = [
                'name' => '著者名' . $i,
                'kana' => 'チョシャメイ' . $i,
                'created_at' => $now,
                'updated_at' => $now
            ];
            // BBファサードを使用してデータを投入
            DB::table('authors')->insert($author);
        }
    }
}
