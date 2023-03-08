<div x-data @click="$store.sidebar_toggle.close()" :class="!$store.sidebar_toggle.show && 'hidden'" class="fixed inset-0 z-50 bg-gray-600/25 lg:hidden"></div>

<aside x-data :class="$store.sidebar_toggle.show ? 'translate-x-0': '-translate-x-64'" class="fixed left-0 inset-y-0 z-50 w-64 bg-neutral-500 text-neutral-50 overflow-y-auto transition lg:translate-x-0">
    <div class="flex justify-end p-2 lg:hidden">
        <x-button x-data @click="$store.sidebar_toggle.close()" class="hover:bg-gray-600/25 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-6 w-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </x-button>
    </div>
    <div class="flex justify-center py-6">
        <h1 class="text-2xl font-black">{{__("DashboardUI")}}</h1>
    </div>
    <ul class="p-4 grid gap-2">
        <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{__('Beranda')}}
        </x-sidebar-link>
        <x-sidebar-link :href="route('users.index')" :active="request()->routeIs('users.*')">
            {{__('Pengguna')}}
        </x-sidebar-link>
        <x-sidebar-link :href="route('products.index')" :active="request()->routeIs('products.*')">
            {{__('Produk')}}
        </x-sidebar-link>
        <x-sidebar-link :href="route('merks.index')" :active="request()->routeIs('merks.*')">
            {{__('Merk')}}
        </x-sidebar-link>
        <x-sidebar-link :href="route('socials.index')" :active="request()->routeIs('socials.*')">
            {{__('Sosmed')}}
        </x-sidebar-link>
    </ul>
</aside>

