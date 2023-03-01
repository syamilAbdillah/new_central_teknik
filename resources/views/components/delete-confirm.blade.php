<div class="p-6 space-y-6">
    <h1 class="text-2xl font-bold">Peringatan !</h1>
    <p class="text-neutral-400">data yang dihapus tidak dapat dikembalikan kembali</p>
    <div class="flex items-center justify-end gap-2">
        <button class="btn bg-neutral-200" @click="$dispatch('close')">
            batal
        </button>

        {{ $slot }}
    </div>
</div>