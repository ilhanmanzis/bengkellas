<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <link rel="icon" type="image/png" href="{{ asset('storage/' . $icon_website['logo']) }}"> --}}
    <title>{{ $title }}</title>
    <style>
        #top-header {
            transition: transform 0.3s ease-in-out;
        }

        #top-header.hide {
            transform: translateY(-100%);
        }
    </style>

</head>

<body class="h-full">

    {{-- navbar --}}
    <x-navbar>
        <x-slot:page>{{ $page }}</x-slot:page>
    </x-navbar>

    {{-- banner --}}
    @if ($page == 'Home')
        <x-banner-home></x-banner-home>
    @endif



    <main class="bg-gray-100">
        {{ $slot }}
    </main>

    <x-footer></x-footer>

    <a href="" class="fixed bottom-0 left-0  p-4 z-50 ml-2 mb-2">
        <img src="{{ asset('storage/wa.gif') }}" alt="icon wa" class="size-10">
    </a>

    <!-- Tombol Scroll to Top -->
    <button id="scrollTopBtn"
        class="hidden fixed bottom-6 right-6 bg-yellow-600 text-white px-4 py-2 rounded-full shadow-lg hover:bg-blue-700 transition duration-300 z-50">
        ^
    </button>

    <script>
        // Ambil elemen tombol
        const scrollTopBtn = document.getElementById("scrollTopBtn");

        // Tampilkan tombol saat scroll > 100px
        window.onscroll = function() {
            if (document.documentElement.scrollTop > 100 || document.body.scrollTop > 100) {
                scrollTopBtn.classList.remove("hidden");
            } else {
                scrollTopBtn.classList.add("hidden");
            }
        };

        // Scroll ke atas saat tombol diklik
        scrollTopBtn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>






    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const navbar = document.getElementById('navbar-background');
        const mainSearch = document.getElementById('main-search');

        document.addEventListener('scroll', function() {
            const mainPosition = mainSearch.offsetTop;
            const scrollPosition = window.scrollY;

            if (scrollPosition >= mainPosition) {
                navbar.classList.remove('md:sticky');
            } else {
                navbar.classList.add('md:sticky'); // tetap sticky saat belum melewati
            }
        });
    </script>

</body>



</html>
