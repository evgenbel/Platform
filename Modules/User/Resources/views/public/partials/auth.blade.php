{!! Form::open(['route' => 'account.authupdate', 'method' => 'put']) !!}
<div class="form-group has-feedback {{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
    <input type="email" name="email" class="form-control" autofocus
           placeholder="{{ trans('user::auth.email') }}" value="{{ old('email', $profile->email) }}">
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group has-feedback {{ $errors->has('password') ? ' has-error has-feedback' : '' }}">
    <input type="password" name="password" autocomplete="false" class="form-control" placeholder="{{ trans('user::auth.password') }}">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error has-feedback' : '' }}">
    <input type="password" name="password_confirmation"  autocomplete="false" class="form-control" placeholder="{{ trans('user::auth.password confirmation') }}">
    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
    {!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
</div>
<div class="row">
    <div class="col-xs-12">
        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('user::auth.register me') }}</button>
    </div>
</div>
{!! Form::close() !!}
