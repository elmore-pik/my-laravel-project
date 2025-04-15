<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $posts = [
            ['title' => 'Title 0', 'body' => 'body 0', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Title 1', 'body' => 'body 1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Title 2', 'body' => 'body 2', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Title 3', 'body' => 'body 3', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Title 4', 'body' => 'body 4', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('posts')->insert($posts);
    }
}
