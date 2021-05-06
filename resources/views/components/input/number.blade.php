@props(['id'])
<input
    id="{{$id}}"
    name="{{$id}}"
    type="number"
    {{ $attributes->merge( [ "class" => "form-input rounded-md" ] ) }}
 />
