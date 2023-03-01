@props(['show'])

<x-modal name="success-message" :show="$show" focusable>
    <div class="p-6 space-y-6">
        <div class="flex justify-center">
            <div class="h-36 w-36 rounded-full bg-emerald-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><polyline points="172 104 113.3 160 84 132" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polyline><circle cx="128" cy="128" r="96" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></circle></svg>
            </div>
        </div>
        <h1 class="text-2xl font-bold text-center">Berhasil !!</h1>
        <p class="lg text-neutral-500 text-center">{{$slot}}</p>
        <div class="flex justify-end">
            <button class="btn btn-success" @click="$dispatch('close')">tutup</button>
        </div>
    </div>
</x-modal>