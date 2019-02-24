<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:3',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'email.required'    =>  trans('user::messages.email required'),
            'email.email'    =>  trans('user::messages.email valid'),
            'email.unique'    =>  trans('user::messages.email unique'),
            'password.required'    =>  trans('user::messages.password required'),
            'password.min'    =>  trans('user::messages.password min'),
            'password.confirmed'    =>  trans('user::messages.password confirmed'),

        ];
    }
}
