<?php

use Illuminate\Database\Seeder;
use App\Logo;

class LogoTableSeeder extends Seeder
{
    public function run()
    {
        Logo::truncate();
        Logo::create([
            'file_name'=>'new-logo.png',
            'file_size'=>'2753',
            'file_mime'=>'image/png',
            'file_path'=>'frontend/images/new-logo.png'
        ]);
    }
}