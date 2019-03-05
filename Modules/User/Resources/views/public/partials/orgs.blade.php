<h3>Я состою в спортивных организациях</h3>
<ul>
@foreach ($profile->orgs as $org)
    <li> <a href="{{ $org->site }}">{{ $org->name }}</a> <a href="{{ route('account.org.remove') }}" title="remove"><i class="remove-hover glyphicon glyphicon-trash"></i></a></li>
@endforeach
</ul>
