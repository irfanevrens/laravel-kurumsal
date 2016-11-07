<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    protected $table = 'credentials';
    protected $fillable = ['order_id','filename','file_size','file_mime','file_path','description'];
    public $timestamps = false;
}
