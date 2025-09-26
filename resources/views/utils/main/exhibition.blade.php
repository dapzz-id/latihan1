<section class="exhibition-section py-20 text-center">
    <div class="exhibition-header flex flex-col sm:flex-row items-center justify-center mb-12 text-center sm:text-left">
        <!-- Icon -->
        <div class="w-20 h-20 sm:w-28 sm:h-28 flex-shrink-0">
            <img src="{{ asset('Star.png') }}" alt="Star" class="w-full h-full object-contain">
        </div>

        <!-- Title -->
        <h2 class="text-2xl sm:text-4xl font-bold ml-0 sm:ml-5 mt-4 sm:mt-0 text-white drop-shadow-md">
            Exhibition
        </h2>
    </div>

    <p class="mb-8">A collection of digital artworks</p>

    <div
        class="exhibition-grid flex justify-center items-center gap-5 perspective-2000 mx-auto h-96 relative transform-style-3d">
        <div
            class="exhibition-card h-80 w-72 bg-white/10 rounded-xl overflow-hidden absolute cursor-pointer border-2 border-white/20 shadow-lg">
            [Artwork 1]</div>
        <div
            class="exhibition-card h-80 w-72 bg-white/10 rounded-xl overflow-hidden absolute cursor-pointer border-2 border-white/20 shadow-lg">
            [Artwork 2]</div>
        <div
            class="exhibition-card h-80 w-72 bg-white/10 rounded-xl overflow-hidden absolute cursor-pointer border-2 border-white/20 shadow-lg">
            [Artwork 3]</div>
        <div
            class="exhibition-card h-80 w-72 bg-white/10 rounded-xl overflow-hidden absolute cursor-pointer border-2 border-white/20 shadow-lg">
            [Artwork 4]</div>
        <div
            class="exhibition-card h-80 w-72 bg-white/10 rounded-xl overflow-hidden absolute cursor-pointer border-2 border-white/20 shadow-lg">
            [Artwork 5]</div>
    </div>
    <div class="exhibition-nav mt-5 flex justify-center gap-2">
        <button
            class="active px-4 py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1">1</button>
        <button
            class="px-4 py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1">2</button>
        <button
            class="px-4 py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1">3</button>
        <button
            class="px-4 py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1">4</button>
        <button
            class="px-4 py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1">5</button>
    </div>
</section>
