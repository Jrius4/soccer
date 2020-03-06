<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['level_name','slug','team_id'];

    public function team()
    {
        return $this->belongsToMany(Group::class);
    }
}
