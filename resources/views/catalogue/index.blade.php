<x-catalogue-layout>
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