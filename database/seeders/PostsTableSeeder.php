<?php

namespace Database\Seeders;

use App\Models\Post;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Post::truncate();
        Post::factory(5)->create();
        

    }
}
