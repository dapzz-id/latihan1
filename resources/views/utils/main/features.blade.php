<section id="features" class="features-section py-12 sm:py-16 md:py-20 mt-8 sm:mt-12">
    <!-- Header Section -->
    <div class="relative flex flex-col lg:flex-row justify-center lg:justify-start items-center mb-8 sm:mb-12 px-4 sm:px-6 md:px-10">
        <!-- Mobile & Tablet Layout (stacked) -->
        <div class="flex flex-col sm:flex-row items-center gap-6 sm:gap-8 md:gap-12 w-full lg:hidden">
            <!-- Planet Image -->
            <div class="relative flex-shrink-0">
                <img src="{{ asset('3D Planet.png') }}" alt="Globe"
                    class="w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 object-contain opacity-100">
                <div class="absolute inset-0 bg-blue-500/10 rounded-full blur-lg -z-10"></div>
            </div>
            
            <!-- Title -->
            <div class="text-center sm:text-left">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight">Our</h2>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight">
                    <span class="text-blue-200">interactive</span>
                </h2>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight">Features</h2>
            </div>
        </div>

        <!-- Desktop Layout (side by side) -->
        <div class="hidden lg:flex items-center gap-12 xl:gap-16">
            <!-- Planet Image -->
            <div class="relative flex-shrink-0">
                <img src="{{ asset('3D Planet.png') }}" alt="Globe"
                    class="w-48 h-48 xl:w-56 xl:h-56 2xl:w-64 2xl:h-64 object-contain opacity-100">
                <div class="absolute inset-0 bg-blue-500/10 rounded-full blur-lg -z-10"></div>
            </div>
            
            <!-- Title -->
            <div class="text-left">
                <h2 class="text-5xl xl:text-6xl 2xl:text-7xl font-bold leading-tight">Our</h2>
                <h2 class="text-5xl xl:text-6xl 2xl:text-7xl font-bold leading-tight">
                    <span class="text-blue-200">interactive</span>
                </h2>
                <h2 class="text-5xl xl:text-6xl 2xl:text-7xl font-bold leading-tight">Features</h2>
            </div>
        </div>
    </div>

    <!-- Carousel Section -->
    <div class="mx-4 sm:mx-6 md:mx-10">
        <div class="features-carousel bg-white/10 border border-white/20 sm:border-2 rounded-lg sm:rounded-xl p-4 sm:p-6 md:p-8 overflow-hidden relative w-full">
            <!-- Navigation Buttons -->
            <!-- Prev Button -->
            <button class="carousel-prev absolute top-1/2 -translate-y-1/2 left-2 sm:left-3 w-8 h-8 sm:w-10 sm:h-10 bg-white/20 rounded-full text-white flex items-center justify-center text-sm sm:text-xl z-10 hover:bg-white/30 transition-colors duration-200">
                <span class="hidden sm:inline">❮</span>
                <svg class="w-4 h-4 sm:hidden" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
            </button>

            <!-- Next Button -->
            <button class="carousel-next absolute top-1/2 -translate-y-1/2 right-2 sm:right-3 w-8 h-8 sm:w-10 sm:h-10 bg-white/20 rounded-full text-white flex items-center justify-center text-sm sm:text-xl z-10 hover:bg-white/30 transition-colors duration-200">
                <span class="hidden sm:inline">❯</span>
                <svg class="w-4 h-4 sm:hidden" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </button>

            <!-- Carousel Container -->
            <div class="carousel-container flex gap-3 sm:gap-4 md:gap-6 lg:gap-8 transition-transform duration-500 ease-in-out">
                <!-- Feature Cards -->
                <div class="feature-card flex-shrink-0 w-full xs:w-80 sm:w-[calc(50%-8px)] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] xl:w-[calc(33.333%-21px)] 2xl:w-[calc(25%-18px)] h-60 sm:h-72 md:h-80 lg:h-80 xl:h-84 rounded-lg sm:rounded-xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-sm border border-white/10 flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-105 hover:bg-white/15 overflow-hidden group">
                    <div class="w-3/4 h-3/4 sm:w-full sm:h-full p-2 sm:p-3 md:p-4">
                        <img src="{{ asset('card_dash.png') }}" alt="Dashboard Feature" 
                            class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-110">
                    </div>
                </div>

                <div class="feature-card flex-shrink-0 w-full xs:w-80 sm:w-[calc(50%-8px)] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] xl:w-[calc(33.333%-21px)] 2xl:w-[calc(25%-18px)] h-60 sm:h-72 md:h-80 lg:h-80 xl:h-84 rounded-lg sm:rounded-xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-sm border border-white/10 flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-105 hover:bg-white/15 overflow-hidden group">
                    <div class="w-3/4 h-3/4 sm:w-full sm:h-full p-2 sm:p-3 md:p-4">
                        <img src="{{ asset('card_detail.png') }}" alt="Detail Feature" 
                            class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-110">
                    </div>
                </div>

                <div class="feature-card flex-shrink-0 w-full xs:w-80 sm:w-[calc(50%-8px)] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] xl:w-[calc(33.333%-21px)] 2xl:w-[calc(25%-18px)] h-60 sm:h-72 md:h-80 lg:h-80 xl:h-84 rounded-lg sm:rounded-xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-sm border border-white/10 flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-105 hover:bg-white/15 overflow-hidden group">
                    <div class="w-3/4 h-3/4 sm:w-full sm:h-full p-2 sm:p-3 md:p-4">
                        <img src="{{ asset('card_profil.png') }}" alt="Profile Feature" 
                            class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-110">
                    </div>
                </div>

                <div class="feature-card flex-shrink-0 w-full xs:w-80 sm:w-[calc(50%-8px)] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] xl:w-[calc(33.333%-21px)] 2xl:w-[calc(25%-18px)] h-60 sm:h-72 md:h-80 lg:h-80 xl:h-84 rounded-lg sm:rounded-xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-sm border border-white/10 flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-105 hover:bg-white/15 overflow-hidden group">
                    <div class="w-3/4 h-3/4 sm:w-full sm:h-full p-2 sm:p-3 md:p-4">
                        <img src="{{ asset('card_submit.png') }}" alt="Submit Feature" 
                            class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-110">
                    </div>
                </div>

                <div class="feature-card flex-shrink-0 w-full xs:w-80 sm:w-[calc(50%-8px)] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] xl:w-[calc(33.333%-21px)] 2xl:w-[calc(25%-18px)] h-60 sm:h-72 md:h-80 lg:h-80 xl:h-84 rounded-lg sm:rounded-xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-sm border border-white/10 flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-105 hover:bg-white/15 overflow-hidden group">
                    <div class="w-3/4 h-3/4 sm:w-full sm:h-full p-2 sm:p-3 md:p-4">
                        <img src="{{ asset('cd_karya.png') }}" alt="Portfolio Feature" 
                            class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-110">
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Indicators (Optional - for better UX on mobile) -->
        <div class="flex justify-center mt-4 sm:mt-6 space-x-2">
            <div class="carousel-indicator w-2 h-2 rounded-full bg-white/30 transition-all duration-300 cursor-pointer hover:bg-white/50"></div>
            <div class="carousel-indicator w-2 h-2 rounded-full bg-white/30 transition-all duration-300 cursor-pointer hover:bg-white/50"></div>
            <div class="carousel-indicator w-2 h-2 rounded-full bg-white/30 transition-all duration-300 cursor-pointer hover:bg-white/50"></div>
            <div class="carousel-indicator w-2 h-2 rounded-full bg-white/30 transition-all duration-300 cursor-pointer hover:bg-white/50"></div>
            <div class="carousel-indicator w-2 h-2 rounded-full bg-white/30 transition-all duration-300 cursor-pointer hover:bg-white/50"></div>
        </div>
    </div>
</section>