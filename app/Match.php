<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = ['home_team','away_team','home_score','away_score','short_description','full_description','image','match_date'];

}
