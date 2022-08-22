<?php

namespace App\Http\Controllers;


use App\Contracts\OwnerContract;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    private $repo;

    public function __construct(OwnerContract $repo)
    {
        $this->repo = $repo;
    }

    public function login() {
        return $this->repo->login();
    }
}
