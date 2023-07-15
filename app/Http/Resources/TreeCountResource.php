<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TreeCountResource extends JsonResource
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
            "breadfruit" => $this->breadfruit,
            "jackfruit" => $this->jackfruit,
            "coconut" => $this->coconut,
            "palmyra" => $this->palmyra,
        ];
    }
}
