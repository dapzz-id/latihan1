<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fadeIn': 'fadeIn 1s ease-in',
                        'runText': 'runText 20s linear infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            from: { opacity: 0, transform: 'translateY(20px)' },
                            to: { opacity: 1, transform: 'translateY(0)' }
                        },
                        runText: {
                            '0%': { transform: 'translateX(100%)' },
                            '100%': { transform: 'translateX(-100%)' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        }
        
        /* Custom styles for the 3D exhibition cards */
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
        
        /* FAQ transition styles */
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
    </style>
</head>
<body class="min-h-screen text-white font-sans overflow-x-hidden">
    <!-- Header -->
    <header class="flex justify-between items-center py-5 px-12 bg-white/10 backdrop-blur fixed w-full top-0 z-50">
        <div class="text-2xl font-bold">Logo</div>
        <nav>
            <ul class="flex gap-8 list-none">
                <li><a href="#home" class="text-white no-underline transition-all hover:text-shadow-lg hover:text-white/80">Home</a></li>
                <li><a href="#features" class="text-white no-underline transition-all hover:text-shadow-lg hover:text-white/80">Features</a></li>
                <li><a href="#gallery" class="text-white no-underline transition-all hover:text-shadow-lg hover:text-white/80">Gallery</a></li>
                <li><a href="#about" class="text-white no-underline transition-all hover:text-shadow-lg hover:text-white/80">About</a></li>
                <li><a href="#contact" class="text-white no-underline transition-all hover:text-shadow-lg hover:text-white/80">Contact</a></li>
            </ul>
        </nav>
        <button class="bg-white/20 px-5 py-2 rounded-full border border-white text-white cursor-pointer transition-all hover:bg-white hover:text-purple-700">Sign In</button>
    </header>

    <!-- Main Content -->
    <main class="mt-24 px-12">
        <!-- Hero Section -->
        <section class="hero text-center py-20">
            <div class="w-52 h-24 bg-white/20 mx-auto mb-5 rounded-lg flex items-center justify-center text-sm text-white/70">[Hero Image Here]</div>
            <h1 class="text-5xl mb-5 animate-fadeIn">Infinite Ideas Take Flight</h1>
            <p class="text-xl opacity-90">Unleash your creativity with our platform</p>
            <div class="cta-buttons mt-10 flex gap-5 justify-center">
                <button class="px-8 py-3 text-base border-2 border-white bg-transparent text-white rounded-full cursor-pointer transition-all hover:bg-white hover:text-purple-700 hover:-translate-y-1">Challenges</button>
                <button class="px-8 py-3 text-base border-2 border-white bg-transparent text-white rounded-full cursor-pointer transition-all hover:bg-white hover:text-purple-700 hover:-translate-y-1">Productivity</button>
                <button class="px-8 py-3 text-base border-2 border-white bg-transparent text-white rounded-full cursor-pointer transition-all hover:bg-white hover:text-purple-700 hover:-translate-y-1">Development</button>
                <button class="px-8 py-3 text-base border-2 border-white bg-transparent text-white rounded-full cursor-pointer transition-all hover:bg-white hover:text-purple-700 hover:-translate-y-1">Graphic</button>
                <button class="px-8 py-3 text-base border-2 border-white bg-transparent text-white rounded-full cursor-pointer transition-all hover:bg-white hover:text-purple-700 hover:-translate-y-1">Skill Building</button>
                <button class="px-8 py-3 text-base border-2 border-white bg-transparent text-white rounded-full cursor-pointer transition-all hover:bg-white hover:text-purple-700 hover:-translate-y-1">Team</button>
            </div>
        </section>

        <!-- Interactive Features -->
        <section class="features-section py-20">
            <div class="features-header flex items-center mb-12">
                <h2 class="text-4xl mr-5">Our <span class="italic">Interactive</span> Features</h2>
                <div class="w-24 h-24 bg-white/10 rounded-lg opacity-50"></div>
            </div>
            <div class="features-carousel bg-white/10 border-2 border-white rounded-xl p-8 overflow-hidden relative w-full">
                <button class="carousel-nav carousel-prev absolute top-1/2 -translate-y-1/2 left-2 w-10 h-10 bg-white/20 border-none rounded-full text-white cursor-pointer flex items-center justify-center text-xl z-10">❮</button>
                <div class="carousel-container flex gap-8 transition-transform duration-500 w-full">
                    <div class="feature-card min-w-[calc(33.333%-20px)] h-80 bg-white/10 border-2 border-white rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 hover:bg-white/20 flex-shrink-0">[Feature 1]</div>
                    <div class="feature-card min-w-[calc(33.333%-20px)] h-80 bg-white/10 border-2 border-white rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 hover:bg-white/20 flex-shrink-0">[Feature 2]</div>
                    <div class="feature-card min-w-[calc(33.333%-20px)] h-80 bg-white/10 border-2 border-white rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 hover:bg-white/20 flex-shrink-0">[Feature 3]</div>
                    <div class="feature-card min-w-[calc(33.333%-20px)] h-80 bg-white/10 border-2 border-white rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 hover:bg-white/20 flex-shrink-0">[Feature 4]</div>
                    <div class="feature-card min-w-[calc(33.333%-20px)] h-80 bg-white/10 border-2 border-white rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 hover:bg-white/20 flex-shrink-0">[Feature 5]</div>
                    <div class="feature-card min-w-[calc(33.333%-20px)] h-80 bg-white/10 border-2 border-white rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 hover:bg-white/20 flex-shrink-0">[Feature 6]</div>
                    <div class="feature-card min-w-[calc(33.333%-20px)] h-80 bg-white/10 border-2 border-white rounded-xl flex items-center justify-center cursor-pointer transition-all hover:scale-105 hover:bg-white/20 flex-shrink-0">[Feature 7]</div>
                </div>
                <button class="carousel-nav carousel-next absolute top-1/2 -translate-y-1/2 right-2 w-10 h-10 bg-white/20 border-none rounded-full text-white cursor-pointer flex items-center justify-center text-xl z-10">❯</button>
            </div>
        </section>

        <!-- Exhibition Section -->
        <section class="exhibition-section py-20 text-center">
            <div class="exhibition-header flex items-center justify-center mb-12">
                <div class="w-16 h-16 bg-white/20 rounded-lg"></div>
                <h2 class="text-4xl ml-5 text-stroke">Exhibition</h2>
            </div>
            <p class="mb-8">A collection of digital artworks</p>
            <div class="exhibition-grid flex justify-center items-center gap-5 perspective-2000 mx-auto h-96 relative transform-style-3d">
                <div class="exhibition-card h-80 w-72 bg-white/10 rounded-xl overflow-hidden absolute cursor-pointer transform-origin-center transform-style-3d transition-all border-2 border-white/20 shadow-lg pointer-events-auto">[Artwork 1]</div>
                <div class="exhibition-card h-80 w-72 bg-white/10 rounded-xl overflow-hidden absolute cursor-pointer transform-origin-center transform-style-3d transition-all border-2 border-white/20 shadow-lg pointer-events-auto">[Artwork 2]</div>
                <div class="exhibition-card h-80 w-72 bg-white/10 rounded-xl overflow-hidden absolute cursor-pointer transform-origin-center transform-style-3d transition-all border-2 border-white/20 shadow-lg pointer-events-auto">[Artwork 3]</div>
                <div class="exhibition-card h-80 w-72 bg-white/10 rounded-xl overflow-hidden absolute cursor-pointer transform-origin-center transform-style-3d transition-all border-2 border-white/20 shadow-lg pointer-events-auto">[Artwork 4]</div>
                <div class="exhibition-card h-80 w-72 bg-white/10 rounded-xl overflow-hidden absolute cursor-pointer transform-origin-center transform-style-3d transition-all border-2 border-white/20 shadow-lg pointer-events-auto">[Artwork 5]</div>
            </div>
            <div class="exhibition-nav mt-5 flex justify-center gap-2">
                <button class="active px-4 py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer transition-all hover:bg-white/20 hover:-translate-y-1">1</button>
                <button class="px-4 py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer transition-all hover:bg-white/20 hover:-translate-y-1">2</button>
                <button class="px-4 py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer transition-all hover:bg-white/20 hover:-translate-y-1">3</button>
                <button class="px-4 py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer transition-all hover:bg-white/20 hover:-translate-y-1">4</button>
                <button class="px-4 py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer transition-all hover:bg-white/20 hover:-translate-y-1">5</button>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section py-20 text-center">
            <h2 class="text-4xl mb-10 text-stroke">About</h2>
            <div class="about-image-placeholder w-4/5 max-w-2xl h-72 bg-white/10 mx-auto rounded-xl flex items-center justify-center">
                <a href="#" class="text-white no-underline">[About Image - Click to Learn More]</a>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section py-20">
            <h2 class="text-4xl mb-10 text-stroke">FAQ</h2>
            <div class="faq-item bg-white/10 mb-4 rounded-xl overflow-hidden border border-transparent transition-all">
                <div class="faq-question p-5 cursor-pointer flex justify-between items-center hover:bg-white/15">
                    <span>Apakah platform ini bisa diakses di mobile dan desktop?</span>
                    <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="px-5 pb-5">Ya, platform kami dapat diakses melalui berbagai perangkat termasuk mobile, tablet, dan desktop dengan tampilan yang responsif.</div>
                </div>
            </div>
            <div class="faq-item bg-white/10 mb-4 rounded-xl overflow-hidden border border-transparent transition-all">
                <div class="faq-question p-5 cursor-pointer flex justify-between items-center hover:bg-white/15">
                    <span>Apakah platform ini cocok buat tech enthusiast saja?</span>
                    <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="px-5 pb-5">Tidak, platform kami dirancang untuk semua kalangan, baik pemula maupun profesional di berbagai bidang.</div>
                </div>
            </div>
            <div class="faq-item bg-white/10 mb-4 rounded-xl overflow-hidden border border-transparent transition-all">
                <div class="faq-question p-5 cursor-pointer flex justify-between items-center hover:bg-white/15">
                    <span>Apa yang ditampilkan dalam fitur Exhibition?</span>
                    <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="px-5 pb-5">Exhibition menampilkan karya-karya digital terpilih dari pengguna kami yang telah dikurasi dengan baik.</div>
                </div>
            </div>
            <div class="faq-item bg-white/10 mb-4 rounded-xl overflow-hidden border border-transparent transition-all">
                <div class="faq-question p-5 cursor-pointer flex justify-between items-center hover:bg-white/15">
                    <span>Apakah fitur ini pengguna dipindah ke halaman redirect?</span>
                    <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="px-5 pb-5">Sebagian besar fitur dapat diakses langsung di platform, namun beberapa konten khusus mungkin memerlukan redirect ke halaman khusus.</div>
                </div>
            </div>
        </section>

        <!-- Running Text section -->
        <div class="running-text-container relative h-24 overflow-hidden -mx-12 my-20 flex flex-col gap-5 w-[calc(100%+100px)]">
            <div class="running-text-line relative h-10 overflow-hidden bg-white/5 w-full">
                <div class="running-text running-text-1 absolute text-2xl font-bold opacity-30 whitespace-nowrap animate-runText w-max px-5">
                    HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊
                </div>
            </div>
            <div class="running-text-line relative h-10 overflow-hidden bg-white/5 w-full">
                <div class="running-text running-text-2 absolute text-2xl font-bold opacity-30 whitespace-nowrap animate-runText w-max px-5">
                    CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <section class="contact-section py-16 px-8 text-center max-w-2xl mx-auto my-10">
            <h2 class="text-3xl mb-8 text-white font-semibold">It's easy anything on your mind. Drop it here 👇</h2>
            <form class="contact-form max-w-lg mx-auto flex flex-col gap-4">
                <div class="form-group">
                    <input type="text" placeholder="Name" required class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-xl text-white text-base transition-all focus:outline-none focus:bg-white/15 focus:border-white/50 placeholder:text-white/70">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" required class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-xl text-white text-base transition-all focus:outline-none focus:bg-white/15 focus:border-white/50 placeholder:text-white/70">
                </div>
                <div class="form-group">
                    <input type="tel" placeholder="Phone" required class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-xl text-white text-base transition-all focus:outline-none focus:bg-white/15 focus:border-white/50 placeholder:text-white/70">
                </div>
                <div class="form-group">
                    <textarea placeholder="Message" rows="5" required class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-xl text-white text-base transition-all focus:outline-none focus:bg-white/15 focus:border-white/50 placeholder:text-white/70"></textarea>
                </div>
                <button type="submit" class="submit-btn px-8 py-3 bg-white/15 text-white border border-white/30 rounded-xl text-base font-medium cursor-pointer transition-all mt-2 self-center hover:bg-white/20 hover:-translate-y-1">Send Message</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer-section bg-white/10 py-16 px-12 mt-16 text-left">
        <div class="footer-content text-left max-w-6xl mx-auto pl-5">
            <h3 class="text-3xl font-semibold mb-5 text-white leading-tight">Stay Connected<br>with Web Name</h3>
            <div class="footer-contact text-lg leading-relaxed text-white/90">
                <p>📧 info@webname.com</p>
                <p>📞 +62 812 3456 7890</p>
            </div>
        </div>
    </footer>

    <script>
        // FAQ Functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                faqItem.classList.toggle('active');
                
                // Close other items
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== faqItem) {
                        item.classList.remove('active');
                    }
                });
            });
        });

        // Updated Carousel functionality
        const carousel = document.querySelector('.carousel-container');
        const cards = carousel.children;
        const cardWidth = cards[0].offsetWidth + 32; // Including gap
        let currentIndex = 0;
        let autoScrollInterval;

        function updateCarousel() {
            carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % (cards.length - 2);
            updateCarousel();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + (cards.length - 2)) % (cards.length - 2);
            updateCarousel();
        }

        document.querySelector('.carousel-next').addEventListener('click', () => {
            clearInterval(autoScrollInterval);
            nextSlide();
            startAutoScroll();
        });

        document.querySelector('.carousel-prev').addEventListener('click', () => {
            clearInterval(autoScrollInterval);
            prevSlide();
            startAutoScroll();
        });

        function startAutoScroll() {
            autoScrollInterval = setInterval(nextSlide, 3000);
        }

        startAutoScroll();

        // Exhibition Cards 3D Effect
        const exhibitionCards = document.querySelectorAll('.exhibition-card');
        const exhibitionNavBtns = document.querySelectorAll('.exhibition-nav button');
        const totalCards = exhibitionCards.length;
        const theta = 2 * Math.PI / totalCards;
        const radius = 400;

        function showCard(index) {
            exhibitionCards.forEach((card, i) => {
                card.classList.remove('active');
                if (i === index) {
                    card.classList.add('active');
                }
                
                const rotation = -index * theta;
                const angle = theta * i + rotation;
                const x = radius * Math.sin(angle);
                const z = radius * Math.cos(angle) - radius;
                
                card.style.transform = `translateX(${x}px) translateZ(${z}px) rotateY(${angle}rad)`;
                card.style.zIndex = i === index ? 5 : Math.round(z);
            });

            exhibitionNavBtns.forEach((btn, i) => {
                btn.classList.toggle('active', i === index);
            });
        }

        exhibitionNavBtns.forEach((btn, index) => {
            btn.addEventListener('click', () => showCard(index));
        });

        // Initial arrangement
        showCard(0);
    </script>
</body>
</html>