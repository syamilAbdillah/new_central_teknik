<x-catalogue-layout>
    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($products as $product)
            <div class="space-y-2">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="rounded-md aspect-square object-cover">
                <div class="flex justify-between gap-1">
                    <div class="flex-1">
                        <h1 class="text-lg font-bold truncate">{{ $product->name }}</h1>
                    </div>
                    <div class="flex-none">
                        <p class="truncate">Rp. {{ $product->price }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-catalogue-layout>