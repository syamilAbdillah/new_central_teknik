@props(['title', 'value'])

<div class="p-6 bg-white rounded-lg flex items-center gap-4">
    <div class="p-4 rounded-lg bg-neutral-500">
        <div class="w-12 h-12">
            {{ $slot }}
        </div>
    </div>
    <div class="flex flex-col">
        <h1 class="text-2xl font-black truncate">{{ $value }}</h1>
        <p class="text-lg font-medium">{{ $title }}</p>
    </div>
</div>