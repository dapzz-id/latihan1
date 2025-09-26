<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modern Landing Page</title>
    @vite('resources/css/app.css')

    <style>
        body {
            background: linear-gradient(135deg, #1D4ED8 0%, #488EF8 50%, #255DE0 100%);
        }

        /* Exhibition 3D cards */
        .exhibition-card {
            transform-style: preserve-3d;
            transform-origin: center;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .exhibition-card.active {
            transform: translateX(0) translateZ(200px) rotateY(0deg) !important;
            z-index: 5;
        }

        .exhibition-card:not(.active) {
            opacity: 0.6;
        }

        /* FAQ accordion */
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s;
        }

        .faq-item.active .faq-answer {
            max-height: 200px;
        }

        .faq-arrow {
            transition: transform 0.3s;
        }

        .faq-item.active .faq-arrow {
            transform: rotate(180deg);
        }

        /* Running text animation */
        @keyframes runText {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-runText {
            animation: runText 15s linear infinite;
        }
    </style>
</head>

<body class="min-h-screen text-white font-sans overflow-x-hidden">
    <!-- Header -->
    @include('utils.header')

    <!-- Main Content -->
    <main class="mt-6 px-12">
        <!-- Hero -->
        <section id="home" class="hero text-center w-full">
            <div
                class="w-full bg-white/20 mx-auto mb-5 lg:p-20 p-6 sm:p-10 rounded-lg flex items-center justify-center text-sm text-white/70">
                <img src="{{ asset('hero_img.png') }}" class="w-full max-w-md sm:max-w-2xl lg:max-w-4xl xl:max-w-[42rem]"
                    alt="">
            </div>
            <div class="relative w-full overflow-hidden">
                <div class="flex gap-5 justify-center animate-runText whitespace-nowrap">
                    <button
                        class="px-8 py-3 text-base border-2 border-white bg-transparent text-white rounded-full">Challenges</button>
                    <button
                        class="px-8 py-3 text-base border-2 border-white bg-transparent text-white rounded-full">Productivity</button>
                    <button
                        class="px-8 py-3 text-base border-2 border-white bg-transparent text-white rounded-full">Development</button>
                    <button
                        class="px-8 py-3 text-base border-2 border-white bg-transparent text-white rounded-full">Graphic</button>
                    <button
                        class="px-8 py-3 text-base border-2 border-white bg-transparent text-white rounded-full">Skill
                        Building</button>
                    <button
                        class="px-8 py-3 text-base border-2 border-white bg-transparent text-white rounded-full">Team</button>
                </div>
            </div>
        </section>

        <!-- Features Carousel -->
        <section id="features" class="features-section py-20 mt-12">
            <div class="relative flex flex-col sm:flex-row justify-center items-center mb-12 h-auto sm:h-40 px-6 sm:px-10 text-center sm:text-left">
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


        <!-- Exhibition -->
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

        <!-- About -->
        <section class="about-section py-20 text-center">
            <h2 class="text-4xl mb-10 font-bold">About</h2>
            <div class="w-4/5 max-w-2xl h-72 bg-white/10 mx-auto rounded-xl flex items-center justify-center">
                <a href="#" class="text-white no-underline">[About Image - Click to Learn More]</a>
            </div>
        </section>

        <!-- FAQ -->
        <section class="faq-section py-20">
            <h2 class="text-4xl text-center font-bold mb-10 text-stroke">FAQ</h2>
            <div class="faq-item bg-white/10 mb-4 rounded-xl overflow-hidden">
                <div class="faq-question p-5 cursor-pointer flex justify-between items-center hover:bg-white/15">
                    <span>Apakah platform ini bisa diakses di mobile dan desktop?</span><span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="px-5 pb-5">Ya, platform kami responsif di semua device.</div>
                </div>
            </div>
            <div class="faq-item bg-white/10 mb-4 rounded-xl overflow-hidden">
                <div class="faq-question p-5 cursor-pointer flex justify-between items-center hover:bg-white/15">
                    <span>Apakah platform ini cocok buat tech enthusiast saja?</span><span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="px-5 pb-5">Tidak, cocok untuk semua kalangan.</div>
                </div>
            </div>
            <div class="faq-item bg-white/10 mb-4 rounded-xl overflow-hidden">
                <div class="faq-question p-5 cursor-pointer flex justify-between items-center hover:bg-white/15">
                    <span>Apa yang ditampilkan dalam fitur Exhibition?</span><span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="px-5 pb-5">Karya digital pilihan pengguna.</div>
                </div>
            </div>
            <div class="faq-item bg-white/10 mb-4 rounded-xl overflow-hidden">
                <div class="faq-question p-5 cursor-pointer flex justify-between items-center hover:bg-white/15">
                    <span>Apakah fitur ini redirect ke halaman lain?</span><span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="px-5 pb-5">Sebagian fitur redirect ke halaman khusus.</div>
                </div>
            </div>
        </section>

        <!-- Running Text -->
        <div class="relative h-24 overflow-hidden -mx-12 my-20 flex flex-col gap-5 w-[calc(100%+100px)]">
            <div class="relative h-10 overflow-hidden bg-white/5 w-full">
                <div class="absolute text-2xl font-bold opacity-30 whitespace-nowrap animate-runText w-max px-5">
                    HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊
                </div>
            </div>
        </div>

        <!-- Contact -->
        <section class="contact-section py-16 px-8 text-center max-w-2xl mx-auto my-10">
            <h2 class="text-3xl mb-8 font-semibold">It's easy anything on your mind. Drop it here 👇</h2>
            <form class="max-w-lg mx-auto flex flex-col gap-4">
                <input type="text" placeholder="Name" required
                    class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-xl text-white placeholder:text-white/70" />
                <input type="email" placeholder="Email" required
                    class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-xl text-white placeholder:text-white/70" />
                <input type="tel" placeholder="Phone" required
                    class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-xl text-white placeholder:text-white/70" />
                <textarea placeholder="Message" rows="5" required
                    class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-xl text-white placeholder:text-white/70"></textarea>
                <button type="submit"
                    class="px-8 py-3 bg-white/15 text-white border border-white/30 rounded-xl mt-2 self-center hover:bg-white/20 hover:-translate-y-1">Send
                    Message</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    @include('utils.footer')

    <script>
        // FAQ
        document.querySelectorAll('.faq-question').forEach(q => {
            q.addEventListener('click', () => {
                const item = q.parentElement;
                item.classList.toggle('active');
                document.querySelectorAll('.faq-item').forEach(i => {
                    if (i !== item) i.classList.remove('active');
                });
            });
        });

        // Carousel
        const carousel = document.querySelector('.carousel-container');
        const cards = carousel.children;
        let cardWidth = 0,
            index = 0,
            autoScroll, visibleCards = 1;

        function getVisibleCards() {
            if (window.innerWidth >= 1024) return 3; // lg
            if (window.innerWidth >= 640) return 2; // sm
            return 1; // default mobile
        }

        function updateCardWidth() {
            if (!cards.length) return;
            const gap = parseInt(getComputedStyle(carousel).gap) || 0;
            cardWidth = cards[0].offsetWidth + gap;
            visibleCards = getVisibleCards();
        }

        function updateCarousel() {
            carousel.style.transform = `translateX(-${index * cardWidth}px)`;
        }

        function nextSlide() {
            const maxIndex = cards.length - visibleCards;
            index = (index + 1 > maxIndex) ? 0 : index + 1;
            updateCarousel();
        }

        function prevSlide() {
            const maxIndex = cards.length - visibleCards;
            index = (index - 1 < 0) ? maxIndex : index - 1;
            updateCarousel();
        }

        document.querySelector('.carousel-next').onclick = () => {
            clearInterval(autoScroll);
            nextSlide();
            startAuto();
        };

        document.querySelector('.carousel-prev').onclick = () => {
            clearInterval(autoScroll);
            prevSlide();
            startAuto();
        };

        function startAuto() {
            autoScroll = setInterval(nextSlide, 3000);
        }

        window.addEventListener('resize', () => {
            updateCardWidth();
            updateCarousel();
        });

        updateCardWidth();
        updateCarousel();
        startAuto();

        // Exhibition 3D
        const exCards = document.querySelectorAll('.exhibition-card');
        const exBtns = document.querySelectorAll('.exhibition-nav button');
        const total = exCards.length,
            theta = 2 * Math.PI / total,
            radius = 400;

        function showCard(idx) {
            exCards.forEach((c, i) => {
                c.classList.toggle('active', i === idx);
                const rot = -idx * theta,
                    ang = theta * i + rot;
                const x = radius * Math.sin(ang),
                    z = radius * Math.cos(ang) - radius;
                c.style.transform = `translateX(${x}px) translateZ(${z}px) rotateY(${ang}rad)`;
                c.style.zIndex = i === idx ? 5 : Math.round(z);
            });
            exBtns.forEach((b, i) => b.classList.toggle('active', i === idx));
        }
        exBtns.forEach((b, i) => b.addEventListener('click', () => showCard(i)));
        showCard(0);
    </script>

</body>

</html>
