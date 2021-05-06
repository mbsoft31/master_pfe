@props(['value'])
<label
    {{ $attributes->merge(['class' => "text-sm font-semibold tracking-wide text-gray-700" ]) }}
>
    {{ __($value) }}
</label>