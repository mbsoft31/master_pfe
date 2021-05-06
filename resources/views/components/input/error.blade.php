@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ __($message) }}</p>
@enderror
