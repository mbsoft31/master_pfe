@props(['tag' => 'button'])

@if($tag == 'button')
    <button
        {{ $attributes->merge(["class" => "dropdown-toggle whitespace-nowrap"]) }}
        type="button"
        data-bs-toggle="dropdown"
        aria-expanded="false"
    >
        {{ $slot }}
    </button>
@elseif($tag == 'a')
    <a
        {{ $attributes->merge(["class" => "dropdown-toggle  whitespace-nowrap"]) }}
        href="#"
        role="button"
        data-bs-toggle="dropdown"
        aria-expanded="false"
    >
        {{ $slot }}
    </a>
@endif
