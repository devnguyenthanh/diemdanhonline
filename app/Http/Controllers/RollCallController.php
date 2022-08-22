<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

use App\Contracts\RollCallContract;
class RollCallController extends Controller
{
    private $repo;

    public function __construct(RollCallContract $repo)
    {
        $this->repo = $repo;
    }

    public function store(Request $request,ClassModel $class)
    {
        return $this->repo->store($request ,$class);
    }
}
