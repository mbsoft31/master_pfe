@props(['id'])
<input
    id="{{$id}}"
    name="{{$id}}"
    type="password"
    {{ $attributes->merge(['class' => "form-input rounded-md" ]) }}
/>
