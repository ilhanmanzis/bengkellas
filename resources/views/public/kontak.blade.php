<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="md:mx-20 mx-5 pb-10" data-aos="fade-down">
        <div class="py-12">
            <div class="text-center mb-10">
                <h2 class="text-blue-950 text-4xl font-bold">Hubungi Kami</h2>
                <div class="flex justify-center mt-2 gap-2">
                    <div class="w-12 h-1 bg-yellow-400"></div>
                    <div class="w-12 h-1 bg-yellow-400"></div>
                </div>
            </div>
            <div class="flex justify-start flex-wrap py-10 ">
                <div class="md:w-1/2 w-full pb-10">
                    <span class="text-blue-950 text-3xl font-bold">Denah Lokasi</span>
                    <iframe class="mt-5 w-full h-96"
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d249.35605043762737!2d101.40025250738475!3d0.4471715381873643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMMKwMjYnNDkuNyJOIDEwMcKwMjQnMDEuMCJF!5e0!3m2!1sid!2sid!4v1751194076787!5m2!1sid!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="md:w-1/2 w-full pl-0 md:pl-10 ">
                    <span class="text-blue-950 text-3xl font-bold">Kontak</span>
                    {{-- email --}}
                    @if (!empty($kontak['kontak']))
                        <div class="flex justify-start items-center mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-10 text-blue-950">
                                <path
                                    d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                <path
                                    d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                            </svg>
                            <a href="mailto:{{ $kontak['email'] }}"
                                class="text-blue-950 font-semibold text-md pl-3">{{ $kontak['email'] }}</a>
                        </div>
                    @endif

                    {{-- alamat --}}
                    <div class="flex justify-start items-center mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-12 text-blue-950">
                            <path fill-rule="evenodd"
                                d="M8.161 2.58a1.875 1.875 0 0 1 1.678 0l4.993 2.498c.106.052.23.052.336 0l3.869-1.935A1.875 1.875 0 0 1 21.75 4.82v12.485c0 .71-.401 1.36-1.037 1.677l-4.875 2.437a1.875 1.875 0 0 1-1.676 0l-4.994-2.497a.375.375 0 0 0-.336 0l-3.868 1.935A1.875 1.875 0 0 1 2.25 19.18V6.695c0-.71.401-1.36 1.036-1.677l4.875-2.437ZM9 6a.75.75 0 0 1 .75.75V15a.75.75 0 0 1-1.5 0V6.75A.75.75 0 0 1 9 6Zm6.75 3a.75.75 0 0 0-1.5 0v8.25a.75.75 0 0 0 1.5 0V9Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span
                            class="text-blue-950 font-semibold text-md pl-3 text-justify">{{ $kontak['alamat'] }}</span>
                    </div>

                    {{-- Whatsapp --}}
                    <div class="flex justify-start items-center mt-5">
                        <svg fill="currentColor" version="1.1" id="Layer_1" class="size-11 text-blue-950"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 308 308" xml:space="preserve">
                            <g id="XMLID_468_">
                                <path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156
                                    c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687
                                    c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887
                                    c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153
                                    c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348
                                    c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802
                                    c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922
                                    c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0
                                    c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458
                                    C233.168,179.508,230.845,178.393,227.904,176.981z" />
                                <path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716
                                    c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396
                                    c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z
                                    M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188
                                    l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677
                                    c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867
                                    C276.546,215.678,222.799,268.994,156.734,268.994z" />
                            </g>
                        </svg>
                        <a href="https://api.whatsapp.com/send?phone={{ $kontak['wa'] }}"
                            class="text-blue-950 font-semibold text-md pl-3 text-justify">{{ $kontak['wa'] }}</a>
                    </div>

                    {{-- facebook --}}
                    @if (!empty($kontak['fb']) && !empty($kontak['url_fb']))
                        <div class="flex justify-start items-center mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                                viewBox="0 0 24 24" fill="currentColor" class="size-12 text-blue-950">
                                <path
                                    d="M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.014467 17.065322 19.313017 13.21875 19.898438 L 13.21875 14.384766 L 15.546875 14.384766 L 15.912109 12.019531 L 13.21875 12.019531 L 13.21875 10.726562 C 13.21875 9.7435625 13.538984 8.8710938 14.458984 8.8710938 L 15.935547 8.8710938 L 15.935547 6.8066406 C 15.675547 6.7716406 15.126844 6.6953125 14.089844 6.6953125 C 11.923844 6.6953125 10.654297 7.8393125 10.654297 10.445312 L 10.654297 12.019531 L 8.4277344 12.019531 L 8.4277344 14.384766 L 10.654297 14.384766 L 10.654297 19.878906 C 6.8702905 19.240845 4 15.970237 4 12 C 4 7.5698774 7.5698774 4 12 4 z">
                                </path>
                            </svg>

                            <a href="{{ $kontak['url_fb'] }}"
                                class="text-blue-950 font-semibold text-md pl-3 text-justify">{{ $kontak['fb'] }}</a>
                        </div>
                    @endif

                    {{-- instagram --}}
                    @if (!empty($kontak['ig']))
                        <div class="flex justify-start items-center mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-12 text-blue-950">
                                <path
                                    d="M 8 3 C 5.243 3 3 5.243 3 8 L 3 16 C 3 18.757 5.243 21 8 21 L 16 21 C 18.757 21 21 18.757 21 16 L 21 8 C 21 5.243 18.757 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.654 5 19 6.346 19 8 L 19 16 C 19 17.654 17.654 19 16 19 L 8 19 C 6.346 19 5 17.654 5 16 L 5 8 C 5 6.346 6.346 5 8 5 z M 17 6 A 1 1 0 0 0 16 7 A 1 1 0 0 0 17 8 A 1 1 0 0 0 18 7 A 1 1 0 0 0 17 6 z M 12 7 C 9.243 7 7 9.243 7 12 C 7 14.757 9.243 17 12 17 C 14.757 17 17 14.757 17 12 C 17 9.243 14.757 7 12 7 z M 12 9 C 13.654 9 15 10.346 15 12 C 15 13.654 13.654 15 12 15 C 10.346 15 9 13.654 9 12 C 9 10.346 10.346 9 12 9 z">
                                </path>
                            </svg>
                            <a href="https://instagram.com/{{ $kontak['ig'] }}"
                                class="text-blue-950 font-semibold text-md pl-3 text-justify">{{ $kontak['ig'] }}</a>
                        </div>
                    @endif

                    {{-- tiktok --}}
                    @if (!empty($kontak['tiktok']))
                        <div class="flex justify-start items-center mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg"fill="currentColor" version="1.1" id="Layer_1"
                                class="size-12 text-blue-950" viewBox="0 0 24 24">
                                <path
                                    d="M 6 3 C 4.3550302 3 3 4.3550302 3 6 L 3 18 C 3 19.64497 4.3550302 21 6 21 L 18 21 C 19.64497 21 21 19.64497 21 18 L 21 6 C 21 4.3550302 19.64497 3 18 3 L 6 3 z M 6 5 L 18 5 C 18.56503 5 19 5.4349698 19 6 L 19 18 C 19 18.56503 18.56503 19 18 19 L 6 19 C 5.4349698 19 5 18.56503 5 18 L 5 6 C 5 5.4349698 5.4349698 5 6 5 z M 12 7 L 12 14 C 12 14.56503 11.56503 15 11 15 C 10.43497 15 10 14.56503 10 14 C 10 13.43497 10.43497 13 11 13 L 11 11 C 9.3550302 11 8 12.35503 8 14 C 8 15.64497 9.3550302 17 11 17 C 12.64497 17 14 15.64497 14 14 L 14 10.232422 C 14.616148 10.671342 15.259118 11 16 11 L 16 9 C 15.952667 9 15.262674 8.7809373 14.78125 8.3613281 C 14.299826 7.941719 14 7.4149911 14 7 L 12 7 z">
                                </path>
                            </svg>
                            <a href="https://tiktok/@{{ $kontak['tiktok'] }}"
                                class="text-blue-950 font-semibold text-md pl-3 text-justify">{{ $kontak['tiktok'] }}</a>
                        </div>
                    @endif
                    @if (!empty($kontak['linkedin']) && !empty($kontak['url_linkedin']))
                        <div class="flex justify-start items-center mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" version="1.1" id="Layer_1"
                                class="size-12 text-blue-950" viewBox="0 0 48 48">
                                <path
                                    d="M 11.5 6 C 8.4802259 6 6 8.4802259 6 11.5 L 6 36.5 C 6 39.519774 8.4802259 42 11.5 42 L 36.5 42 C 39.519774 42 42 39.519774 42 36.5 L 42 11.5 C 42 8.4802259 39.519774 6 36.5 6 L 11.5 6 z M 11.5 9 L 36.5 9 C 37.898226 9 39 10.101774 39 11.5 L 39 36.5 C 39 37.898226 37.898226 39 36.5 39 L 11.5 39 C 10.101774 39 9 37.898226 9 36.5 L 9 11.5 C 9 10.101774 10.101774 9 11.5 9 z M 15.5 13 A 2.5 2.5 0 0 0 15.5 18 A 2.5 2.5 0 0 0 15.5 13 z M 14 20 C 13.447 20 13 20.447 13 21 L 13 34 C 13 34.553 13.447 35 14 35 L 17 35 C 17.553 35 18 34.553 18 34 L 18 21 C 18 20.447 17.553 20 17 20 L 14 20 z M 21 20 C 20.447 20 20 20.447 20 21 L 20 34 C 20 34.553 20.447 35 21 35 L 24 35 C 24.553 35 25 34.553 25 34 L 25 26.5 C 25 25.121 26.121 24 27.5 24 C 28.879 24 30 25.121 30 26.5 L 30 34 C 30 34.553 30.447 35 31 35 L 34 35 C 34.553 35 35 34.553 35 34 L 35 26 C 35 22.691 32.309 20 29 20 C 27.462 20 26.063 20.586016 25 21.541016 L 25 21 C 25 20.447 24.553 20 24 20 L 21 20 z">
                                </path>
                            </svg>
                            <a href="{{ $kontak['url_linkedin'] }}"
                                class="text-blue-950 font-semibold text-md pl-3 text-justify">{{ $kontak['linkedin'] }}</a>
                        </div>
                </div>
                @endif

            </div>


        </div>
    </div>
</x-layout>
