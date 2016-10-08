<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table = 'logos';
    protected $fillable = ['file_name', 'filesize', 'file_mime','file_path'];
    public $timestamps = false;
}
