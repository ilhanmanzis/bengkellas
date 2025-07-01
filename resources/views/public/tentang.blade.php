<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="lg:px-25 md:px-15 px-10 pt-10 pb-32 flex justify-between flex-wrap">
        <div class="w-full md:w-1/2">
            <img src="{{ asset('storage/logo/logo.png') }}" class="md:size-96 size-72" data-aos="fade-down">
        </div>
        <div class="w-full md:w-1/2">
            <p class="text-yellow-500 md:text-2xl text-sm font-bold" data-aos="fade-down">Tentang Kami</p>
            <p class="text-blue-950 md:text-3xl mb-5 text-md font-bold" data-aos="fade-down">{{ $profile['name'] }}</p>
            <div class="text-gray-700 text-justify" data-aos="fade-right">{!! $profile['tentang_kami'] !!}</div>
        </div>
    </div>
</x-layout>
