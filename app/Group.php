<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['group_name','slug','team_id','team_points','team_away_goals'];

    public function team()
    {
        return $this->belongsToMany(Group::class);
    }
}
