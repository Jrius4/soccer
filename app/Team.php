<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name','slug','logo','slogan','biograpy','location','url_logo'];

    public function group()
    {
        return $this->hasOne(Group::class);
    }

    public function level()
    {
        return $this->hasOne(Level::class);
    }

    public function levels()
    {
        return $this->belongsToMany(Level::class);
    }
}
