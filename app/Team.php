<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $fillable = ['order_id','image','name','title'];
    public $timestamps = false;

    public function teamSocialIcons()
    {
        return $this->hasMany('App\TeamSocialIcon', 'team_id')->orderBy('order_id', 'ASC');
    }
}
