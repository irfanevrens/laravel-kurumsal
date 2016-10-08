<?php

use Illuminate\Database\Seeder;
use App\Social;

class SocialTableSeeder extends Seeder
{
    public function run()
    {
        Social::truncate();
        Social::create(['social_id'=>'1','link'=>'https://www.facebook.com/umutyerebakmaz','class'=>'social-icon si-small si-borderless nobottommargin si-facebook','icon'=>'icon-facebook']);
        Social::create(['social_id'=>'29','link'=>'https://twitter.com/umutyerebakmaz','class'=>'social-icon si-small si-borderless nobottommargin si-twitter','icon'=>'icon-twitter']);
        Social::create(['social_id'=>'23','link'=>'https://www.instagram.com/umutyerebakmaz/','class'=>'social-icon si-small si-borderless nobottommargin si-instagram','icon'=>'icon-instagram']);
        Social::create(['social_id'=>'30','link'=>'https://www.youtube.com/user/umutyerebakmaz','class'=>'social-icon si-small si-borderless nobottommargin si-youtube','icon'=>'icon-youtube']);
    }
}
