<section class="exhibition-section py-20">
    <div class="relative flex flex-col items-center mb-12">
        <!-- Star Icon - Bigger size -->
        <div class="absolute left-0 top-1/2 -translate-y-1/2">
            <img src="{{ asset('Star.png') }}" alt="Star" class="w-32 h-32 sm:w-40 sm:h-40 object-contain">
        </div>

        <!-- Centered Title -->
        <div class="text-center">
            <h2 class="text-4xl font-bold text-white drop-shadow-md">Exhibition</h2>
            <p class="text-lg mt-2">A collection of digital artworks</p>
        </div>
    </div>

    <div
    class="exhibition-grid flex justify-center items-center gap-5 perspective-2000 mx-auto h-96 relative transform-style-3d">

    <div
        class="exhibition-card h-80 w-72 rounded-xl overflow-hidden absolute cursor-pointer shadow-lg">
        <img src="{{ asset('exhibition1.png') }}" alt="Artwork 1" class="w-full h-full object-cover">
    </div>

    <div
        class="exhibition-card h-80 w-72 rounded-xl overflow-hidden absolute cursor-pointer shadow-lg">
        <img src="{{ asset('exhibition2.png') }}" alt="Artwork 2" class="w-full h-full object-cover">
    </div>

    <div
        class="exhibition-card h-80 w-72 rounded-xl overflow-hidden absolute cursor-pointer shadow-lg">
        <img src="{{ asset('exhibition3.png') }}" alt="Artwork 3" class="w-full h-full object-cover">
    </div>

    <div
        class="exhibition-card h-80 w-72 rounded-xl overflow-hidden absolute cursor-pointer shadow-lg">
        <img src="{{ asset('exhibition4.png') }}" alt="Artwork 4" class="w-full h-full object-cover">
    </div>

    <div
        class="exhibition-card h-80 w-72 rounded-xl overflow-hidden absolute cursor-pointer shadow-lg">
        <img src="{{ asset('exhibition5.png') }}" alt="Artwork 5" class="w-full h-full object-cover">
    </div>

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
</section>
