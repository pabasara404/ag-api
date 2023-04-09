<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TreeDetailResource extends JsonResource
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
            "id" => $this->id,
            "sub_no" => $this->sub_no,
            "type" => $this->type,
            "height" => $this->height,
            "girth" => $this->girth,
            "fruit_status" => $this->fruit_status,
            "age" => $this->age,
        ];
    }
}
