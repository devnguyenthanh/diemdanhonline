<?php

namespace App\Repositories;

use App\Contracts\AdminContract;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminRepository implements AdminContract
{
    use ResponseAPI;

    public function login($request)
    {
        try {
            $admin = Admin::where('email',$request->email)->whereNull('deleted_at')->first();
       
            if (!$admin || !Hash::check($request->password, $admin->password, [])) {
                              return $this->error('Login fails',[],401);
            }
	
            $accessToken = $admin->createToken('admin')->plainTextToken;
            $data = [
                'access_token' => $accessToken,
          		'token_type' => 'Bearer'
        	];

            return $this->success('Login successful', $data, 200);

        } catch (\Exception $err) {
            throw $err;
        }
    }

    public function logout()
    {
        $user = request()->user();
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
        return $this->success('Logout successful', '', 200);
    }
}
