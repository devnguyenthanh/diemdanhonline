<?php

namespace App\Http\Services;

use App\Contracts\ClassContract;

class ClassService
{
    public function getInput($request)
    {
        return $input = [
            'name' => $request->name,
            'description' => $request->description,
            'class_code' => $request->class_code,
        ];

    }
}