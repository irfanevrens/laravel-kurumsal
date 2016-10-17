<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamTableSeeder extends Seeder
{
    public function run()
    {
        Team::truncate();
        Team::create(['image'=>'frontend/images/team/1.jpg','name'=>'Umut Yerebakmaz','title'=>'Full Stack Web Developer']);
    }
}
