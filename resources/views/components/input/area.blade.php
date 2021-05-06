@props(['id'])
<textarea
    id="{{$id}}"
    name="{{$id}}"
    {{ $attributes->merge(['class' => "form-textarea rounded-md", "rows" => "2" ]) }}
></textarea>
