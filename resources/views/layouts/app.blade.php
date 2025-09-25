<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Ideas Take Flight</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-blue-600 via-blue-500 to-purple-600 min-h-screen">
    <!-- Navigation -->
    @include('utils.header')

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-6">
        <div class="container mx-auto text-center">
            <div class="mb-12 animate-float">
                <div class="inline-flex items-center space-x-4 text-white">
                    <div class="text-6xl font-bold">T</div>
                    <div class="text-right">
                        <div class="text-3xl font-light">infinite ideas</div>
                        <div class="text-2xl font-bold">ake——light</div>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-white text-sm">Challenges</span>
                <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-white text-sm">Productivity</span>
                <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-white text-sm">Development</span>
                <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-white text-sm">Graphic</span>
                <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-white text-sm">Skill Building</span>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 px-6">
        <div class="container mx-auto">
            <div class="text-white mb-12">
                <h2 class="text-2xl font-light mb-2">Our innovative</h2>
                <h3 class="text-4xl font-bold">Features</h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                    <div class="w-12 h-12 bg-blue-400 rounded-lg mb-4 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h4 class="text-white font-semibold text-lg mb-2">Dashboard</h4>
                    <p class="text-blue-100 text-sm">Comprehensive analytics and insights at your fingertips</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                    <div class="w-12 h-12 bg-red-400 rounded-lg mb-4 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h4 class="text-white font-semibold text-lg mb-2">Daily Challenge</h4>
                    <p class="text-blue-100 text-sm">Engage with new challenges every day to boost your skills</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                    <div class="w-12 h-12 bg-yellow-400 rounded-lg mb-4 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                        </svg>
                    </div>
                    <h4 class="text-white font-semibold text-lg mb-2">Smart Editor</h4>
                    <p class="text-blue-100 text-sm">Intelligent content creation with AI-powered suggestions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Exhibition Section -->
    <section class="py-16 px-6">
        <div class="container mx-auto">
            <div class="flex items-center mb-12">
                <div class="w-12 h-12 bg-white/20 rounded-lg mr-4 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <div class="text-white">
                    <h2 class="text-4xl font-bold">Exhibition</h2>
                    <p class="text-blue-100">A collection of digital artworks</p>
                </div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                <div class="aspect-square bg-gradient-to-br from-pink-400 to-purple-500 rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer"></div>
                <div class="aspect-square bg-gradient-to-br from-blue-400 to-cyan-500 rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer"></div>
                <div class="aspect-square bg-gradient-to-br from-gray-600 to-gray-800 rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer border-2 border-white/30"></div>
                <div class="aspect-square bg-gradient-to-br from-green-400 to-blue-500 rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer"></div>
                <div class="aspect-square bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer"></div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 px-6">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-white mb-12">About</h2>
            
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 relative">
                <div class="absolute top-4 left-4 flex space-x-2">
                    <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                    <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                    <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                </div>
                
                <div class="mt-8 text-white">
                    <p class="text-sm leading-relaxed">
                        Platform ini menggunakan metode pembelajaran berbasis teknologi untuk mengoptimalkan pengalaman belajar. Kami percaya bahwa setiap persen dapat mencapai tujuan digital dengan cara pembelajaran yang tepat. Solusi kami menggunakan algoritma pemasaran yang berbeda.
                    </p>
                </div>
                
                <div class="mt-6 flex justify-center">
                    <div class="w-8 h-8 bg-blue-400 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 px-6">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-white mb-12 flex items-center">
                FAQ
                <span class="ml-2 text-2xl">❓</span>
            </h2>
            
            <div class="space-y-4">
                <details class="bg-white/10 backdrop-blur-sm rounded-lg">
                    <summary class="p-4 text-white cursor-pointer hover:bg-white/20 transition-colors rounded-lg">
                        Apakah platform ini bisa diakses di mobile atau dekstopnya?
                    </summary>
                    <div class="p-4 pt-0 text-blue-100 text-sm">
                        Ya, platform kami dapat diakses melalui berbagai perangkat termasuk mobile dan desktop dengan tampilan yang responsif.
                    </div>
                </details>
                
                <details class="bg-white/10 backdrop-blur-sm rounded-lg">
                    <summary class="p-4 text-white cursor-pointer hover:bg-white/20 transition-colors rounded-lg">
                        Apakah platform ini cocok buat baru mulai pertama kali?
                    </summary>
                    <div class="p-4 pt-0 text-blue-100 text-sm">
                        Tentu saja! Platform kami dirancang khusus untuk pemula dengan panduan langkah demi langkah yang mudah diikuti.
                    </div>
                </details>
                
                <details class="bg-white/10 backdrop-blur-sm rounded-lg">
                    <summary class="p-4 text-white cursor-pointer hover:bg-white/20 transition-colors rounded-lg">
                        Ada yang subscription bulanan buat Exhibition?
                    </summary>
                    <div class="p-4 pt-0 text-blue-100 text-sm">
                        Ya, kami menyediakan paket subscription bulanan untuk akses penuh ke galeri Exhibition dengan konten premium.
                    </div>
                </details>
                
                <details class="bg-white/10 backdrop-blur-sm rounded-lg">
                    <summary class="p-4 text-white cursor-pointer hover:bg-white/20 transition-colors rounded-lg">
                        Apakah konten pengguna dapat disinkronkan otomatis?
                    </summary>
                    <div class="p-4 pt-0 text-blue-100 text-sm">
                        Ya, semua konten dan progress Anda akan tersinkronisasi secara otomatis di semua perangkat yang terhubung.
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 px-6">
        <div class="container mx-auto">
            <div class="text-center mb-8">
                <div class="text-white/60 text-sm mb-4">
                    CONTACT • HELP • CONTACT • CONTACT • HELP • CONTACT • HELP
                </div>
                <p class="text-white">
                    Is there anything on your mind?<br>
                    Drop a line & let's
                </p>
            </div>
            
            <form class="max-w-md mx-auto space-y-4">
                <input type="text" placeholder="Name" class="w-full p-3 bg-white rounded-lg border-none outline-none">
                <input type="email" placeholder="Email" class="w-full p-3 bg-white rounded-lg border-none outline-none">
                <input type="tel" placeholder="Phone" class="w-full p-3 bg-white rounded-lg border-none outline-none">
                <textarea placeholder="Message" rows="4" class="w-full p-3 bg-white rounded-lg border-none outline-none resize-none"></textarea>
                <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                    Send Message
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-16 px-6">
        <div class="container mx-auto">
            <div class="text-white mb-8">
                <h2 class="text-4xl font-bold mb-2">Stay</h2>
                <h3 class="text-2xl font-light mb-2">Connected</h3>
                <h4 class="text-2xl font-light mb-2">with Web</h4>
                <h5 class="text-4xl font-bold">Name</h5>
            </div>
            
            <div class="text-blue-200 text-sm">
                <p>© 2024 Web Name. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Add smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 100) {
                navbar.classList.add('bg-white/20');
            } else {
                navbar.classList.remove('bg-white/20');
            }
        });
    </script>
</body>
</html>