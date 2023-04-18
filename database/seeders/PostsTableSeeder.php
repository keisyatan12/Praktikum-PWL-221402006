<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = Factory::create();
        for($i = 1; $i <= 10; $i++){
            $posts [] = [
                'title'=> $faker->title,
                'author_id'=> $faker->randomDigitNotNull,
                'excerpt' => $faker->text,
                'content' => $faker->paragraph,
                'image' => $faker-> image,
               
                
            
            ];
    }
    DB::table("posts")->insert($posts);
}
}
