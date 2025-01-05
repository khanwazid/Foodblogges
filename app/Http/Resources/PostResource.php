<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
     
        return [
            'p_id' => $this->p_id, // Use the custom primary key i.e. persent in posts table
            'title' => $this->title,
            'description' => $this->description,
            'header_pic' => $this->header_pic ? url('storage/' . $this->header_pic) : null,
            'read_time' => $this->read_time,
            'categories' => $this->categories,
            'cook_time' => $this->cook_time,
            'prep_time' => $this->prep_time,
            'serves' => $this->serves,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
