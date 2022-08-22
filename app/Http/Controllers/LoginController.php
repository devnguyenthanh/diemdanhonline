<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Socialite;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(LoginRequest $request) {
        $validated = $request->validated();
        //dd($validated);

        $credentials = $request->only(['username', 'password']);

        if (Auth::guard('owner')->attempt($credentials)) {
            return redirect('/owner/index');
        } else {
            return $request->all();
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }

    public function loginGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle() {
        //get call back google account
        $getInfo = Socialite::driver('google')->stateless()->user();

        //save google account to my database
        $user = $this->createUser($getInfo, 'google');

        dd($user);
    }

    function createUser($getInfo, $provider){
        $user = User::where('provider_id', $getInfo->id)->first();

        if (!$user) {
            $username = $this->createUsername($getInfo->name);

            $user = User::create([
                'name'     => $getInfo->name,
                'username' => $username,
                'password' => bcrypt(Str::random(10)),
                'email'    => $getInfo->email,
                'image' => $getInfo->avatar ?? null,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }

    public function createUsername($name): string
    {
        $name = $this->vn_str_filter($name);

        $arrayName = explode(" ", $name);

        $firstName = array_shift($arrayName);
        $subName = '';

        foreach($arrayName as $value) {
            $subName = $subName . substr($value, 0, 1);
        }

        $count = User::where('username', 'LIKE', $firstName.$subName.'%')->get()->count();
        $count += 1;
        $username = $firstName.$subName.$count;
        return strtolower($username);
    }

    public function vn_str_filter ($str){
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );

        foreach($unicode as $nonUnicode => $uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        return $str;
    }
}
