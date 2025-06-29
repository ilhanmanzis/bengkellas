<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="text-center mb-5 pt-10" data-aos="fade-down">
        <h2 class="text-blue-950 text-4xl font-bold">Portofolio</h2>
        <div class="flex justify-center mt-2 gap-2">
            <div class="w-12 h-1 bg-yellow-400"></div>
            <div class="w-12 h-1 bg-yellow-400"></div>
        </div>
    </div>

    <div class="w-full">
        <div class=" lg:mx-20 md:mx-15 mx-10 mt-5 flex justify-between flex-wrap pt-10 py-5">
            <div class="shadow-lg w-90  bg-white px-5 pt-5 mb-5" data-aos="fade-down">
                <img src="{{ asset('storage/1.jpeg') }}" alt="" class="relative w-full aspect-[4/3] mb-2">
                <span class="text-yellow-500 text-xl font-semibold">01. </span> <span
                    class="text-blue-800 text-xl font-semibold">Pembuatan Kubah Masjid A</span>
                <div class="border-t border-gray-300 mt-3 pt-5">
                    <p class="text-sm text-gray-600">
                        {{ Str::limit(
                            'Kami siap mengerjakan dan memasang kanopi sesuai dengan kebutuhan dan desain yang Anda inginkan',
                            90,
                            '...',
                        ) }}
                    </p>

                </div>
                <div class="my-5 ">
                    <a href="{{ route('show_portofolio', ['id' => '1']) }}"
                        class="mx-auto mb-15 px-5 py-2 bg-yellow-500 hover:bg-blue-900 rounded-2xl text-white text-sm">Selengkapnya</a>
                </div>
            </div>
            <div class="shadow-lg w-90  bg-white px-5 pt-5 mb-5" data-aos="fade-down">
                <img src="{{ asset('storage/1.jpeg') }}" alt="" class="relative w-full aspect-[4/3] mb-2">
                <span class="text-yellow-500 text-xl font-semibold">01. </span> <span
                    class="text-blue-800 text-xl font-semibold">Pembuatan Kubah Masjid A</span>
                <div class="border-t border-gray-300 mt-3 pt-5">
                    <p class="text-sm text-gray-600">
                        {{ Str::limit(
                            'Kami siap mengerjakan dan memasang kanopi sesuai dengan kebutuhan dan desain yang Anda inginkan',
                            90,
                            '...',
                        ) }}
                    </p>

                </div>
                <div class="my-5 ">
                    <a href="{{ route('show_portofolio', ['id' => '1']) }}"
                        class="mx-auto mb-15 px-5 py-2 bg-yellow-500 hover:bg-blue-900 rounded-2xl text-white text-sm">Selengkapnya</a>
                </div>
            </div>
            <div class="shadow-lg w-90  bg-white px-5 pt-5 mb-5" data-aos="fade-down">
                <img src="{{ asset('storage/1.jpeg') }}" alt="" class="relative w-full aspect-[4/3] mb-2">
                <span class="text-yellow-500 text-xl font-semibold">01. </span> <span
                    class="text-blue-800 text-xl font-semibold">Pembuatan Kubah Masjid A</span>
                <div class="border-t border-gray-300 mt-3 pt-5">
                    <p class="text-sm text-gray-600">
                        {{ Str::limit(
                            'Kami siap mengerjakan dan memasang kanopi sesuai dengan kebutuhan dan desain yang Anda inginkan',
                            90,
                            '...',
                        ) }}
                    </p>

                </div>
                <div class="my-5 ">
                    <a href="{{ route('show_portofolio', ['id' => '1']) }}"
                        class="mx-auto mb-15 px-5 py-2 bg-yellow-500 hover:bg-blue-900 rounded-2xl text-white text-sm">Selengkapnya</a>
                </div>
            </div>
        </div>


    </div>
</x-layout>
