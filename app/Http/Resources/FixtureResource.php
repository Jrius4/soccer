<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FixtureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // return
        // [
        //     'home_team'=>$request->home_team,
        //     'away_team'=>$request->away_team,
        //     'date'=>$request->date

        // ];
    }
}
