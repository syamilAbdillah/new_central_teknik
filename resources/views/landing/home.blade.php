<x-catalogue-layout>
    <x-section>
        <div class="space-y-4">
            <h1 class="text-6xl font-black md:text-center">New Central Teknik</h1>
            <p class="md:text-center text-neutral-300 text-xl">
                New Central teknik Telah melayani berbagai Perusahaan Industri Baik dalam hal kebutuhan Sparepart maupun Jasa Pengadaan,Perbaikan,Perawatan Unit Pendingin Kami 
            </p>
        </div>
    </x-section>
    <x-section>
        <div class="space-y-8">
            <h1 class="text-2xl font-bold text-center">Merk</h1>
            <div class="grid gap-4 grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
                @foreach ($merks as $merk)
                    <a href="{{ route('landing.merks.detail', ['merk' => $merk]) }}" class="flex flex-col items-center">
                        <img src="{{ $merk->image }}" alt="{{ $merk->name }}">
                        <span>{{ $merk->name }}</span>
                    </a>
                @endforeach
            </div>
            <div class="flex justify-center">
                <a href="{{ route('landing.merks.index') }}" class="btn  bg-neutral-900/25 text-white">
                    Tampilkan lebih banyak
                </a>
            </div>
        </div>
    </x-section>
    <x-section>
        <div class="space-y-8">
            <h1 class="text-2xl font-bold text-center">Produk</h1>
            <div class="grid gap-4 grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
                @foreach ($products as $product)
                    <a class="flex flex-col items-center">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}">
                        <span>{{ $product->name }}</span>
                        <span class="text-neutral-400">{{ $product->merk->name }}</span>
                    </a>
                @endforeach
            </div>
            <div class="flex justify-center">
                <a href="{{ route('landing.products') }}" class="btn bg-neutral-900/25 text-white">
                    Tampilkan lebih banyak
                </a>
            </div>
        </div>
    </x-section>
</x-catalogue-layout>