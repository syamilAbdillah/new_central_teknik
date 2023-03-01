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
                        <th>merk</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)  
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-16">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->merk->name }}</td>
                            <td>
                                <div class="flex gap-1 flex-col sm:flex-row items-center">
                                    <a class="btn btn-neutral" href="{{ route('products.edit', ['product' => $product]) }}">edit</a>
                                    
                                    <button class="btn btn-danger" x-data @click.prevent="$dispatch('open-modal', 'product-delete-confirmation-{{$product->id}}')" type="submit">delete</button>
                                    <x-modal name="product-delete-confirmation-{{$product->id}}" focusable>
                                        <x-delete-confirm>
                                            <form method="post" action="{{ route('products.destroy', ['product' => $product]) }}" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" >hapus</button>
                                            </form>
                                        </x-delete-confirm>
                                    </x-modal>
                                    {{-- <form action="{{ route('products.destroy', ['product' => $product]) }}" method="post" class="inline-flex">
                                        @csrf
                                        @method('DELETE')
                                    </form> --}}
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