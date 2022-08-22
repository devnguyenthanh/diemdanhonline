<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|max:255',
            'password' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Vui Lòng Điền Email',
            'password.required' => 'Vui Lòng Điền Email Password',
            'password.min' => 'Mật Khẩu Phải Từ 6 Kí Tự',
        ];
    }
}
