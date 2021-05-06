@props(['id','types' => [], 'key' => 'id', 'value' => 'name', "noneSelected" => null])

<select
    id="{{$id}}"
    name="{{$id}}"
    {{ $attributes->merge( [ "class" => "form-input rounded-md" ] ) }}
>
    @if( ! is_null($noneSelected) )
        <option value="{{ null }}">{{ __($noneSelected) }}</option>
    @endif
    @foreach ($types as $type)
        <option value="{{ $type[$key] }}">{{ $type[$value] }}</option>
    @endforeach
</select>
