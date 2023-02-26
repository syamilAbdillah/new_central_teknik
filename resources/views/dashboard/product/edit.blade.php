<x-dashboard-layout>
    <div class="p-4">
        <div class="p-4 space-y-4 bg-white rounded-lg w-full max-w-screen-md">
            <a href="{{ route('products.index') }}" class="btn btn-neutral">{{ __('Daftar Produk') }}</a>
            <form action="{{ route('products.update', ['product' => $product]) }}" method="post" class="grid gap-4">
                @csrf
                @method('PATCH')
                <label class="block">
                    <span class="label">{{__('Nama Produk')}}</span>
                    <input type="text" name="name" value="{{ $product->name }}" placeholder="{{__('nama produk')}}" required class="input">
                    @error('name')
                        <span class="label text-rose-500">{{ $message }}</span>    
                    @enderror
                </label>
                <label class="block">
                    <span class="label">{{__('Harga')}}</span>
                    <input type="number" name="price" value="{{ $product->price }}" placeholder="{{__('harga produk')}}" required class="input">
                    @error('price')
                        <span class="label text-rose-500">{{ $message }}</span>    
                    @enderror
                </label>

                <div class="flex justify-end items-center gap-2">
                    <button type="reset" class="btn bg-neutral-100">{{__('Batal')}}</button>
                    <button type="submit" class="btn btn-success">{{ __('Simpan') }}</button>
                </div>
            
            </form>
        </div>
        
    </div>
</x-dashboard-layout>