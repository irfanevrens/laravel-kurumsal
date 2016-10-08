<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();

          $this->call(ContactTableSeeder::class);
          $this->call(NewsTableSeeder::class);
          $this->call(UserTableSeeder::class);
          $this->call(LogoTableSeeder::class);
          $this->call(PageTableSeeder::class);
          $this->call(SocialTableSeeder::class);
          $this->call(TeamTableSeeder::class);

        Model::reguard();
    }
}
