<x-catalogue-layout>
    <x-section>
        <h1 class="text-4xl text-center">Merk: "{{$merk->name}}"</h1>
    </x-section>
    <x-cards-layout>
        @foreach ($merk->products as $product)
            <div>
                <x-product-card 
                    :image="$product->image"
                    :name="$product->name"
                ></x-product-card>
            </div>
        @endforeach
    </x-cards-layout>
</x-catalogue-layout>