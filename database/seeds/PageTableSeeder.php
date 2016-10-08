<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Page;

class PageTableSeeder extends Seeder
{
    public function run()
    {
        Page::truncate();
        Page::create(['title'=>'Anasayfa','description'=>'description of anasayfa','keywords'=>'anasayfa,keywords','author'=>'umut yerebakmaz','content'=>'anasayfa demo content']);
        Page::create(['title'=>'Hakkımızda','description'=>'description of kurumsal','keywords'=>'kurumsal,keywords','author'=>'umut yerebakmaz','content'=>'kurumsal demo content']);
        Page::create(['title'=>'Ekibimiz','description'=>'description of referanslarımız','keywords'=>'referanslar,keywords','author'=>'umut yerebakmaz','content'=>'referanslar demo content']);
        Page::create(['title'=>'Belgeler & Sertifikalar','description'=>'description of galeri','keywords'=>'galeri,keywords','author'=>'umut yerebakmaz','content'=>'haberler demo content']);
        Page::create(['title'=>'Referanslarımız','description'=>'description of haberler','keywords'=>'haberler,keywords','author'=>'umut yerebakmaz','content'=>'haberler demo content']);
        Page::create(['title'=>'Galeri','description'=>'description of haberler','keywords'=>'haberler,keywords','author'=>'umut yerebakmaz','content'=>'haberler demo content']);
        Page::create(['title'=>'Sanal Tur','description'=>'description of iletişim','keywords'=>'iletişim,keywords','author'=>'umut yerebakmaz','content'=>'iletişim demo content']);
        Page::create(['title'=>'Haberler','description'=>'description of iletişim','keywords'=>'iletişim,keywords','author'=>'umut yerebakmaz','content'=>'iletişim demo content']);
        Page::create(['title'=>'İletişim','description'=>'description of iletişim','keywords'=>'iletişim,keywords','author'=>'umut yerebakmaz','content'=>'iletişim demo content']);
    }
}
