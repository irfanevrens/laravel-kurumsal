<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    public $timestamps = false;

    public function galeri()
    {
        return $this->belongsTo('App\Galeri', 'id'); //belongsTo kime ait ?
    }
}
