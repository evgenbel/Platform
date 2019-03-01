@include('partials.notifications')
{!! Form::open(['route' => 'account.update', 'method' => 'put']) !!}
<div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
    <label for="firstname"> {{ trans('user::users.form.first-name') }}</label>
    <input name="first_name" type="text" class="form-control" id="firstname" placeholder="Firstname"
           value="{{ old('first_name', $profile->first_name)}}">
    {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
    <label for="lastname">{{ trans('user::users.form.last-name') }}</label>
    <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="last_name"
           value="{{ old('last_name', $profile->last_name)}}">
    {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('dob') ? ' has-error' : '' }}">
    <label for="dob">{{ trans('user::users.form.date-bird') }}</label>
    <input data-provide="datepicker" data-date-format="dd.mm.yyyy" data-date-autoclose="true"
           value="{{ old('dob', $profile->dob->format('d.m.Y') ) }}"
           data-date-language="ru" class="form-control" name="dob" id="dob" placeholder="Date of bird">
    {!! $errors->first('dob', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
    <label>{{ trans('user::users.form.gender') }}</label>
    <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary {{ old('gender', $profile->gender)=='male'?'active':'' }}">
            <input type="radio" name="gender" id="gender_male" value="male"
                    {{ old('gender', $profile->gender)=='male'?'checked':'' }}>{{ trans('user::profile.male') }}
        </label>
        <label class="btn btn-primary {{ old('gender', $profile->gender)=='female'?'active':'' }}">
            <input type="radio" name="gender" id="gender_female" value="female"
                    {{ old('gender', $profile->gender)=='female'?'checked':'' }}> {{ trans('user::profile.female') }}
        </label>
    </div>
    {!! $errors->first('gender', '<span class="help-block">:message</span>') !!}
</div>
<button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
