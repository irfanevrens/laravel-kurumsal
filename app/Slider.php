<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';
    protected $fillable = ['order_id','filename','file_size','file_mime','file_path','description'];
    public $timestamps = false;
}
