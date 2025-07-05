<div id="top-header" class="w-full hidden md:flex justify-between border-b border-gray-300 py-3 px-32">
    <div class="w-1/2 flex justify-start">
        <a href="{{ route('home') }}" class="flex hover:border-gray-300 hover:border">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5 text-blue-950">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>

            </div>
            <div id="text-logo" class="text-blue-950  rounded-md pt-0.5 px-1 text-xs " aria-current="page">
                <span style="text-transform: uppercase">{{ $profile['name'] }}</span>
                <p class="text-sm font-normal"></p>
            </div>
        </a>
        <a href="https://api.whatsapp.com/send?phone={{ $kontak['wa'] }}"
            class="flex mx-5 hover:border-gray-300 hover:border">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4 text-blue-950">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>

            </div>
            <div id="text-logo" class="text-blue-950  rounded-md  px-1 text-xs " aria-current="page">
                <span style="text-transform: uppercase">{{ $kontak['wa'] }}</span>
                <p class="text-sm font-normal"></p>
            </div>
        </a>
    </div>
    <div class="w-1/2 flex justify-end">
        @if (!empty($kontak['url_fb']) && !empty($kontak['fb']))
            <a href="{{ $kontak['url_fb'] }}" class="flex hover:border-gray-300 hover:border">
                <div>

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-4" viewBox="0 0 50 50"
                        stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-950">
                        <path
                            d="M32,11h5c0.552,0,1-0.448,1-1V3.263c0-0.524-0.403-0.96-0.925-0.997C35.484,2.153,32.376,2,30.141,2C24,2,20,5.68,20,12.368 V19h-7c-0.552,0-1,0.448-1,1v7c0,0.552,0.448,1,1,1h7v19c0,0.552,0.448,1,1,1h7c0.552,0,1-0.448,1-1V28h7.222 c0.51,0,0.938-0.383,0.994-0.89l0.778-7C38.06,19.518,37.596,19,37,19h-8v-5C29,12.343,30.343,11,32,11z">
                        </path>
                    </svg>
                </div>
                <div id="text-logo" class="text-blue-950  rounded-md px-1 text-xs " aria-current="page">
                    <span style="text-transform: uppercase">{{ $kontak['fb'] }}</span>
                    <p class="text-sm font-normal"></p>
                </div>
            </a>
        @endif
        @if (!empty($kontak['ig']))
            <a href="https://instagram.com/{{ $kontak['ig'] }}" class="flex mx-5 hover:border-gray-300 hover:border">
                <div class="">

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-4" viewBox="0 0 24 24">
                        <path
                            d="M 8 3 C 5.243 3 3 5.243 3 8 L 3 16 C 3 18.757 5.243 21 8 21 L 16 21 C 18.757 21 21 18.757 21 16 L 21 8 C 21 5.243 18.757 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.654 5 19 6.346 19 8 L 19 16 C 19 17.654 17.654 19 16 19 L 8 19 C 6.346 19 5 17.654 5 16 L 5 8 C 5 6.346 6.346 5 8 5 z M 17 6 A 1 1 0 0 0 16 7 A 1 1 0 0 0 17 8 A 1 1 0 0 0 18 7 A 1 1 0 0 0 17 6 z M 12 7 C 9.243 7 7 9.243 7 12 C 7 14.757 9.243 17 12 17 C 14.757 17 17 14.757 17 12 C 17 9.243 14.757 7 12 7 z M 12 9 C 13.654 9 15 10.346 15 12 C 15 13.654 13.654 15 12 15 C 10.346 15 9 13.654 9 12 C 9 10.346 10.346 9 12 9 z">
                        </path>
                    </svg>

                </div>
                <div id="text-logo" class="text-blue-950  rounded-md  px-1 text-xs " aria-current="page">
                    <span style="text-transform: uppercase">{{ $kontak['ig'] }}</span>
                    <p class="text-sm font-normal"></p>
                </div>
            </a>
        @endif
    </div>
</div>

<nav id="navbar-background" class="bg-white fixed md:sticky w-full top-0 z-50 drop-shadow-sm" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            <div class="flex items-center">
                <a href="{{ route('home') }}/" class="shrink-0 flex items-center justify-between">
                    <img class="size-20 pr-3 w-20" src="{{ asset('storage/logo/logo.png') }}" alt="Your Company">
                    <div id="text-logo"
                        class="text-gray-950  rounded-md px-3 py-2 text-sm lg:text-3xl font-bold md:hidden"
                        aria-current="page"><span style="text-transform: uppercase">{{ $profile['name'] }}</span>
                        <p class="text-sm font-normal"></p>
                    </div>
                </a>

            </div>
            <div class="flex items-center">
                <div class="hidden">
                    {{ $menu = $page == 'Home' ? true : false }}

                </div>

                <div class="hidden md:block ml-auto">
                    <div class="ml-10 flex items-baseline space-x-4">

                        <x-nav-link href="{{ route('home') }}" :page=$menu :active="request()->is('/')">Home
                        </x-nav-link>

                        <x-nav-link href="{{ route('tentang') }}" :page=$menu :active="request()->is('tentangkami')">Tentang Kami
                        </x-nav-link>

                        <x-nav-link href="{{ route('layanan') }}" :page=$menu :active="request()->is('layanan')">Layanan
                        </x-nav-link>

                        <x-nav-link href="{{ route('portofolio') }}" :page=$menu :active="request()->is('portofolio')">Portofolio
                        </x-nav-link>

                        <x-nav-link href="{{ route('galeri') }}" :page=$menu :active="request()->is('galeri')">Galeri
                        </x-nav-link>
                        <x-nav-link href="{{ route('kontak') }}" :page=$menu :active="request()->is('kontak')">Kontak
                        </x-nav-link>

                    </div>
                </div>

            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen" id="hamburgerMenu"
                    class="relative inline-flex items-center justify-center rounded-md bg-transparent p-2 text-dark hover:bg-transparent hover:text-white focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 focus:ring-offset-sky-200"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{ 'hidden': !isOpen, 'block': isOpen }" class="hidden size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <x-nav-link href="{{ route('home') }}" :page=$menu :mobile=true :active="request()->is('/')">Home
            </x-nav-link>
            <x-nav-link href="{{ route('tentang') }}" :page=$menu :mobile=true :active="request()->is('tentangkami')">Tentang Kami
            </x-nav-link>
            <x-nav-link href="{{ route('layanan') }}" :page=$menu :mobile=true :active="request()->is('layanan')">Layanan
            </x-nav-link>
            <x-nav-link href="{{ route('portofolio') }}" :page=$menu :mobile=true :active="request()->is('portofolio')">Portofolio
            </x-nav-link>
            <x-nav-link href="{{ route('galeri') }}" :page=$menu :mobile=true :active="request()->is('galeri')">Gallery
            </x-nav-link>
            <x-nav-link href="{{ route('kontak') }}" :page=$menu :mobile=true :last=true :active="request()->is('kontak')">Kontak
            </x-nav-link>

        </div>

    </div>
</nav>



<script>
    let lastScrollTop = 0;
    const topHeader = document.getElementById("top-header");

    window.addEventListener("scroll", function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scroll down -> sembunyikan
            topHeader.classList.add("hide");
        } else {
            // Scroll up -> tampilkan lagi
            topHeader.classList.remove("hide");
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For mobile or negative scrolling
    }, false);
</script>
