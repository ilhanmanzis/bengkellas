<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="lg:px-25 md:px-15 px-10 pt-10 pb-32 flex justify-between flex-wrap">
        <div class="w-full md:w-1/2">
            <img src="{{ asset('storage/logo/logo.png') }}" class="md:size-96 size-72" data-aos="fade-down">
        </div>
        <div class="w-full md:w-1/2">
            <p class="text-yellow-500 md:text-2xl text-sm font-bold" data-aos="fade-down">Tentang Kami</p>
            <p class="text-blue-950 md:text-3xl mb-5 text-md font-bold" data-aos="fade-down">Bengkel Las Manser</p>
            <p class="text-gray-700 text-justify" data-aos="fade-right">Bengkel Las Manser adalah
                penyedia jasa pengerjaan logam berkualitas yang berlokasi di Padang. Kami spesialis dalam pengerjaan
                stainless steel dan besi untuk berbagai kebutuhan, mulai dari pembuatan kanopi, railing, tangga, hingga
                pintu pagar otomatis dan manual. Berdiri dengan tujuan memberikan solusi konstruksi yang kokoh, tahan
                lama, dan estetik, kami selalu mengutamakan kualitas setiap proyek. Dengan pengalaman yang kami miliki,
                tim ahli kami siap memberikan hasil pengerjaan yang sesuai dengan keinginan anda.

                Kami menggunakan material stainless steel dan besi terbaik memiliki daya tahan yang luar biasa terhadap
                cuaca dan korosi. Selain itu, kami juga menawarkan desain yang bisa disesuaikan dengan keinginan
                pelanggan, baik itu untuk kebutuhan pribadi, komersial, atau proyek konstruksi besar. Dengan cakupan
                layanan yang luas, kami melayani proyek di seluruh Indonesia, memberikan kemudahan bagi pelanggan yang
                membutuhkan layanan pengerjaan logam profesional.</p>
        </div>
    </div>
</x-layout>
