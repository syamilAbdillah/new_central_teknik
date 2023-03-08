@props(['socials', 'contacts'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-white">
        <div class="min-h-screen overflow-x-hidden bg-midnight bg-wave">

            {{-- NAVBAR --}}
            <nav class="fixed top-0 inset-x-0 z-50 transition" id="landing-nav" x-data="landing_navbar_toggle">
                <div class="w-full max-w-screen-md mx-auto px-6 py-3">
                    {{-- DESKTOP MENU --}}
                    <ul class="hidden md:flex justify-between items-center">
                        <x-landing-nav-link 
                            :href="route('landing.home')" 
                            :active="request()->routeIs('landing.home')"
                        >
                            Home
                        </x-landing-nav-link>
                        <x-landing-nav-link 
                            :href="route('landing.products')" 
                            :active="request()->routeIs('landing.products')"
                        >
                            Daftar Produk
                        </x-landing-nav-link>
                        <x-landing-nav-link 
                            :href="route('landing.merks.index')" 
                            :active="request()->routeIs('landing.merks.*')"
                        >
                            Merk
                        </x-landing-nav-link>
                        <x-landing-nav-link 
                            :href="route('landing.about')" 
                            :active="request()->routeIs('landing.about')"
                        >
                            Tentang Kami
                        </x-landing-nav-link>
                        <x-landing-nav-link 
                            :href="route('landing.services')" 
                            :active="request()->routeIs('landing.services')"
                        >
                            Jasa
                        </x-landing-nav-link>
                    </ul>

                    {{-- RESPONSIVE NAVBAR --}}
                    <div class="flex md:hidden justify-between items-center">
                        <a href="{{route('landing.home')}}" class="font-black">NCT</a>
                        <x-menu-icon @click="toggle"></x-menu-icon>
                    </div>

                    <div class="md:hidden absolute top-18 right-6 bg-abyss rounded-lg p-4 border border-slate-600 shadow" x-show="!hide" @click.outside="close" x-transition>
                        <ul class="flex flex-col gap-1">
                            <x-landing-responsive-nav-link 
                                :href="route('landing.home')" 
                                :active="request()->routeIs('landing.home')"
                            >
                                Home
                            </x-landing-responsive-nav-link>
                            <x-landing-responsive-nav-link 
                                :href="route('landing.products')" 
                                :active="request()->routeIs('landing.products')"
                            >
                                Daftar Produk
                            </x-landing-responsive-nav-link>
                            <x-landing-responsive-nav-link 
                                :href="route('landing.merks.index')" 
                                :active="request()->routeIs('landing.merks.*')"
                            >
                                Merk
                            </x-landing-responsive-nav-link>
                            <x-landing-responsive-nav-link 
                                :href="route('landing.about')" 
                                :active="request()->routeIs('landing.about')"
                            >
                                Tentang Kami
                            </x-landing-responsive-nav-link>
                            <x-landing-responsive-nav-link 
                                :href="route('landing.services')" 
                                :active="request()->routeIs('landing.services')"
                            >
                                Jasa
                            </x-landing-responsive-nav-link>

                        </ul>
                    </div>
                </div>
            </nav>
            <main class="px-4 pt-20 pb-36 w-full max-w-screen-md min-h-screen mx-auto">
                {{ $slot }}
            </main>

            <footer class="bg-abyss text-white">
                <div class="w-full max-w-screen-md mx-auto">
                    <x-section>
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <h1 class="text-2xl font-black">New Central Teknik</h1>
                                <p>Jl.anjasmoro tgh 2 no 28 RT 02 RW 06 Kelurahan Karangayu, Kecamatan Semarang Barat
                                </p>
                            </div>
    
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <h2 class="font-bold">Sosial Media</h2>
                                    <ul class="flex flex-col gap-1">
                                        @forelse ($socials as $social)
                                            <li>
                                                <a href="{{ $social->link }}" class="inline-flex items-center gap-1">
                                                    <img src="{{$social->image}}" alt="{{$social->name}}" class="w-4">
                                                    {{$social->name}}
                                                </a>
                                            </li>
                                        @empty
                                            <li>
                                                <a href="#" class="inline-flex items-center gap-1">
                                                    blum ada data
                                                </a>
                                            </li>
                                        @endforelse
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <h2 class="font-bold">Kontak</h2>
                                    <ul class="flex flex-col gap-1">
                                        @forelse ($contacts as $contact)
                                            <li>
                                                <a href="#" class="inline-flex items-center gap-1">
                                                    <img src="https://seeklogo.com/images/W/whatsapp-icon-logo-BDC0A8063B-seeklogo.com.png" alt="whatssapp" class="w-4">
                                                    <span> 
                                                        {{$contact->phone}} - {{$contact->name}}
                                                    </span>
                                                </a>
                                            </li>
                                            
                                        @empty
                                            <li>
                                                <a href="#" class="inline-flex items-center gap-1">
                                                    <span> 
                                                        belum ada kontak
                                                    </span>
                                                </a>
                                            </li>
                                            
                                        @endforelse


                                        {{-- <li>
                                            <a href="https://api.whatsapp.com/send?phone=+6282143957546&text=hello" class="inline-flex items-center gap-1">
                                                <img src="https://seeklogo.com/images/W/whatsapp-icon-logo-BDC0A8063B-seeklogo.com.png" alt="whatssapp" class="w-4">
                                                <span> 
                                                   082143957546 (marketing)
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://api.whatsapp.com/send?phone=+6281325787107&text=hello" class="inline-flex items-center gap-1">
                                                <img src="https://seeklogo.com/images/W/whatsapp-icon-logo-BDC0A8063B-seeklogo.com.png" alt="whatssapp" class="w-4">
                                                <span> 
                                                    081325787107 (jasa)
                                                 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://api.whatsapp.com/send?phone=+6282135565796&text=hello" class="inline-flex items-center gap-1">
                                                <img src="https://seeklogo.com/images/W/whatsapp-icon-logo-BDC0A8063B-seeklogo.com.png" alt="whatssapp" class="w-4">
                                                <span> 
                                                    082135565796 (marketing)
                                                 </span>
                                            </a>
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </x-section>
                </div>
            </footer>
        </div>
    </body>
</html>
