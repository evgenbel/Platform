<?php

namespace Modules\User\Http\Controllers\Api;

use Modules\Core\Http\Controllers\BasePublicController;
use Modules\User\Http\Requests\LoginRequest;
use Modules\User\Http\Requests\RegisterRequest;
use Modules\User\Services\UserRegistration;
use Modules\User\Transformers\FullUserTransformer;

class AuthController extends BasePublicController
{
    public function postRegister(RegisterRequest $request)
    {
        $user = app(UserRegistration::class)->register($request->all());
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $error = $this->auth->login($credentials, false);

        return new FullUserTransformer($user);

    }


    public function postLogin(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember = (bool) $request->get('remember_me', false);

        $error = $this->auth->login($credentials, $remember);

        if ($error) {
            return response()->json(array(
                'code'      =>  401,
                'message'   =>  $error
            ), 401);
        }
        return true;
    }
}
