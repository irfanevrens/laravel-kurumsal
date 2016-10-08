<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['title', 'adress', 'telephone','fax','marker_text','latitude','longitude'];
    public $timestamps = false;
}
