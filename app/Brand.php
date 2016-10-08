<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = ['order_id','filename','file_size','file_mime','file_path','description'];
    public $timestamps = false;
}
