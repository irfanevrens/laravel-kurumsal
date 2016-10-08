<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::truncate();
        User::create(['name'=>'Umut Yerebakmaz','email'=>'umutyerebakmaz@gmail.com','password'=> bcrypt(123456),'authority'=>'1','remember_token'=> str_random(10)]);
    }
}

