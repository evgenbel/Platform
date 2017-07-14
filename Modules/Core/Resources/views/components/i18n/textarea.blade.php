<div class='{{ $errors->has("{$lang}.{$fieldName}") ? ' has-error' : '' }}'>
    {!! Form::label("{$lang}[{$fieldName}]", $labelName) !!}
    <textarea class="{{ $editor->getEditorClass() }}" name="{{$lang}}[{$fieldName}]" rows="10" cols="80">{{ $slot }}</textarea>
    {!! $errors->first("{$lang}.{$fieldName}", '<span class="help-block">:message</span>') !!}
</div>
