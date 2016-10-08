<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class NewsTableSeeder extends Seeder
{

    public function run()
    {
        Post::truncate();
        factory('App\Post',20)->create();
    }
}
