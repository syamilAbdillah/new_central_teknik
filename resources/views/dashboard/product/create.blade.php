<x-dashboard-layout>
    <div class="p-4">
        <div class="p-4 space-y-4 bg-white rounded-lg w-full max-w-screen-md">
            <a href="{{ route('products.index') }}" class="btn btn-neutral">{{ __('Daftar Produk') }}</a>
            <form action="{{ route('products.store') }}" method="post" class="grid gap-4" enctype="multipart/form-data">
                @csrf
                <label class="block">
                    <span class="label">{{__('Nama Produk')}}</span>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="{{__('nama produk')}}" required class="input">
                    @error('name')
                        <span class="label text-rose-500">{{ $message }}</span>    
                    @enderror
                </label>
                <label class="block">
                    <span class="label">{{ __('Merk') }}</span>
                    <select name="merk_id" class="input">
                        @forelse ($merks as $merk)
                            <option value="{{ $merk->id }}">{{ $merk->name }}</option>
                        @empty
                            <option>belum ada data merk</option>
                        @endforelse
                    </select>
                    @error('merk_id')
                        <span class="label text-rose-500">{{ $message }}</span>
                    @enderror
                </label>

                <label class="block" x-data="image_preview">
                    <span class="label">Gambar Produk</span>
                    <input type="file" @input="handleInput" name="image" required accept="image/*" class="input">
                    @error('image')
                        <span class="label text-rose-500">{{ $message }}</span>
                    @enderror
                    <img :src="src" alt="preview" class="max-w-xs mt-2" x-show="src">
                </label>

                <div class="flex justify-end items-center gap-2">
                    <button type="reset" class="btn bg-neutral-100">{{__('Batal')}}</button>
                    <button type="submit" class="btn btn-success">{{ __('Simpan') }}</button>
                </div>
            
            </form>
        </div>
        
    </div>
</x-dashboard-layout>