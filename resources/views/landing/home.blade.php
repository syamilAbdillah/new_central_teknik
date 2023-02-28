<x-catalogue-layout>
    <x-section>
        <div class="space-y-4">
            <h1 class="text-6xl font-black text-center">New Central Teknik</h1>
            <p class="text-center text-neutral-400 text-xl">
                New Central teknik Telah melayani berbagai Perusahaan Industri Baik dalam hal kebutuhan Sparepart maupun Jasa Pengadaan,Perbaikan,Perawatan Unit Pendingin Kami 
            </p>
        </div>
    </x-section>
    <x-section>
        <div class="space-y-4">
            <h1 class="text-2xl font-bold text-center">Merk</h1>
            <div class="grid gap-4 grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
                @foreach ($merks as $merk)
                    <div class="flex justify-center items-center">
                        <img src="{{ $merk->image }}" alt="{{ $merk->name }}">
                    </div>
                @endforeach
            </div>
        </div>
    </x-section>
</x-catalogue-layout>