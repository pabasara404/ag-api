<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GnDivisionResource extends JsonResource
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
            "name" => $this->name,
            "gn_code"=>$this->gn_code,
            "mpa_code"=>$this->mpa_code,
            "gn_officer"=>$this->gn_officer,
        ];
    }
}
