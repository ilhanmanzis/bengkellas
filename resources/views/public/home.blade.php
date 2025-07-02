<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- motto --}}
    <div class="w-full py-10 md:py-20 px-10 md:px-50 flex justify-start gap-10 text-left md:text-justify"
        data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="w-full md:w-2/3">
            <span class="px-3 py-2 bg-yellow-500 rounded-xl text-white text-sm md:text-md">{{ $profile['name'] }}</span>
            <p class="text-yellow-500 text-xl md:text-3xl my-5">+{{ $kontak['wa'] }}</p>
            <p class="text-blue-900 text-2xl md:text-4xl mb-5 font-bold">{{ $profile['motto1'] }}</p>
            <p class="text-gray-600 text-sm mb-5">{{ $profile['sekilas_info1'] }}</p>
            <a href="#layanan-kami"
                class="px-5 py-2 bg-blue-900 rounded-2xl text-white text-sm hover:bg-yellow-500">Layanan
                Kami</a>
        </div>
        <div class="hidden md:flex md:flex-col justify-end pl-30 ">
            <a href="https://api.whatsapp.com/send?phone={{ $kontak['wa'] }}"
                class="px-5 py-2 bg-yellow-500 hover:bg-blue-900 rounded-2xl text-white text-sm ">Free
                Konsultasi</a>
        </div>
    </div>

    {{-- pembatas --}}
    <div class="flex w-full justify-start flex-col md:flex-row">
        <div class="md:w-1/3 w-full">
            <div id="slider" class="hero overflow-hidden relative w-full aspect-[16/9]">
                <div id="slides1" class="absolute inset-0 flex transition-transform duration-1000">
                    @foreach ($banners as $banner)
                        <div class="hero-slide1 flex-shrink-0 w-full h-full bg-cover bg-center"
                            style="background-image: url({{ asset('storage/' . $banner['foto']) }}"></div>
                    @endforeach
                </div>
                <div class="absolute inset-0 bg-black opacity-30"></div>
                <div class="hero-content text-white text-center absolute inset-0 flex items-center justify-center"
                    style="z-index: 2;">
                    <div class="lg:mx-5 mx-5" id="main-search" data-aos="fade-up" data-aos-duration="1000">
                        <span class="text-xl font-bold text-gray-100">
                            {{ $profile['motto1'] }} Terbaik di Pekanbaru</span>
                        <p class="text-sm font-bold text-gray-100">
                            {{ $profile['name'] }}</p>
                        <br>
                        <a href="https://api.whatsapp.com/send?phone={{ $kontak['wa'] }}"
                            class="mt-5 px-5 py-2 bg-yellow-500 hover:bg-blue-900 rounded-2xl text-white text-sm ">Free
                            Konsultasi</a>
                    </div>
                </div>
            </div>

            <script>
                const slides1 = document.getElementById('slides1');
                const slideCount1 = document.querySelectorAll('.hero-slide1').length;
                let currentIndex1 = 0;

                setInterval(() => {
                    currentIndex1 = (currentIndex1 + 1) % slideCount1; // Increment and loop back to start
                    slides1.style.transform = `translateX(-${currentIndex1 * 100}%)`; // Shift slides
                }, 5000); // Change every 5 seconds
            </script>
        </div>
        <div
            class="md:w-2/3 w-full bg-blue-950 text-white flex flex-col justify-center text-sm px-10 md:px-20 md:py-0 py-10 text-justify">
            <span data-aos="fade-right" data-aos-duration="1500">{{ $profile['sekilas_info2'] }}</span>
        </div>
    </div>

    {{-- layanan --}}
    <div class="lg:mx-20 md:mx-15 mx-10 mt-10 flex justify-between flex-wrap" id="layanan-kami">
        @foreach ($layanans as $index => $layanan)
            <div class="shadow-lg w-90  bg-white px-5 pt-5 mb-15" data-aos="fade-down">
                <img src="{{ asset('storage/' . $layanan['foto']) }}" alt=""
                    class="relative w-full aspect-[4/3] mb-2">
                <span class="text-yellow-500 text-xl font-semibold">{{ $index + 1 }}. </span>
                <span class="text-blue-800 text-xl font-semibold">{{ $layanan['name'] }}</span>
                <div class="border-t border-gray-300 mt-3 pt-5">
                    <p class="text-sm text-gray-600">
                        {{ Str::limit(strip_tags($layanan['isi']), 80, '...') }}
                    </p>
                    <div x-data="{ show: false }" class="w-full border-gray-400 my-5 border py-1 px-3 rounded-md">
                        <!-- Tombol Toggle -->
                        <div class="flex justify-start items-center cursor-pointer" @click="show = !show">
                            <!-- SVG Ikon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800"
                                :class="{ 'hidden': show }">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            <!-- SVG Ikon saat show = true -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800"
                                :class="{ 'hidden': !show }">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.98 8.223A10.477 10.477 0 0 0 2.036 12.32c.07.207.07.431 0 .64C3.423 16.49 7.36 19.5 12 19.5c1.662 0 3.238-.406 4.616-1.122M6.226 6.228A9.977 9.977 0 0 1 12 4.5c4.638 0 8.573 3.007 9.963 7.18a1.01 1.01 0 0 1 0 .64 10.472 10.472 0 0 1-4.21 5.093M6.226 6.228L3 3m0 0l18 18m-18-18l5.337 5.337m12.888 12.888L17.4 17.4" />
                            </svg>

                            <span class="text-sm text-gray-800 ml-3 mt-0.5">Detail Layanan</span>
                        </div>

                        <!-- Paragraf detail -->
                        <p x-show="show" x-transition class="pt-1 text-sm text-gray-600">
                            {{ $layanan['isi'] }}
                        </p>
                    </div>
                    <div class="flex justify-start">

                        <a href="https://api.whatsapp.com/send?phone={{ $kontak['wa'] }}"
                            class="w-1/2 rounded-t-2xl bg-blue-950 hover:bg-yellow-500 text-white pl-3 py-3 text-sm flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-5 text-white mr-3"
                                viewBox="0 0 50 50" fill="currentColor">
                                <path
                                    d="M 25 2 C 12.309534 2 2 12.309534 2 25 C 2 29.079097 3.1186875 32.88588 4.984375 36.208984 L 2.0371094 46.730469 A 1.0001 1.0001 0 0 0 3.2402344 47.970703 L 14.210938 45.251953 C 17.434629 46.972929 21.092591 48 25 48 C 37.690466 48 48 37.690466 48 25 C 48 12.309534 37.690466 2 25 2 z M 25 4 C 36.609534 4 46 13.390466 46 25 C 46 36.609534 36.609534 46 25 46 C 21.278025 46 17.792121 45.029635 14.761719 43.333984 A 1.0001 1.0001 0 0 0 14.033203 43.236328 L 4.4257812 45.617188 L 7.0019531 36.425781 A 1.0001 1.0001 0 0 0 6.9023438 35.646484 C 5.0606869 32.523592 4 28.890107 4 25 C 4 13.390466 13.390466 4 25 4 z M 16.642578 13 C 16.001539 13 15.086045 13.23849 14.333984 14.048828 C 13.882268 14.535548 12 16.369511 12 19.59375 C 12 22.955271 14.331391 25.855848 14.613281 26.228516 L 14.615234 26.228516 L 14.615234 26.230469 C 14.588494 26.195329 14.973031 26.752191 15.486328 27.419922 C 15.999626 28.087653 16.717405 28.96464 17.619141 29.914062 C 19.422612 31.812909 21.958282 34.007419 25.105469 35.349609 C 26.554789 35.966779 27.698179 36.339417 28.564453 36.611328 C 30.169845 37.115426 31.632073 37.038799 32.730469 36.876953 C 33.55263 36.755876 34.456878 36.361114 35.351562 35.794922 C 36.246248 35.22873 37.12309 34.524722 37.509766 33.455078 C 37.786772 32.688244 37.927591 31.979598 37.978516 31.396484 C 38.003976 31.104927 38.007211 30.847602 37.988281 30.609375 C 37.969311 30.371148 37.989581 30.188664 37.767578 29.824219 C 37.302009 29.059804 36.774753 29.039853 36.224609 28.767578 C 35.918939 28.616297 35.048661 28.191329 34.175781 27.775391 C 33.303883 27.35992 32.54892 26.991953 32.083984 26.826172 C 31.790239 26.720488 31.431556 26.568352 30.914062 26.626953 C 30.396569 26.685553 29.88546 27.058933 29.587891 27.5 C 29.305837 27.918069 28.170387 29.258349 27.824219 29.652344 C 27.819619 29.649544 27.849659 29.663383 27.712891 29.595703 C 27.284761 29.383815 26.761157 29.203652 25.986328 28.794922 C 25.2115 28.386192 24.242255 27.782635 23.181641 26.847656 L 23.181641 26.845703 C 21.603029 25.455949 20.497272 23.711106 20.148438 23.125 C 20.171937 23.09704 20.145643 23.130901 20.195312 23.082031 L 20.197266 23.080078 C 20.553781 22.728924 20.869739 22.309521 21.136719 22.001953 C 21.515257 21.565866 21.68231 21.181437 21.863281 20.822266 C 22.223954 20.10644 22.02313 19.318742 21.814453 18.904297 L 21.814453 18.902344 C 21.828863 18.931014 21.701572 18.650157 21.564453 18.326172 C 21.426943 18.001263 21.251663 17.580039 21.064453 17.130859 C 20.690033 16.232501 20.272027 15.224912 20.023438 14.634766 L 20.023438 14.632812 C 19.730591 13.937684 19.334395 13.436908 18.816406 13.195312 C 18.298417 12.953717 17.840778 13.022402 17.822266 13.021484 L 17.820312 13.021484 C 17.450668 13.004432 17.045038 13 16.642578 13 z M 16.642578 15 C 17.028118 15 17.408214 15.004701 17.726562 15.019531 C 18.054056 15.035851 18.033687 15.037192 17.970703 15.007812 C 17.906713 14.977972 17.993533 14.968282 18.179688 15.410156 C 18.423098 15.98801 18.84317 16.999249 19.21875 17.900391 C 19.40654 18.350961 19.582292 18.773816 19.722656 19.105469 C 19.863021 19.437122 19.939077 19.622295 20.027344 19.798828 L 20.027344 19.800781 L 20.029297 19.802734 C 20.115837 19.973483 20.108185 19.864164 20.078125 19.923828 C 19.867096 20.342656 19.838461 20.445493 19.625 20.691406 C 19.29998 21.065838 18.968453 21.483404 18.792969 21.65625 C 18.639439 21.80707 18.36242 22.042032 18.189453 22.501953 C 18.016221 22.962578 18.097073 23.59457 18.375 24.066406 C 18.745032 24.6946 19.964406 26.679307 21.859375 28.347656 C 23.05276 29.399678 24.164563 30.095933 25.052734 30.564453 C 25.940906 31.032973 26.664301 31.306607 26.826172 31.386719 C 27.210549 31.576953 27.630655 31.72467 28.119141 31.666016 C 28.607627 31.607366 29.02878 31.310979 29.296875 31.007812 L 29.298828 31.005859 C 29.655629 30.601347 30.715848 29.390728 31.224609 28.644531 C 31.246169 28.652131 31.239109 28.646231 31.408203 28.707031 L 31.408203 28.708984 L 31.410156 28.708984 C 31.487356 28.736474 32.454286 29.169267 33.316406 29.580078 C 34.178526 29.990889 35.053561 30.417875 35.337891 30.558594 C 35.748225 30.761674 35.942113 30.893881 35.992188 30.894531 C 35.995572 30.982516 35.998992 31.07786 35.986328 31.222656 C 35.951258 31.624292 35.8439 32.180225 35.628906 32.775391 C 35.523582 33.066746 34.975018 33.667661 34.283203 34.105469 C 33.591388 34.543277 32.749338 34.852514 32.4375 34.898438 C 31.499896 35.036591 30.386672 35.087027 29.164062 34.703125 C 28.316336 34.437036 27.259305 34.092596 25.890625 33.509766 C 23.114812 32.325956 20.755591 30.311513 19.070312 28.537109 C 18.227674 27.649908 17.552562 26.824019 17.072266 26.199219 C 16.592866 25.575584 16.383528 25.251054 16.208984 25.021484 L 16.207031 25.019531 C 15.897202 24.609805 14 21.970851 14 19.59375 C 14 17.077989 15.168497 16.091436 15.800781 15.410156 C 16.132721 15.052495 16.495617 15 16.642578 15 z">
                                </path>
                            </svg>
                            Hubungi
                            Kami</a>
                        <div class="w-1/2"></div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <div class="flex justify-center">
        <a href="{{ route('layanan') }}"
            class="mx-auto mb-15 px-5 py-2 bg-yellow-500 hover:bg-blue-900 rounded-2xl text-white text-sm">Selengkapnya</a>
    </div>

    {{-- pembatas --}}
    <div class="w-full bg-white flex justify-start flex-wrap " data-aos="fade-up" data-aos-duration="1000">
        <div class="w-full md:w-1/2 aspect-[16/6] md:aspect-[16/4] flex justify-center items-center relative">
            <!-- Kotak Konsultasi di kiri atas -->
            <a href="https://api.whatsapp.com/send?phone={{ $kontak['wa'] }}"
                class="absolute top-0 left-0 h-4/5 bg-blue-950 flex items-center justify-center flex-row px-3">
                <p class="text-white text-xl font-semibold" style="writing-mode: vertical-rl;">Konsultasi</p>
            </a>
            <div class="">
                <p class="text-yellow-500 text-3xl font-normal">{{ $profile['proyek'] }}+</p>
                <p class="text-gray-400 text-sm">Proyek Selesai.</p>
            </div>
            <div class="ml-10">
                <p class="text-yellow-500 text-3xl font-normal">99%</p>
                <p class="text-gray-400 text-sm">Hasil Memuaskan.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2"><img src="{{ asset('storage/2.jpg') }}" alt=""
                class=" w-full aspect-[16/4] object-cover object-center">
        </div>
    </div>

    {{-- tentang kami --}}

    <div class="lg:px-20 md:px-15 px-10 mt-5 flex justify-between flex-wrap">
        <div class="items-center flex justify-center">
            <div class="w-full md:w-2/3" data-aos="fade-right">
                <p class="text-yellow-500 md:text-2xl text-sm">Tentang Kami</p>
                <p class="text-blue-950 md:text-3xl mb-5 text-md">{{ $profile['name'] }}</p>
                <a href="https://api.whatsapp.com/send?phone={{ $kontak['wa'] }}"
                    class="mt-5 px-5 py-2 bg-blue-900 rounded-2xl text-white text-sm hover:bg-yellow-500">Hubungi
                    Kami</a>
            </div>
        </div>
        <div class=""><img src="{{ asset('storage/' . $profile['logo']) }}" class="md:size-72 size-40"
                data-aos="fade-down"></div>
        <div class="w-full md:w-1/3">
            <div class="text-gray-700 text-justify pt-10" data-aos="fade-right">{!! Str::limit($profile['tentang_kami'], 400, '...') !!} <a
                    href="{{ route('tentang') }}" class="text-yellow-500 hover:text-blue-950 underline">Selengkapnya
                    »</a> </div>
        </div>
    </div>

    {{-- jasa --}}
    <div class="w-full mt-5 flex justify-between flex-wrap">
        <div
            class="w-1/2 md:w-1/4 bg-blue-950 items-center flex justify-start flex-wrap px-5 md:px-15 py-10 border-r border-white border-b md:border-0">
            <div class="rounded-full border-yellow-500 border-2 p-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-10 md:size-14 text-yellow-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                </svg>
            </div>
            <div class="w-full mt-4">
                <p class="text-white text-md font-bold">Material Berkualitas</p>
                <p class="text-white text-sm  mt-1">Menggunakan bahan terbaik untuk memastikan ketahanan.
                </p>

            </div>

        </div>
        <div
            class="w-1/2 md:w-1/4 bg-blue-950 items-center flex justify-start flex-wrap px-5 md:px-10  py-10 border-b md:border-x md:border-b-0 border-white">
            <div class="rounded-full border-yellow-500 border-2 p-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-10 md:size-14 text-yellow-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>

            </div>
            <div class="w-full mt-4">
                <p class="text-white text-md font-bold">Profesional dan Berpengalaman</p>
                <p class="text-white text-sm  mt-1">Memiliki tim berpengalaman dibidang pengelasan lebih
                    dari 10 Tahun.
                </p>

            </div>

        </div>
        <div
            class="w-1/2 md:w-1/4 bg-blue-950 items-center flex justify-start flex-wrap px-5 md:px-15  py-10 border-r border-white">
            <div class="rounded-full border-yellow-500 border-2 p-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-10 md:size-14 text-yellow-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

            </div>
            <div class="w-full mt-4">
                <p class="text-white text-md font-bold">Harga Kompetitif</p>
                <p class="text-white text-sm  mt-1">Memberikan solusi terbaik tanpa membebani anggaran
                    Anda.
                </p>

            </div>

        </div>

        <div class="w-1/2 md:w-1/4 bg-blue-950 items-center flex justify-start flex-wrap px-5 md:px-15  py-10">
            <div class="rounded-full border-yellow-500 border-2 p-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-10 md:size-13 text-yellow-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>

            </div>
            <div class="w-full mt-4">
                <p class="text-white text-md font-bold">Gratis Konsultasi</p>
                <p class="text-white text-sm  mt-1">Konsultasikan dan rencanakan kebutuhan anda dengan tim
                    kami.
                </p>

            </div>

        </div>


    </div>

    {{-- pembatas --}}
    <div class="relative w-full">
        <!-- Gambar -->
        <img src="{{ asset('storage/3.jpg') }}" alt=""
            class="w-full aspect-[16/8] md:aspect-[16/4] object-cover object-center">

        <div class="absolute inset-0 bg-black opacity-60"></div>

        <!-- Tulisan di atas gambar -->
        <div class="absolute inset-0 flex items-center justify-center w-full">
            <div class="text-center w-full px-5 md:px-0 md:w-2/4" data-aos="fade-up">
                <p class="text-yellow-500 text-2xl md:text-3xl font-semibold">{{ $profile['motto2'] }}</p>
                <p class="text-white text-sm md:text-md mb-5">{{ $profile['sekilas_info3'] }}</p>
                <a href="https://api.whatsapp.com/send?phone={{ $kontak['wa'] }}"
                    class="mt-5 px-5 py-2 bg-blue-900 rounded-2xl text-white text-sm hover:bg-yellow-500">Hubungi
                    Kami</a>
            </div>
        </div>
    </div>

    {{-- portofolio --}}
    <div class="w-full mt-10">
        <div class="lg:mx-20 md:mx-15 mx-10">
            <p class="text-blue-950 text-2xl font-bold">Portofolio</p>
            <p class="text-gray-700 text-md">Berikut adalah beberapa Portofolio yang dapat membantu Anda memahami
                pengalaman kami lebih dalam</p>
        </div>
        <div class="border-t border-gray-300 lg:mx-20 md:mx-15 mx-10 mt-5 flex justify-between flex-wrap pt-10 py-5">
            @foreach ($portofolios as $index => $portofolio)
                <div class="shadow-lg w-90  bg-white px-5 pt-5 mb-5" data-aos="fade-down">
                    <img src="{{ asset('storage/' . $portofolio['foto']) }}" alt=""
                        class="relative w-full aspect-[4/3] mb-2">
                    <span class="text-yellow-500 text-xl font-semibold">{{ $index + 1 }}. </span> <span
                        class="text-blue-800 text-xl font-semibold">{{ $portofolio['name'] }}</span>
                    <div class="border-t border-gray-300 mt-3 pt-5">
                        <p class="text-sm text-gray-600">
                            {{ Str::limit(strip_tags($portofolio['isi']), 90, '...') }}
                        </p>

                    </div>
                    <div class="my-5 ">
                        <a href="{{ route('show_portofolio', ['id' => $portofolio['id_portofolio']]) }}"
                            class="mx-auto mb-15 px-5 py-2 bg-yellow-500 hover:bg-blue-900 rounded-2xl text-white text-sm">Selengkapnya</a>
                    </div>
                </div>
            @endforeach

        </div>


    </div>
    <div class="flex justify-center">
        <a href="{{ route('portofolio') }}"
            class="mx-auto mb-15 px-5 py-2 bg-yellow-500 hover:bg-blue-900 rounded-2xl text-white text-sm">Selengkapnya</a>
    </div>



</x-layout>
