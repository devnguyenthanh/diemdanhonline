<?php

namespace App\Contracts;

interface AdminContract
{
    public function login($request);
    public function logout();
}

