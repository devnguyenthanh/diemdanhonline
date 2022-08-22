<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Contracts\AdminContract;

class AdminController extends Controller
{
    private $repo;

    public function __construct(AdminContract $repo)
    {
        $this->repo = $repo;
    }

    public function login(AdminLoginRequest $request)
    {
        return $this->repo->login($request);
    }

    public function logout()
    {
        return $this->repo->logout();
    }
}
