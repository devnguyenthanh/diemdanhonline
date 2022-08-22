<?php

namespace App\Repositories;

use App\Contracts\ClassContract;
use App\Http\Resources\ClassResource;
use App\http\Services\ClassService;
use App\Models\ClassModel;
use App\Traits\ResponseAPI;

class ClassRepository implements ClassContract
{
    use ResponseAPI;
    protected $classService;

    public function __construct(ClassService $classService)
    {
        $this->classService = $classService;
    }

    public function store($request)
    {
        
        try{
            $input = $this->classService->getInput($request);
            ClassModel::create($input);
            return $this->success('Create class cuccess', '', 200);
        }catch(\Exception $e){
            throw $e->getMessage(); 
        }    
    }


    public function show()
    {
        try{
            $class = ClassModel::all();
            return $this->success('Show class cuccess', ClassResource::collection($class), 200); 
        }catch(\Exception $e){
            throw $e->getMessage();
        }
        
    }

    public function delete($classID)
    {
        try {
            $class = ClassModel::where('id', $classID->id)->delete();
            return $this->success('Delete class cuccess', '', 200);
        }catch(\Exception $e){
            throw $e->getMessage();
        }
    }
}
