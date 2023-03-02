<x-catalogue-layout>
    <x-section>
        <div class="space-y-12">
            <h1 class="text-6xl font-black">New Central Teknik</h1>
            <div class="max-w-md">
                <p class=" text-neutral-300 text-xl">
                    New Central teknik Telah melayani berbagai Perusahaan Industri Baik dalam hal kebutuhan Sparepart maupun Jasa Pengadaan, Perbaikan, Perawatan Unit Pendingin Kami 
                </p>
            </div>
        </div>
    </x-section>
    <x-section>
        <div class="space-y-8">
            <h1 class="text-2xl text-center">Merk</h1>
            <x-cards-layout>
                @foreach ($merks as $merk)
                    <x-merk-card
                        :href="route('landing.merks.detail', ['merk' => $merk])"
                        :image="$merk->image"
                        :name="$merk->name"
                    ></x-merk-card>
                @endforeach
            </x-cards-layout>
            <div class="flex justify-center">
                <a href="{{ route('landing.merks.index') }}" class="btn  bg-neutral-900/25 text-white">
                    Tampilkan lebih banyak
                </a>
            </div>
        </div>
    </x-section>
    <x-section>
        <div class="space-y-8">
            <h1 class="text-2xl text-center">Produk</h1>
            <x-cards-layout>
                @foreach ($products as $product)
                    <div>
                        <x-product-card 
                            :image="$product->image"
                            :name="$product->name"
                        ></x-product-card>
                    </div>
                @endforeach
            </x-cards-layout>
            <div class="flex justify-center">
                <a href="{{ route('landing.products') }}" class="btn bg-neutral-900/25 text-white">
                    Tampilkan lebih banyak
                </a>
            </div>
        </div>
    </x-section>
</x-catalogue-layout>