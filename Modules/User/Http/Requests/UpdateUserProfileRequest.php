<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\User\Contracts\Authentication;

class UpdateUserProfileRequest extends FormRequest
{
    public function rules()
    {
        $userId = app(Authentication::class)->id();

        return [
//            'email' => "required|email|unique:users,email,{$userId}",
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }
}
