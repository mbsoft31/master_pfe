@props(['csrf' => 'false', 'action' => '#', 'args' => [], 'method' => 'POST'])

@php
     if( \Illuminate\Support\Facades\Route::has($action) )
        $action = route($action, $args);

@endphp

<form
    @if($action != '#' && !is_null($action)) action="{{ $action }}" @endif
    method="{{ $method }}"
    {{ $attributes->merge(["class" => "form"]) }}
>
    @if($csrf) @csrf @endif

    {{ $slot }}
</form>
