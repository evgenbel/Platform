<?php

use Illuminate\Routing\Router;

/** @var Router $router */
$router->group(['prefix' => 'auth'], function (Router $router) {
    # Login
    $router->get('login', ['middleware' => 'auth.guest', 'as' => 'login', 'uses' => 'AuthController@getLogin']);
    $router->post('login', ['as' => 'login.post', 'uses' => 'AuthController@postLogin']);
    $router->post('loginajax', ['as' => 'login.postajax', 'uses' => 'AuthController@postAjaxLogin']);
    # Register
    if (config('asgard.user.config.allow_user_registration', true)) {
        $router->get('register', ['middleware' => 'auth.guest', 'as' => 'register', 'uses' => 'AuthController@getRegister']);
        $router->post('register', ['as' => 'register.post', 'uses' => 'AuthController@postRegister']);
        $router->post('registerajax', ['as' => 'register.postajax', 'uses' => 'AuthController@postAjaxRegister']);
    }
    # Account Activation
    $router->get('activate/{userId}/{activationCode}', 'AuthController@getActivate');
    # Reset password
    $router->get('reset', ['as' => 'reset', 'uses' => 'AuthController@getReset']);
    $router->post('reset', ['as' => 'reset.post', 'uses' => 'AuthController@postReset']);
    $router->post('resetajax', ['as' => 'reset.postajax', 'uses' => 'AuthController@postAjaxReset']);
    $router->get('reset/{id}/{code}', ['as' => 'reset.complete', 'uses' => 'AuthController@getResetComplete']);
    $router->post('reset/{id}/{code}', ['as' => 'reset.complete.post', 'uses' => 'AuthController@postResetComplete']);
    # Logout
    $router->get('logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);
});

$router->group(['prefix' => 'account'], function (Router $router) {
    $router->get('profile', ['middleware' => 'logged.in', 'as' => 'account.profile', 'uses' => 'AccountController@profile']);
    $router->put('profile', ['middleware' => 'logged.in', 'as' => 'account.update', 'uses' => 'AccountController@update']);
    $router->put('profileauth', ['middleware' => 'logged.in', 'as' => 'account.authupdate', 'uses' => 'AccountController@authUpdate']);
    $router->put('remove-org', ['middleware' => 'logged.in', 'as' => 'account.org.remove', 'uses' => 'AccountController@removeOrg']);
});
