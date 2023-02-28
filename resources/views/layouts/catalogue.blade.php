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
    <body class="font-sans antialiased text-neutral-700">
        <div class="min-h-screen bg-white">

            <nav class="fixed top-0 inset-x-0 border-b bg-white">
                <ul class="w-full max-w-screen-md mx-auto flex justify-between items-center px-4 py-6">
                    <li><a href="#" class="hover:underline">Home</a></li>
                    <li><a href="#" class="hover:underline">Daftar Produk</a></li>
                    <li><a href="#" class="hover:underline">Merk</a></li>
                    <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="#" class="hover:underline">Jasa</a></li>
                </ul>
            </nav>
            <main class="px-4 pt-20 pb-36 w-full max-w-screen-md min-h-screen mx-auto">
                {{ $slot }}
            </main>

            <footer class="bg-neutral-600 text-neutral-50">
                <div class="w-full max-w-screen-md mx-auto">
                    <x-section>
                        <h1 class="text-2xl font-black">New Central Teknik</h1>
                        <p class="text-lg">Jl.anjasmoro tgh 2 no 28 RT 02 RW 06 Kelurahan Karangayu, Kecamatan Semarang Barat
                        </p>

                        <div class="grid sm:grid-cols-2">
                            <div class="space-y-2">
                                <h2 class="font-bold">Sosial Media</h2>
                                <ul class="flex flex-col gap-1">
                                    <li>
                                        <a href="#" class="inline-flex items-center gap-1">
                                            <img src="https://seeklogo.com/images/F/facebook-logo-966BBFBC34-seeklogo.com.png" alt="instagram" class="w-4">
                                            Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="inline-flex items-center gap-1">
                                            <img src="https://seeklogo.com/images/I/instagram-new-2016-logo-D9D42A0AD4-seeklogo.com.png" alt="instagram" class="w-4">
                                            Instagram
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="inline-flex items-center gap-1">
                                            <img src="https://seeklogo.com/images/T/tokopedia-logo-5340B636F6-seeklogo.com.png" alt="toko pedia" class="w-4">
                                            Tokopedia
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="space-y-2">
                                <h2 class="font-bold">Kontak</h2>
                                <ul class="flex flex-col gap-1">
                                    <li>
                                        <a href="#" class="inline-flex items-center gap-1">
                                            <img src="https://seeklogo.com/images/W/whatsapp-icon-logo-BDC0A8063B-seeklogo.com.png" alt="whatssapp" class="w-4">
                                            (marketing)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="inline-flex items-center gap-1">
                                            <img src="https://seeklogo.com/images/W/whatsapp-icon-logo-BDC0A8063B-seeklogo.com.png" alt="whatssapp" class="w-4">
                                            (jasa)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="inline-flex items-center gap-1">
                                            <img src="https://seeklogo.com/images/W/whatsapp-icon-logo-BDC0A8063B-seeklogo.com.png" alt="whatssapp" class="w-4">
                                            (admin)
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </x-section>
                </div>
            </footer>
        </div>
    </body>
</html>
