<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Modules\Core\Http\Controllers\BasePublicController;
use Modules\User\Exceptions\InvalidOrExpiredResetCode;
use Modules\User\Exceptions\UserNotFoundException;
use Modules\User\Http\Requests\ChangeLoginRequest;
use Modules\User\Http\Requests\LoginRequest;
use Modules\User\Http\Requests\RegisterRequest;
use Modules\User\Http\Requests\ResetCompleteRequest;
use Modules\User\Http\Requests\ResetRequest;
use Modules\User\Http\Requests\UpdateUserProfileRequest;
use Modules\User\Repositories\UserRepository;
use Modules\User\Services\UserRegistration;
use Modules\User\Services\UserResetter;
use Modules\User\Transformers\FullUserTransformer;
use Modules\User\Transformers\UserTransformer;

class AccountController extends BasePublicController
{
    use DispatchesJobs;

    protected $user;

    public function __construct(UserRepository $user)
    {
        parent::__construct();
        $this->user = $user;
    }

    function profile(){
        return view('user::public.profile',[
            'profile'   =>  $this->auth->user()
        ]);
    }

    function update(UpdateUserProfileRequest $request){
        $this->user->update($this->auth->user(), $request->all());

        return redirect()->back()
            ->withSuccess(trans('user::messages.profile updated'));
    }

    function authUpdate(ChangeLoginRequest $request){
        $this->user->update($this->auth->user(), $request->all());

        return redirect()->back()
            ->withSuccess(trans('user::messages.profile updated'));
    }
}
