<section id="features" class="features-section py-20 mt-12">
    <div
        class="relative flex flex-col sm:flex-row justify-center items-center mb-12 h-auto sm:h-40 px-6 sm:px-10 text-center sm:text-left">
        <!-- Globe -->
        <div class="relative flex-shrink-0">
            <img src="{{ asset('3D Planet.png') }}" alt="Globe" class="w-24 h-24 sm:w-32 sm:h-32">
        </div>

        <!-- Text -->
        <div class="sm:ml-6 mt-4 sm:mt-0 leading-tight text-center">
            <h1 class="text-white text-3xl sm:text-4xl font-bold drop-shadow-md">
                Our
                <span class="italic font-semibold">interactive</span>
            </h1>
            <h2 class="text-white text-3xl sm:text-4xl font-bold drop-shadow-md">Features</h2>
        </div>
    </div>

    <div
        class="features-carousel bg-white/10 border-2 border-white rounded-xl p-6 sm:p-8 overflow-hidden relative w-full">
        <!-- Prev Button -->
        <button
            class="carousel-prev absolute top-1/2 -translate-y-1/2 left-3 w-10 h-10 bg-white/20 rounded-full text-white flex items-center justify-center text-xl z-10 hover:bg-white/30 transition">
            ❮
        </button>

        <!-- Carousel Container -->
        <div class="carousel-container flex gap-6 sm:gap-8 transition-transform duration-500">
            <div
                class="feature-card w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-16px)] h-64 sm:h-80 bg-white/10 border-2 border-white rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 hover:bg-white/20 flex-shrink-0">
                [Feature 1]
            </div>
            <div
                class="feature-card w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-16px)] h-64 sm:h-80 bg-white/10 border-2 border-white rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 hover:bg-white/20 flex-shrink-0">
                [Feature 2]
            </div>
            <div
                class="feature-card w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-16px)] h-64 sm:h-80 bg-white/10 border-2 border-white rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 hover:bg-white/20 flex-shrink-0">
                [Feature 3]
            </div>
            <div
                class="feature-card w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-16px)] h-64 sm:h-80 bg-white/10 border-2 border-white rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 hover:bg-white/20 flex-shrink-0">
                [Feature 4]
            </div>
            <div
                class="feature-card w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-16px)] h-64 sm:h-80 bg-white/10 border-2 border-white rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 hover:bg-white/20 flex-shrink-0">
                [Feature 5]
            </div>
        </div>

        <!-- Next Button -->
        <button
            class="carousel-next absolute top-1/2 -translate-y-1/2 right-3 w-10 h-10 bg-white/20 rounded-full text-white flex items-center justify-center text-xl z-10 hover:bg-white/30 transition">
            ❯
        </button>
    </div>
</section>
