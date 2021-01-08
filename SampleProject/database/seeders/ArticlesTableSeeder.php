<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
              'content' => '{}',
              'user_id' => '123'
            ],
            [
              'content' => '{}',
              'user_id' => '456'
            ],
            [
              'content' => '{}',
              'user_id' => '789'
            ],
          ]);
    }
}
