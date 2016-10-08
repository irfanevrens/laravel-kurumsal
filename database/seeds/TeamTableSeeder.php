<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamTableSeeder extends Seeder
{
    public function run()
    {
        Team::truncate();
        Team::create(['image'=>'frontend/images/team/3.jpg','name'=>'UMUT YEREBAKMAZ','title'=>'CEO']);
        Team::create(['image'=>'frontend/images/team/3.jpg','name'=>'DOĞANAY DEMİRDELEN','title'=>'Co-Founder']);
        Team::create(['image'=>'frontend/images/team/3.jpg','name'=>'ULBOSSYN ZHANISBAYEVA','title'=>'Sales']);
        Team::create(['image'=>'frontend/images/team/3.jpg','name'=>'ALBINA IUSUPOVA','title'=>'Support']);
    }
}
