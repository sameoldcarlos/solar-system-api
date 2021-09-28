<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Planet extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
            'id' => $this->id,
            'name' => $this->name,
            'number' => $this->number,
            'surface_area' => $this->surface_area,
            'gravity' => $this->gravity,
            'mass' => $this->mass,
            'radius' => $this->radius,
            'orbital_period' => $this->orbital_period,
            'rotation_period' => $this->rotation_period,
            'image' => $this->image,
            'distance_from_sun' => $this->distance_from_sun,
            'temperature' => $this->temperature,
            'density' => $this->density,
            'atm_pressure' => $this->atm_pressure
        ];
    }
}
