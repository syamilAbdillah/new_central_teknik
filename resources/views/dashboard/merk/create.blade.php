<x-dashboard-layout>
    <div class="p-4">
        <div class="space-y-4 p-4 bg-white rounded-lg max-w-screen-md">
            <a href="{{ route('merks.index') }}" class="btn btn-neutral">Daftar Merk</a>
            <form action="{{ route('merks.store') }}" method="post" class="grid gap-4" enctype="multipart/form-data">
                @csrf
                <label class="block">
                    <span class="label">Name Merk</span>
                    <input type="text" name="name" class="input" value="{{ old('name') }}" placeholder="nama merk" required>
                    @error('name')
                        <span class="label text-rose-500">{{ $message }}</span>
                    @enderror
                </label>
                <label class="block" x-data="image_preview">
                    <span class="label">Logo Merk</span>
                    <input type="file" @input="handleInput" name="image" accept="image/*" class="input"  placeholder="logo merk" required>
                    @error('image')
                        <span class="label text-rose-500">{{ $message }}</span>
                    @enderror

                    <template x-if="src">
                        <div class="flex flex-col mt-4 gap-2">
                            <span class="label">preview: </span>
                            <img class="max-w-xs" :src="src" alt="preview">
                        </div>
                    </template>
                </label>

                <div class="flex items-center justify-end gap-2">
                    <button type="reset" class="btn bg-neutral-100" >batal</button>
                    <button type="submit" class="btn btn-success" >simpan</button>
                </div>

            </form>
        </div>
    </div>
</x-dashboard-layout>