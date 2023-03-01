<x-dashboard-layout>
    <div class="p-4 space-y-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <x-stat title="Pengguna" :value="$user">
                <x-user-icon></x-user-icon>
            </x-stat>
            <x-stat title="Merk" :value="$merk">
                <x-merk-icon></x-merk-icon>
            </x-stat>
            <x-stat title="Produk" :value="$product">
                <x-product-icon></x-product-icon>
            </x-stat>
        </div>
    </div>
</x-dashboard-layout>
