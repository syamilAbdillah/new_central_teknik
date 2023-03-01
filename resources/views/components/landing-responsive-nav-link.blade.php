@props(['active'])


@php
$classes = ($active ?? false)
            ? 'block rounded-md px-2 py-1 w-full bg-neutral-500/25 font-bold cursor-pointer'
            : 'block rounded-md px-2 py-1 w-full hover:bg-neutral-500/25 cursor-pointer';
@endphp

<li><a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a></li>