<section id="features" class="features-section py-20 mt-12">
    <div
        class="relative flex flex-col sm:flex-row justify-start items-center mb-12 h-auto sm:h-40 px-6 sm:px-10 text-left">
        <!-- Text dan Image Container -->
        <div class="flex items-center gap-12 mb-12">
            <!-- Jupiter Image dengan opacity penuh -->
            <div class="relative">
                <img src="{{ asset('3D Planet.png') }}" alt="Globe"
                    class="w-40 h-40 sm:w-48 sm:h-48 lg:w-56 lg:h-56 object-contain opacity-100">
                <div class="absolute inset-0 bg-blue-500/10 rounded-full blur-lg -z-10"></div>
            </div>

            <!-- Features Title dengan posisi sejajar -->
            <div class="text-left">
                <h2 class="text-5xl lg:text-6xl font-bold leading-tight">Our</h2>
                <h2 class="text-5xl lg:text-6xl font-bold leading-tight"><span class="text-blue-200">interactive</span>
                </h2>
                <h2 class="text-5xl lg:text-6xl font-bold leading-tight">Features</h2>
            </div>
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
                class="feature-card w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-16px)] h-80 sm:h-80 rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 flex-shrink-0 overflow-hidden">
                <img src="{{ asset('card_dash.png') }}" alt="Feature 1" class="w-full h-full object-contain">
            </div>

            <div
                class="feature-card w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-16px)] h-80 sm:h-80 rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 flex-shrink-0 overflow-hidden">
                <img src="{{ asset('card_detail.png') }}" alt="Feature 2" class="w-full h-full object-contain">
            </div>

            <div
                class="feature-card w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-16px)] h-80 sm:h-80 rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 flex-shrink-0 overflow-hidden">
                <img src="{{ asset('card_profil.png') }}" alt="Feature 3" class="w-full h-full object-contain">
            </div>

            <div
                class="feature-card w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-16px)] h-80 sm:h-80 rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 flex-shrink-0 overflow-hidden">
                <img src="{{ asset('card_submit.png') }}" alt="Feature 4" class="w-full h-full object-contain">
            </div>

            <div
                class="feature-card w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-16px)] h-80 sm:h-80 rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 flex-shrink-0 overflow-hidden">
                <img src="{{ asset('cd_karya.png') }}" alt="Feature 5" class="w-full h-full object-contain">
            </div>
        </div>

        <!-- Next Button -->
        <button
            class="carousel-next absolute top-1/2 -translate-y-1/2 right-3 w-10 h-10 bg-white/20 rounded-full text-white flex items-center justify-center text-xl z-10 hover:bg-white/30 transition">
            ❯
        </button>
    </div>
</section>
