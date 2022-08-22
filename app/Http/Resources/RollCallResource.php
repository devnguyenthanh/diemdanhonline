<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RollCallResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'class_id' => $this->class_id,
            'is_checked' => $this->is_checked,
            'date' => $this->date,
            'note' => $this->note,
        ];
    }
}
