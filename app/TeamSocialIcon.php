<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamSocialIcon extends Model
{
    protected $table = 'team_social_icons';
    protected $fillable = ['order_id','team_id','social_class','link'];
    public $timestamps = false;

    public function team()
    {
        return $this->belongsTo('App\Team', 'id'); //belongsTo kime ait ? (id => team_id)
    }
}
