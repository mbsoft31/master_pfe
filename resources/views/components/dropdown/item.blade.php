@props(['wrapped' => true, 'wrapTag' => 'li', 'tag' => 'a' ])


@if($wrapped)
@if($wrapTag == 'li')
<li>
@else
<div>
@endif
@endif
    <a
        {{ $attributes->merge(["class" => "dropdown-item block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"]) }}
        href="#"
    >
        {{ $slot }}
    </a>
@if($wrapped)
    @if($wrapTag == 'li')
        </li>
    @else
        </div>
    @endif
@endif
