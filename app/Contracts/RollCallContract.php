<?php

namespace App\Contracts;

interface RollCallContract
{
    public function store($request,$class);
    public function show();
    public function delete();
}

