@props(['textColor', 'bgColor'])

@php
    $textColor = match($textColor) {
        'gray' => 'bg-gray-100',
        'blue' => 'bg-blue-100',
        'yellow' => 'bg-yellow-100',
        default => 'bg-gray-100',
    };

    $bgColor = match($bgColor) {
        'gray' => 'bg-gray-100',
        'blue' => 'bg-blue-100',
        'yellow' => 'bg-yellow-100',
        default => 'bg-gray-100',
    }
@endphp
<button {{ $attributes }} class="{{ $textColor }} {{ $bgColor}}rounded-xl px-3 py-1 text-base">
    {{ $slot }} </button>

