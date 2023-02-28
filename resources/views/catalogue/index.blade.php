<x-catalogue-layout>
    <x-section>
        <h1 class="text-6xl font-black text-center">New Central Teknik</h1>
        <p class="text-center text-neutral-400 text-xl">
            New Central teknik Telah melayani berbagai Perusahaan Industri Baik dalam hal kebutuhan Sparepart maupun Jasa Pengadaan,Perbaikan,Perawatan Unit Pendingin Kami 
        </p>
    </x-section>
    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($products as $product)
            <x-product-card 
                :name="$product->name" 
                :price="$product->price"
                :image="$product->image"
            ></x-product-card>
        @endforeach
    </div>
</x-catalogue-layout>