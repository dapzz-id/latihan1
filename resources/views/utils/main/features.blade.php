<section id="features" class="features-section py-16 sm:py-20 mt-12 px-4 sm:px-8 lg:px-16">
    <!-- Header -->
    <div class="relative flex flex-col lg:flex-row justify-start items-center mb-12 lg:h-40 text-center lg:text-left gap-8 lg:gap-12">
        <!-- Jupiter Image -->
        <div class="relative flex-shrink-0">
            <img src="{{ asset('3D Planet.png') }}" alt="Globe"
                class="w-32 h-32 sm:w-40 sm:h-40 lg:w-56 lg:h-56 object-contain opacity-100 mx-auto lg:mx-0">
            <div class="absolute inset-0 bg-blue-500/10 rounded-full blur-lg -z-10"></div>
        </div>

        <!-- Title -->
        <div>
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
                Our <span class="text-blue-200 italic">interactive</span>
            </h2>
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
                Features
            </h2>
        </div>
    </div>

    <!-- Carousel Wrapper -->
    <div class="features-carousel bg-white/10 border-2 border-white rounded-xl p-4 sm:p-6 lg:p-8 overflow-hidden relative w-full">
        <!-- Carousel Container -->
        <div class="carousel-container flex gap-4 sm:gap-6 lg:gap-8 transition-transform duration-500">
            
            <!-- Feature Card -->
            <div class="feature-card w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] h-64 sm:h-72 lg:h-80 rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 flex-shrink-0 overflow-hidden">
                <img src="{{ asset('card_dash.png') }}" alt="Feature 1" class="w-full h-full object-contain">
            </div>

            <div class="feature-card w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] h-64 sm:h-72 lg:h-80 rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 flex-shrink-0 overflow-hidden">
                <img src="{{ asset('card_detail.png') }}" alt="Feature 2" class="w-full h-full object-contain">
            </div>

            <div class="feature-card w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] h-64 sm:h-72 lg:h-80 rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 flex-shrink-0 overflow-hidden">
                <img src="{{ asset('card_profil.png') }}" alt="Feature 3" class="w-full h-full object-contain">
            </div>

            <div class="feature-card w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] h-64 sm:h-72 lg:h-80 rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 flex-shrink-0 overflow-hidden">
                <img src="{{ asset('card_submit.png') }}" alt="Feature 4" class="w-full h-full object-contain">
            </div>

            <div class="feature-card w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] h-64 sm:h-72 lg:h-80 rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 flex-shrink-0 overflow-hidden">
                <img src="{{ asset('card_gallery.png') }}" alt="Feature 5" class="w-full h-full object-contain">
            </div>
        </div>
    </div>
</section>