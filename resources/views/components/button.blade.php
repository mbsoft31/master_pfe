@props(['style' => 'default'])

@php
    $styles = [
        "default" => "text-gray-700 bg-transparent border border-transparent",
        "blue" => "text-blue-600 bg-transparent border border-blue-600"
    ]
@endphp

<button type="button" {{ $attributes->merge(["class" => "btn " . $styles[$style]]) }}>
    {{ $slot }}
</button>
