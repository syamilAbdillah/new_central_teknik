<x-dashboard-layout>
    <div class="p-4">
        <div class="space-y-4 p-4 bg-white rounded-lg">
            <div class="flex items-center">
                <a href="{{ route('products.create') }}" class="btn btn-success">
                    {{ __('Tambah Data Produk') }}
                </a>
            </div>
            <x-table>
                <thead>
                    <tr>
                        <th>no</th>
                        <th>gambar</th>
                        <th>nama produk</th>
                        <th>harga</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)  
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-12 h-12 rounded-md object-cover">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <div class="flex gap-1 flex-col sm:flex-row items-center">
                                    <button class="btn btn-neutral">edit</button>
                                    <button class="btn btn-danger">delete</button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <p class="text-center">belum ada produk</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </x-table>
        </div>
    </div>
</x-dashboard-layout>