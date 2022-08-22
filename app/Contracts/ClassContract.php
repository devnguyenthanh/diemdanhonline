<?php

namespace App\Contracts;

interface ClassContract
{
    public function store($request);
    public function show();
    public function delete($classID);
   
}

