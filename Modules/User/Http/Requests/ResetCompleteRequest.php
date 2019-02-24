<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetCompleteRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required',
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
            'password.required'    =>  trans('user::messages.password required'),
            'password.min'    =>  trans('user::messages.password min'),
            'password.confirmed'    =>  trans('user::messages.password confirmed'),
            'password_confirmation.required'    =>  trans('user::messages.password confirmed'),
        ];
    }
}
