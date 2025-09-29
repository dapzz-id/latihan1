<section class=" min-h-screen">
    <!-- Profile Card -->
    <div class=" mx-auto bg-gradient-to-r from-[#FBebc1] to-[#67C2DE] rounded-2xl shadow-lg shadow-white/30 lg:p-6 p-8 relative">
        <div class="flex flex-col py-12 px-10 sm:flex-row items-center sm:items-start gap-6">
            <!-- Avatar -->
            <div class="w-32 h-32 -mt-4 ml-0.5 lg:mr-5 bg-[#1D4ED8] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                <img src="https://i.pravatar.cc/40?img=4" class="w-full object-cover rounded-full">
            </div>
            <!-- Info -->
            <div class="flex-1 flex-col text-center justify-center items-center sm:text-left">
                <h2 class="text-2xl font-bold text-[#1D4ED8]">Ataya</h2>
                <p class="lg:text-sm text-xs text-[#1D4ED8]/80">atayanafisrizqulah@gmail.com</p>
                <button class="mt-4 px-5 py-3.5 text-xs lg:text-base bg-[#3676DE] rounded-full text-white font-medium shadow hover:bg-[#3676DE]/80 transition">
                    ✏️ Edit Profile
                </button>
            </div>
        </div>
    </div>

    <!-- My Posts -->
    <div class="max-w-6xl mx-auto mt-12">
        <h3 class="text-white text-lg font-semibold mb-6">My Posts</h3>

        <!-- Grid images -->
        <div id="cardGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($searchResults as $result)
                <div class="card rounded-xl overflow-hidden shadow-lg cursor-pointer bg-white/10 shadow-white/30 hover:scale-105 transition" onclick="window.location.href='/detail-karya'">
                    <div class="w-full aspect-video">
                        <img src="{{ $result['image'] }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="flex items-center justify-between px-4 py-3 text-white text-sm">
                        <span class="username">{{ $result['username'] }}</span>
                        <span>❤️ {{ $result['likes'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Floating Button -->
    <button class="fixed bottom-6 right-6 w-14 h-14 cursor-pointer rounded-full bg-[#67C2DE] shadow-lg shadow-white/30 flex items-center justify-center text-white hover:bg-[#D2F4FF]/80 transition" onclick="window.location.href='/add-karya'">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
    </button>
</section>
