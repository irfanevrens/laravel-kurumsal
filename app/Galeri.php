<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeris';
    protected $fillable = ['name', 'description', 'manual_date'];
    public $timestamps = false;

    public function photos()
    {
        return $this->hasMany('App\Photo', 'galeri_id')->orderBy('order_id', 'ASC');
    }

}
