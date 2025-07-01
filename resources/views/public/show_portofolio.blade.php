<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="px-5 md:px-40 pt-10 pb-10 bg-white">
        <div class="my-5 border-b border-gray-300 pb-5" data-aos="fade-down">
            <img src="{{ asset('storage/1.jpeg') }}" class="w-full aspect-[19/10]">
            <h2 class="text-blue-950 text-2xl font-bold mt-10">{{ $portofolio['name'] }}</h2>
        </div>
        <div class="text-gray-700" data-aos="fade-down">

            <div class="prose max-w-none text-justify my-5">
                {!! $portofolio['isi'] !!}
            </div>
        </div>

    </div>
</x-layout>
