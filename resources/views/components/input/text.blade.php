@props(['id'])
<input
    id="{{$id}}"
    name="{{$id}}"
    type="text"
    {{ $attributes->merge(['class' => "form-input rounded-md" ]) }}
 />
