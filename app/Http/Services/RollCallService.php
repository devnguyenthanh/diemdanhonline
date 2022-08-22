<?php

namespace App\Http\Services;

use App\Contracts\RollCallContract;

class RollCallService
{
    public function getInput($request,$class)
    {
        $input = [];
        foreach ($request->data as $data) {
            $input[] = [
                'user_id' => $data['user_id'],
                'class_id' => $class->id,
                'is_checked' => $data['is_checked'],
                'note' => $data['note'],
                'date' => date('Y-m-d h:i:s', time())
            ];
        };

        return $input;
    }
}