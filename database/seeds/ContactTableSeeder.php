<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactTableSeeder extends Seeder
{
    public function run()
    {
        Contact::truncate();
        Contact::create(['title'=>'Merkez Şubesi','adress'=>'Aydınlıkevler Mah. 2048 Sok. Öztaş Apt. No:3/5 Yenişehir / MERSİN','telephone'=>'+905384749393','fax'=>'+903243269092','email'=>'umutyerebakmaz@hotmail.com','latitude'=>'36.77871','longitude'=>'34.57789']);
    }
}
