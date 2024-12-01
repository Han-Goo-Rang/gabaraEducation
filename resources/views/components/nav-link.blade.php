@props(['active'])

@php
$classes = $active ?? false ?
             'inline-flex items-center text-blue-900 text-sm text-blue-500':
             'inline-flex items-center text-blue-900 text-sm text-black-500';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
