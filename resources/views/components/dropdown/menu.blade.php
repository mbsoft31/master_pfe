@props(['tag' => 'ul' ])


@if($tag == 'ul')
<ul
    {{ $attributes->merge(["class" => "dropdown-menu absolute z-50 hidden py-2 px-0 m-0 text-base text-gray-900 bg-white border border-gray-900 rounded-lg"]) }}
>
@else
<div
    {{ $attributes->merge(["class" => "dropdown-menu absolute z-50 hidden py-2 px-0 m-0 text-base text-gray-900 bg-white border border-gray-900 rounded-lg"]) }}
>
@endif
    {{ $slot }}
@if($tag == 'ul')
</ul>
@else
</div>
@endif
