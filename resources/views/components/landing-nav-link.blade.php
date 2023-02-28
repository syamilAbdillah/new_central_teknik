@props(['active'])


@php
$classes = ($active ?? false)
            ? 'font-bold underline'
            : 'hover:underline';
@endphp

<li><a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a></li>