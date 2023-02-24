@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex py-3 px-4 font-bold text-sm rounded-lg cursor-pointer transition bg-gray-600/25 active:scale-95'
            : 'flex py-3 px-4 font-bold text-sm rounded-lg cursor-pointer transition hover:bg-gray-600/25 active:scale-95';
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
</li>