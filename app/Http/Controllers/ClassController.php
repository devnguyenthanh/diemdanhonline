<?php

namespace App\Http\Controllers;


use App\Contracts\ClassContract;
use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    private $repo;

    public function __construct(ClassContract $repo)
    {
        $this->repo = $repo;
    }

    public function store(Request $request)
    {
        return $this->repo->store($request);
    }
    public function show()
    {
        return $this->repo->show();
    }
    public function delete(ClassModel $classID)
    {
        return $this->repo->delete($classID);
    }
}
