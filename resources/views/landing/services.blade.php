<x-catalogue-layout :socials="$socials">
    <x-section>
        <div class="grid md:grid-cols-2 gap-24 md:gap-6">
            <div class="z-20 space-y-6">
                <div class="flex gap-2 flex-wrap items-center">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-black">Perbaikan,</h1>
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-black">Perawatan,</h1>
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-black">Pengadaan.</h1>
                </div>
                <p class="text-neutral-200 whitespace-normal mr-8">New Central Teknik menerima jasa Perbaikan, Perawatan dan pengadaan Unit pendingin. Didukung dengan teknisi yang ahli pada bidang pendingin. Dengan moto kami memberikan kepuasan dalam berbisnis, Sehingga kami selalu memberikan pelayanan terbaik bagi Customer.</p>
                <div class="relative" x-data="{show: false}">
                    <button @click="show = !show" class="btn bg-slate-700 text-white gap-2">
                        hubungi kami
                        <div class="w-4 md:-rotate-90 transition" x-bind:class="show && 'rotate-180 md:rotate-90'">
                            <x-down-icon class="icon"></x-down-icon>
                        </div>
                    </button>
                    <div x-cloak x-transition x-show="show" @click.outside="show = false" class="absolute z-20 left-12 top-12 md:left-36 md:-top-24 w-72 rounded-lg p-6 bg-slate-800 shadow-lg">
                        <ul class="flex flex-col gap-3">
                            <li class="inline-flex items-center gap-2">
                                <img src="https://seeklogo.com/images/W/whatsapp-icon-logo-BDC0A8063B-seeklogo.com.png" alt="whatssapp" class="w-4">
                                <span> 
                                   082143957546 (marketing)
                                </span>
                            </li>
                            <li class="inline-flex items-center gap-2">
                                <img src="https://seeklogo.com/images/W/whatsapp-icon-logo-BDC0A8063B-seeklogo.com.png" alt="whatssapp" class="w-4">
                                <span> 
                                    081325787107 (jasa)
                                </span>
                            </li>
                            <li class="inline-flex items-center gap-2">
                                <img src="https://seeklogo.com/images/W/whatsapp-icon-logo-BDC0A8063B-seeklogo.com.png" alt="whatssapp" class="w-4">
                                <span> 
                                    082135565796 (admin)
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="w-full">
                <div class="columns-2">
                    <img src="/jasa-1.png" class="rounded-md mb-4" alt="jasa 1">
                    <img src="/jasa-4.png" class="rounded-md mb-4" alt="jasa 1">
                    <img src="/jasa-2.png" class="rounded-md mb-4" alt="jasa 1">
                    <img src="/jasa-3.png" class="rounded-md mb-4" alt="jasa 1">
                </div>
            </div>
        </div>
    </x-section>
</x-catalogue-layout>