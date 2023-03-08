<x-catalogue-layout :socials="$socials" :contacts="$contacts">
    <x-section>
        <h1 class="text-4xl text-center">daftar merk</h1>
    </x-section>
    <x-cards-layout>
        @foreach ($merks as $merk)
            <x-merk-card
                :href="route('landing.merks.detail', ['merk' => $merk])"
                :image="$merk->image"
                :name="$merk->name"
            ></x-merk-card>
        @endforeach
    </x-cards-layout>
</x-catalogue-layout>