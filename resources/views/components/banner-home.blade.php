<div id="slider" class="hero min-h-screen overflow-hidden relative">
    <div id="slides" class="absolute inset-0 flex transition-transform duration-1000">
        @foreach ($banners as $banner)
            <div class="hero-slide flex-shrink-0 w-full h-full bg-cover bg-center"
                style="background-image: url({{ asset('storage/' . $banner['foto']) }}"></div>
        @endforeach
    </div>
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="hero-content text-white text-center absolute inset-0 flex items-center justify-center"
        style="z-index: 2;">
        <div class="lg:mx-10 mx-5" id="main-search" data-aos="fade-up" data-aos-duration="2000">
            <h1 class="lg:text-5xl text-2xl font-bold text-gray-100">SELAMAT DATANG</h1>
            <h1 class="mb-10 lg:text-5xl text-2xl font-bold text-gray-100 uppercase">DI {{ $profile['name'] }}</h1>
        </div>
    </div>
</div>

<script>
    const slides = document.getElementById('slides');
    const slideCount = document.querySelectorAll('.hero-slide').length;
    let currentIndex = 0;

    setInterval(() => {
        currentIndex = (currentIndex + 1) % slideCount; // Increment and loop back to start
        slides.style.transform = `translateX(-${currentIndex * 100}%)`; // Shift slides
    }, 5000); // Change every 5 seconds
</script>
