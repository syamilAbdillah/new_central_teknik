@props(['name', 'image'])

@php
    $arr = explode(' ', $name);
    $slug = join('_', $arr);    
@endphp

<a {{ $attributes->merge(['class' => 'block rounded-md cursor-pointer bg-slate-500/25 overflow-hidden']) }} >
    <img src="{{ $image }}" alt="{{ $name }}">
    <div class="py-1 px-3">
        <span class="text-lg text-white truncate">{{ $name }}</span>
    </div>
</a>