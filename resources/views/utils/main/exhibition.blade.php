<section class="exhibition-section py-10 sm:py-16 lg:py-20 px-4 sm:px-6 lg:px-8">
    <div class="relative flex flex-col items-center mb-8 sm:mb-10 lg:mb-12">
        <!-- Star Icon - Responsive sizes -->
        <div class="absolute left-2 sm:left-0 top-1/2 -translate-y-1/2">
            <img src="{{ asset('Star.png') }}" alt="Star" class="w-16 h-16 sm:w-24 sm:h-24 md:w-32 md:h-32 lg:w-40 lg:h-40 object-contain">
        </div>

        <!-- Centered Title -->
        <div class="text-center">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white drop-shadow-md">Exhibition</h2>
            <p class="text-sm sm:text-base lg:text-lg mt-2">A collection of digital artworks</p>
        </div>
    </div>

    <div class="exhibition-grid flex justify-center items-center gap-2 sm:gap-3 md:gap-5 perspective-2000 mx-auto h-64 sm:h-80 md:h-96 relative transform-style-3d overflow-hidden">

        <div class="exhibition-card h-48 w-36 sm:h-64 sm:w-48 md:h-72 md:w-56 lg:h-80 lg:w-72 rounded-lg sm:rounded-xl overflow-hidden absolute cursor-pointer shadow-lg">
            <img src="{{ asset('exhibition1.png') }}" alt="Artwork 1" class="w-full h-full object-cover">
        </div>

        <div class="exhibition-card h-48 w-36 sm:h-64 sm:w-48 md:h-72 md:w-56 lg:h-80 lg:w-72 rounded-lg sm:rounded-xl overflow-hidden absolute cursor-pointer shadow-lg">
            <img src="{{ asset('exhibition2.png') }}" alt="Artwork 2" class="w-full h-full object-cover">
        </div>

        <div class="exhibition-card h-48 w-36 sm:h-64 sm:w-48 md:h-72 md:w-56 lg:h-80 lg:w-72 rounded-lg sm:rounded-xl overflow-hidden absolute cursor-pointer shadow-lg">
            <img src="{{ asset('exhibition3.png') }}" alt="Artwork 3" class="w-full h-full object-cover">
        </div>

        <div class="exhibition-card h-48 w-36 sm:h-64 sm:w-48 md:h-72 md:w-56 lg:h-80 lg:w-72 rounded-lg sm:rounded-xl overflow-hidden absolute cursor-pointer shadow-lg">
            <img src="{{ asset('exhibition4.png') }}" alt="Artwork 4" class="w-full h-full object-cover">
        </div>

        <div class="exhibition-card h-48 w-36 sm:h-64 sm:w-48 md:h-72 md:w-56 lg:h-80 lg:w-72 rounded-lg sm:rounded-xl overflow-hidden absolute cursor-pointer shadow-lg">
            <img src="{{ asset('exhibition5.png') }}" alt="Artwork 5" class="w-full h-full object-cover">
        </div>

    </div>
    
    <div class="exhibition-nav mt-3 sm:mt-4 lg:mt-5 flex justify-center gap-1 sm:gap-2 flex-wrap">
        <button class="active px-2 py-1 sm:px-3 sm:py-2 lg:px-4 lg:py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1 text-sm sm:text-base transition-all duration-200">1</button>
        <button class="px-2 py-1 sm:px-3 sm:py-2 lg:px-4 lg:py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1 text-sm sm:text-base transition-all duration-200">2</button>
        <button class="px-2 py-1 sm:px-3 sm:py-2 lg:px-4 lg:py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1 text-sm sm:text-base transition-all duration-200">3</button>
        <button class="px-2 py-1 sm:px-3 sm:py-2 lg:px-4 lg:py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1 text-sm sm:text-base transition-all duration-200">4</button>
        <button class="px-2 py-1 sm:px-3 sm:py-2 lg:px-4 lg:py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1 text-sm sm:text-base transition-all duration-200">5</button>
    </div>
</section>