<h3>Я состою в спортивных организациях</h3>
<ul class="my-org-list">
@foreach ($profile->orgs as $org)
    <li class="org_{{ $org->id }}">
        <a href="{{ $org->site }}">{{ $org->name }}</a>
        <a href="{{ route('sport.user.unsubscribe', $org->id) }}" class="ld-ext-left"
           title="{{ trans('sport::org.actions.unsubscribe') }}" data-remove="{{ $org->id }}"><i class="remove-hover glyphicon glyphicon-trash"></i></a>
    </li>
@endforeach
</ul>


{!! Form::open(['route' => 'sport.orgs.subscribe', 'method' => 'put', 'id'=>'subscribe-org']) !!}
    <div class="form-group">
        <label for="exampleInputEmail1">Поиск организаций</label>
        <input class="form-control" name="org-subscribe" id="org-subscribe" />
    </div>

    <ul id="selected-subscribe-orgs">

    </ul>

    <div class="form-group">
        <div>
            <button type="submit" class="ld-ext-left btn btn-primary">Отправить запрос на вступление</button>
        </div>
    </div>

{!! Form::close() !!}

<a href="{{ route('sport.org.register') }}" class="btn btn-danger">Зарегистрировать новую организацию</a>
