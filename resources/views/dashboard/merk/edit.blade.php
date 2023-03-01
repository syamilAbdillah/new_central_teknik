<x-dashboard-layout>
    <div class="p-4">
        <div class="space-y-4 p-4 bg-white rounded-lg max-w-screen-md">
            <a href="{{ route('merks.index') }}" class="btn btn-neutral">Daftar Merk</a>
            <form action="{{ route('merks.update', ['merk' => $merk]) }}" method="post" class="grid gap-4" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <label class="block">
                    <span class="label">Name Merk</span>
                    <input type="text" name="name" class="input" value="{{ $merk->name }}" placeholder="nama merk" required>
                    @error('name')
                        <span class="label text-rose-500">{{ $message }}</span>
                    @enderror
                </label>
                <div class="flex flex-col gap-2" x-data="update_image">
                    <label class="block" x-data="image_preview">
                        <span class="label">Logo Merk</span>
                        <input accept="image/*" type="file" name="update_image" class="hidden" @input="handleInput" x-model="file">
                        <img :src="src" alt="preview" x-show="file" class="max-w-xs" >
                        <img src="{{ $merk->image }}" alt="{{ $merk->name }}" class="max-w-xs" x-show="!file" >
                        @error('update_image')
                            <span class="label text-rose-500">{{ $message }}</span>
                        @enderror

                        <span type="button" class="btn bg-neutral-100 mt-2" x-show="!file">upload gambar</span>
                    </label>
                    <div class="flex">
                        <button type="button" class="btn bg-neutral-100" @click="file = null" x-show="file">batal upload</button>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-2">
                    <button type="reset" class="btn bg-neutral-100" >batal</button>
                    <button type="submit" class="btn btn-success" >simpan</button>
                </div>

            </form>
        </div>
    </div>
</x-dashboard-layout>