@props(['image', 'name'])

<a {{ $attributes->merge(['class' => 'flex flex-col items-center justify-center p-2 hover:bg-blue-900/25 rounded-lg hover:scale-105 transition']) }}>
    <img src="{{ $image }}" alt="{{ $name }}">
</a>