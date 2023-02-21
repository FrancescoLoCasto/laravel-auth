<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i <50 ; $i++) { 
            $newPost = new Post();
            $newPost->slug = '';
            $newPost->title = '';
            $newPost->author = '';
            $newPost->content = '';
            $newPost->date = '';
        }
    }
}
