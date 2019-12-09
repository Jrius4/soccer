<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ArticleCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
        [
            'identifer'=>$this->id,
            'title'=>$this->title,
            'slug'=>$this->slug,
            'overview'=>$this->excerpt,
            'message'=>$this->body,
            'articles'=>$this->user,
        ];
    }

    public function with($request)
    {
        return [
            'version'=>'1.0.0',
            'author_name'=>'Kazibwe Julius Junior',
            'email'=>'kazibwejuliusjunior@gmail.com',
        ];
    }
}
