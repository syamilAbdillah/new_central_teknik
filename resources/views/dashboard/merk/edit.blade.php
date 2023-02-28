<x-dashboard-layout>
    <div class="p-4">
        <div class="space-y-4 p-4 bg-white rounded-lg max-w-screen-md">
            <a href="{{ route('merks.index') }}" class="btn btn-neutral">Daftar Merk</a>
            <form action="{{ route('merks.update', ['merk' => $merk]) }}" method="post" class="grid gap-4">
                @csrf
                @method('PATCH')
                <label class="block">
                    <span class="label">Name Merk</span>
                    <input type="text" name="name" class="input" value="{{ $merk->name }}" placeholder="nama merk" required>
                    @error('name')
                        <span class="label text-rose-500">{{ $message }}</span>
                    @enderror
                </label>

                <div class="flex items-center justify-end gap-2">
                    <button type="reset" class="btn bg-neutral-100" >batal</button>
                    <button type="submit" class="btn btn-success" >simpan</button>
                </div>

            </form>
        </div>
    </div>
</x-dashboard-layout>