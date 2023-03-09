<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            "nic" => $this->nic,
            "address" => $this->address,
            "contact_number" => $this->contact_number,
            "role" => $this->role,
            "date_of_birth" => $this->date_of_birth
        ];
    }
}
