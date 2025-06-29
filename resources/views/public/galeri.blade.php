<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="text-center mb-5 pt-10" data-aos="fade-down">
        <h2 class="text-blue-950 text-4xl font-bold">Galeri Kami</h2>
        <div class="flex justify-center mt-2 gap-2">
            <div class="w-12 h-1 bg-yellow-400"></div>
            <div class="w-12 h-1 bg-yellow-400"></div>
        </div>
    </div>

    <div class="w-full">
        <div class=" lg:mx-20 md:mx-15 mx-10 mt-5 flex justify-between flex-wrap pt-10 py-5">
            <div class="shadow-lg w-90  bg-white px-5 py-5 mb-5" data-aos="fade-down">
                <img src="{{ asset('storage/1.jpeg') }}" alt="" class="relative w-full aspect-[4/3] mb-2">
            </div>
            <div class="shadow-lg w-90  bg-white px-5 py-5 mb-5" data-aos="fade-down">
                <img src="{{ asset('storage/1.jpeg') }}" alt="" class="relative w-full aspect-[4/3] mb-2">
            </div>
            <div class="shadow-lg w-90  bg-white px-5 py-5 mb-5" data-aos="fade-down">
                <img src="{{ asset('storage/1.jpeg') }}" alt="" class="relative w-full aspect-[4/3] mb-2">
            </div>
            <div class="shadow-lg w-90  bg-white px-5 py-5 mb-5" data-aos="fade-down">
                <img src="{{ asset('storage/1.jpeg') }}" alt="" class="relative w-full aspect-[4/3] mb-2">
            </div>
            <div class="shadow-lg w-90  bg-white px-5 py-5 mb-5" data-aos="fade-down">
                <img src="{{ asset('storage/1.jpeg') }}" alt="" class="relative w-full aspect-[4/3] mb-2">
            </div>
            <div class="shadow-lg w-90  bg-white px-5 py-5 mb-5" data-aos="fade-down">
                <img src="{{ asset('storage/1.jpeg') }}" alt="" class="relative w-full aspect-[4/3] mb-2">
            </div>
            <div class="shadow-lg w-90  bg-white px-5 py-5 mb-5" data-aos="fade-down">
                <img src="{{ asset('storage/1.jpeg') }}" alt="" class="relative w-full aspect-[4/3] mb-2">
            </div>

        </div>


    </div>
</x-layout>
