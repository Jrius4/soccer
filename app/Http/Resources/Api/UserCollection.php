<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class UserCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data'=>[
               'identifer'=>$this->id,
               'name'=>$this->name,
               'email'=>$this->email,
               'password'=>$this->password,
               'roles'=>$this->roles,
               'permissions'=>$this->allPermissions()
            ],
            'links'=>[
                'author_email'=>'kazibwejuliusjunior@gmail.com'
            ],
        ];
    }
}
