<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClassResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'class_code' => $this->class_code,
            'updated_at' => $this->updated_at,
            'roll_call' => \App\Http\Resources\RollCallResource::collection($this->rollCall),
        ];
    }
}
