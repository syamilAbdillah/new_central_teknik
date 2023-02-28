<x-catalogue-layout>
    <x-section>
        <h1 class="text-4xl font-black text-center">daftar merk</h1>
    </x-section>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 p-6">
        @forelse ($merks as $merk)
            <a class="flex flex-col items-center" href="{{ route('landing.merks.detail', ['merk' => $merk]) }}">
                <img src="{{ $merk->image }}" alt="{{ $merk->name }}-{{ $merk->id }}">
                <span class="text-lg">{{ $merk->name }}</span>
            </a>
        @empty
            <div class="grid place-content-center col-span-2 sm:col-span-3 md:col-span-4">
                <h1 class="text-2xl font-thin font-mono text-neutral-400">
                    belum ada data merk
                </h1>
            </div>
        @endforelse
    </div>
</x-catalogue-layout>