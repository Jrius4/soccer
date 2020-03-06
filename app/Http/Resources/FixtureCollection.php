<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FixtureCollection extends JsonResource
// class FixtureCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'home_team'=>$this->homeTeam(),
            'away_team'=>$this->awayTeam(),
            'date'=>$this->date,
            'time'=>$this->time,
            'broadcaster'=>$this->broadcaster,
            'venue'=>$this->venue,
        ];
    }
}
