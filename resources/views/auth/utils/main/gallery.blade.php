<section 
    class="relative bg-cover bg-no-repeat bg-center py-16 sm:py-24 mt-12" 
    style="background-image: url('{{ asset('bg_gallery.png') }}');"
>
    <div class="container mx-auto px-4 sm:px-6">
        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-8 text-center sm:text-left">
            <h2 class="text-2xl sm:text-3xl font-bold text-blue-800 drop-shadow mb-4 sm:mb-0">
                Gallery
            </h2>
            <a href="#" class="text-blue-600 font-medium flex justify-center sm:justify-end items-center space-x-1 hover:underline">
                <span>See all Gallery</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        <!-- Gallery Items -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-12">
            <div class="rounded-xl overflow-hidden shadow-lg aspect-[4/3]">
                <img src="{{ asset('gallery1.png') }}" alt="Gallery 1" class="w-full h-full object-cover">
            </div>
            <div class="rounded-xl overflow-hidden shadow-lg aspect-[4/3]">
                <img src="{{ asset('gallery2.png') }}" alt="Gallery 2" class="w-full h-full object-cover">
            </div>
            <div class="rounded-xl overflow-hidden shadow-lg aspect-[4/3]">
                <img src="{{ asset('gallery3.png') }}" alt="Gallery 3" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>
