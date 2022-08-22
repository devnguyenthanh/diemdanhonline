<?php

namespace App\Repositories;

use App\Contracts\RollCallContract;
use App\Http\Resources\RollCallResource;
use App\http\Services\RollCallService;
use App\Models\RollCall;
use App\Traits\ResponseAPI;

class RollCallRepository implements RollCallContract
{
    use ResponseAPI;
    protected $rollCallService;

    public function __construct(RollCallService $rollCallService)
    {
        $this->rollCallService = $rollCallService;
    }

    public function store($request,$class)
    {
        try{
            $input = $this->rollCallService->getInput($request, $class);
            RollCall::insert($input);
            return $this->success('Create roll call cuccess', $input, 200);
        }catch(\Exception $e){
            return $e;
        }    
    }


    public function show()
    {
        
    }

    public function delete()
    {
        
    }
}
