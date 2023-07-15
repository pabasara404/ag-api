<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LandDetailResource extends JsonResource
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
            "land_name" => $this->land_name,
            "land_size" => $this->land_size,
            "plan_number" => $this->plan_number,
            "plan_date" => $this->plan_date,
            "plan_plot_number" => $this->plan_plot_number,
        ];
    }
}
