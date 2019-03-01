<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\User\Contracts\Authentication;

class ChangeLoginRequest extends FormRequest
{
    public function rules()
    {
        $userId = app(Authentication::class)->id();

        return [
            'email' => "required|email|unique:users,email,{$userId}",
            'password' => 'confirmed',
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
