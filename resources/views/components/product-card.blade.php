@props(['name', 'price', 'image'])

@php
    $arr = explode(' ', $name);
    $slug = join('_', $arr);    
@endphp

<a href="{{ route('catalogue.detail', ['product_slug' => $slug]) }}" class="block rounded-md overflow-hidden bg-white border shadow cursor-pointer">
    <img src="{{ $image }}" alt="{{ $name }}" class="aspect-square object-cover">
    <div class="flex flex-col gap-1 p-4">
        <span class="text-lg text-neutral-500 truncate">{{ $name }}</span>
        <span class="text-lg font-bold truncate">
            Rp. {{ number_format($price, 0, ',', '.') }}
        </span>
    </div>
</a>