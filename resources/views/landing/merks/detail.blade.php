<x-catalogue-layout>
    <x-section>
        <h1 class="text-4xl font-black text-center">Merk: "{{$merk->name}}"</h1>
    </x-section>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 p-6">
        @forelse ($merk->products as $product)
            <a class="flex flex-col items-center">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
                <span class="text-lg font-semibold">{{ $product->name }}</span>
                <span class="text-neutral-400">{{ $merk->name }}</span>
            </a>
        @empty
            <div class="grid place-content-center col-span-2 sm:col-span-3 md:col-span-4">
                <h1 class="text-2xl font-thin font-mono text-neutral-400">
                    belum ada data produk
                </h1>
            </div>
        @endforelse
    </div>
</x-catalogue-layout>