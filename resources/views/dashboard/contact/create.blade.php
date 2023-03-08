<x-dashboard-layout>
    <div class="p-4">
        <div class="space-y-4 p-4 bg-white rounded-lg max-w-screen-md">
            <a href="{{ route('contacts.index') }}" class="btn btn-neutral">Daftar Kontak</a>
            <form action="{{ route('contacts.store') }}" method="post" class="grid gap-4">
                @csrf
                <label class="block">
                    <span class="label">Nama kontak</span>
                    <input type="text" name="name" class="input" value="{{ old('name') }}" placeholder="nama sosmed" required>
                    @error('name')
                        <span class="label text-rose-500">{{ $message }}</span>
                    @enderror
                </label>
                <label class="block">
                    <span class="label">Nomer</span>
                    <input type="number" name="phone" class="input" value="{{ old('phone') }}" placeholder="nomer" required>
                    @error('phone')
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