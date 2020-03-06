<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    protected $fillable = ['home_team','away_team','date','time','venue','broadcaster'];

    public function homeTeam()
        {
            $id = $this->home_team;
                return Team::where('id',$id)->first();
        }

    public function awayTeam()
    {
        $id = $this->away_team;
        return Team::where('id',$id)->first();
    }
}

