@props(['name', 'image'])

@php
    $arr = explode(' ', $name);
    $slug = join('_', $arr);    
@endphp

<div class="block" x-data="{ show: false }">
    <a {{ $attributes->merge(['class' => 'relative block pb-8 rounded-md cursor-pointer overflow-hidden']) }} @click="show = true">
        <img src="{{ $image }}" alt="{{ $name }}" class="w-full object-cover bg-neutral-400 aspect-square hover:scale-110 transition">
        <div class="absolute bg-slate-700 bottom-0 inset-x-0 py-1 px-3">
            <p class="text-white truncate">{{ $name }}</p>
        </div>
    </a>

    <div class="fixed inset-0 z-50 p-8 grid place-content-center bg-neutral-900/75" x-cloak x-show="show" x-transition>
        <div class="relative grid w-full max-w-screen-md">
            <img src="{{ $image }}" alt="{{ $name }}" @click.outside="show = false" class="max-h-96 bg-neutral-400">
            <p class="text-lg text-white text-center">{{ $name }}</p>
            <button class="absolute top-2 right-2 w-8 h-8 p-1 rounded-full bg-neutral-700/50 active:scalte-95 transition" @click="show = false">
                <x-close-icon></x-close-icon>
            </button>
        </div>
    </div>

</div>