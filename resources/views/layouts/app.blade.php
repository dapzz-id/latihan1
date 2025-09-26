<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Landing Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            color: white;
            overflow-x: hidden;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }

        nav a:hover {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .sign-in-btn {
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 20px;
            border: 1px solid white;
            color: white;
            cursor: pointer;
            transition: all 0.3s;
        }

        .sign-in-btn:hover {
            background: white;
            color: #764ba2;
        }

        /* Main Content */
        main {
            margin-top: 100px;
            padding: 0 50px;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 80px 0;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in;
        }

        .hero-image-placeholder {
            width: 200px;
            height: 100px;
            background: rgba(255, 255, 255, 0.2);
            margin: 0 auto 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
        }

        .hero p {
            font-size: 20px;
            opacity: 0.9;
        }

        .cta-buttons {
            margin-top: 40px;
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .cta-buttons button {
            padding: 12px 30px;
            font-size: 16px;
            border: 2px solid white;
            background: transparent;
            color: white;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .cta-buttons button:hover {
            background: white;
            color: #764ba2;
            transform: translateY(-2px);
        }

        /* Interactive Features Section */
        .features-section {
            padding: 80px 0;
        }

        .features-header {
            display: flex;
            align-items: center;
            margin-bottom: 50px;
        }

        .features-header h2 {
            font-size: 36px;
            margin-right: 20px;
        }

        .features-header h2 span {
            font-style: italic;
        }

        .features-bg-placeholder {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            opacity: 0.5;
        }

        .features-carousel {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid white;
            border-radius: 15px;
            padding: 30px;
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .carousel-container {
            display: flex;
            gap: 30px;
            transition: transform 0.5s ease;
            width: 100%;
        }

        .feature-card {
            min-width: calc(33.333% - 20px);
            height: 350px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            flex-shrink: 0;
        }

        .feature-card:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.2);
        }

        .carousel-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 50%;
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            z-index: 2;
        }

        .carousel-prev {
            left: 10px;
        }

        .carousel-next {
            right: 10px;
        }

        /* Exhibition Section */
        .exhibition-section {
            padding: 80px 0;
            text-align: center;
        }

        .exhibition-header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 50px;
        }

        .exhibition-header h2 {
            font-size: 36px;
            text-stroke: 1px white;
            -webkit-text-stroke: 1px white;
            margin-left: 20px;
        }

        .exhibition-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
        }

        .exhibition-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            perspective: 2000px;
            margin: 0 auto;
            height: 450px;
            position: relative;
            transform-style: preserve-3d;
        }

        .exhibition-card {
            height: 400px;
            width: 280px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            overflow: hidden;
            position: absolute;
            cursor: pointer;
            transform-origin: center;
            transform-style: preserve-3d;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            pointer-events: auto;
        }

        .exhibition-card.active {
            z-index: 5;
            transform: translateX(0) translateZ(200px) rotateY(0deg) !important;
        }

        .exhibition-card:not(.active) {
            opacity: 0.6;
            pointer-events: auto;
        }

        /* About Section */
        .about-section {
            padding: 80px 0;
            text-align: center;
        }

        .about-section h2 {
            font-size: 36px;
            -webkit-text-stroke: 1px white;
            margin-bottom: 40px;
        }

        .about-image-placeholder {
            width: 80%;
            max-width: 600px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            margin: 0 auto;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* FAQ Section */
        .faq-section {
            padding: 80px 0;
        }

        .faq-section h2 {
            font-size: 36px;
            -webkit-text-stroke: 1px white;
            margin-bottom: 40px;
        }

        .faq-item {
            background: rgba(255, 255, 255, 0.1);
            margin-bottom: 15px;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid transparent;
            transition: all 0.3s;
        }

        .faq-question {
            padding: 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-question:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        .faq-arrow {
            transition: transform 0.3s;
        }

        .faq-item.active {
            border-color: white;
        }

        .faq-item.active .faq-arrow {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s;
        }

        .faq-item.active .faq-answer {
            max-height: 200px;
            padding: 0 20px 20px;
        }

        /* Running Text */
        .running-text-container {
            position: relative;
            height: 100px;
            overflow: hidden;
            margin: 80px -50px; /* Negative margin to counter main padding */
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: calc(100% + 100px); /* Compensate for the main padding */
        }

        .running-text-line {
            position: relative;
            height: 40px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.05);
            width: 100%;
        }

        .running-text {
            position: absolute;
            font-size: 24px;
            font-weight: bold;
            opacity: 0.3;
            white-space: nowrap;
            animation: runText 20s linear infinite;
            width: max-content;
            padding: 0 20px;
        }

        .running-text-1 {
            animation-direction: normal;
        }

        .running-text-2 {
            animation-direction: reverse;
        }

        @keyframes runText {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        /* Exhibition Navigation */
        .exhibition-nav {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .exhibition-nav button {
            padding: 8px 15px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid white;
            border-radius: 20px;
            color: white;
            cursor: pointer;
            transition: all 0.3s;
        }

        .exhibition-nav button:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .exhibition-nav button.active {
            background: white;
            color: #764ba2;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Contact Section */
        .contact-section {
            padding: 60px 30px;
            text-align: center;
            max-width: 800px;
            margin: 40px auto;
        }

        .contact-section h2 {
            font-size: 32px;
            margin-bottom: 30px;
            color: white;
            font-weight: 600;
        }

        .contact-form {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            color: white;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .submit-btn {
            padding: 12px 30px;
            background: rgba(255, 255, 255, 0.15);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 10px;
            align-self: center;
        }

        .submit-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Footer Section */
        .footer-section {
            background: rgba(255, 255, 255, 0.1);
            padding: 60px 50px;
            margin-top: 60px;
            text-align: left;
        }

        .footer-content {
            text-align: left;
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 20px;
        }

        .footer-content h3 {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 20px;
            color: white;
            line-height: 1.2;
        }

        .footer-contact {
            font-size: 18px;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.9);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">Logo</div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <button class="sign-in-btn">Sign In</button>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-image-placeholder">[Hero Image Here]</div>
            <h1>Infinite Ideas Take Flight</h1>
            <p>Unleash your creativity with our platform</p>
            <div class="cta-buttons">
                <button>Challenges</button>
                <button>Productivity</button>
                <button>Development</button>
                <button>Graphic</button>
                <button>Skill Building</button>
                <button>Team</button>
            </div>
        </section>

        <!-- Interactive Features -->
        <section class="features-section">
            <div class="features-header">
                <h2>Our <span>Interactive</span> Features</h2>
                <div class="features-bg-placeholder"></div>
            </div>
            <div class="features-carousel">
                <button class="carousel-nav carousel-prev">❮</button>
                <div class="carousel-container">
                    <div class="feature-card">[Feature 1]</div>
                    <div class="feature-card">[Feature 2]</div>
                    <div class="feature-card">[Feature 3]</div>
                    <div class="feature-card">[Feature 4]</div>
                    <div class="feature-card">[Feature 5]</div>
                    <div class="feature-card">[Feature 6]</div>
                    <div class="feature-card">[Feature 7]</div>
                </div>
                <button class="carousel-nav carousel-next">❯</button>
            </div>
        </section>

        <!-- Exhibition Section -->
        <section class="exhibition-section">
            <div class="exhibition-header">
                <div class="exhibition-icon"></div>
                <h2>Exhibition</h2>
            </div>
            <p style="margin-bottom: 30px;">A collection of digital artworks</p>
            <div class="exhibition-grid">
                <div class="exhibition-card">[Artwork 1]</div>
                <div class="exhibition-card">[Artwork 2]</div>
                <div class="exhibition-card">[Artwork 3]</div>
                <div class="exhibition-card">[Artwork 4]</div>
                <div class="exhibition-card">[Artwork 5]</div>
            </div>
            <div class="exhibition-nav">
                <button class="active">1</button>
                <button>2</button>
                <button>3</button>
                <button>4</button>
                <button>5</button>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section">
            <h2>About</h2>
            <div class="about-image-placeholder">
                <a href="#" style="color: white; text-decoration: none;">[About Image - Click to Learn More]</a>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <h2>FAQ</h2>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Apakah platform ini bisa diakses di mobile dan desktop?</span>
                    <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    Ya, platform kami dapat diakses melalui berbagai perangkat termasuk mobile, tablet, dan desktop dengan tampilan yang responsif.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Apakah platform ini cocok buat tech enthusiast saja?</span>
                    <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    Tidak, platform kami dirancang untuk semua kalangan, baik pemula maupun profesional di berbagai bidang.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Apa yang ditampilkan dalam fitur Exhibition?</span>
                    <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    Exhibition menampilkan karya-karya digital terpilih dari pengguna kami yang telah dikurasi dengan baik.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Apakah fitur ini pengguna dipindah ke halaman redirect?</span>
                    <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    Sebagian besar fitur dapat diakses langsung di platform, namun beberapa konten khusus mungkin memerlukan redirect ke halaman khusus.
                </div>
            </div>
        </section>

        <!-- Running Text section update -->
        <div class="running-text-container">
            <div class="running-text-line">
                <div class="running-text running-text-1">
                    HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊
                </div>
            </div>
            <div class="running-text-line">
                <div class="running-text running-text-2">
                    CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <section class="contact-section">
            <h2>It's easy anything on your mind. Drop it here 👇</h2>
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="tel" placeholder="Phone" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="footer-content">
            <h3>Stay Connected<br>with Web Name</h3>
            <div class="footer-contact">
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
        const cardWidth = cards[0].offsetWidth + 30; // Including gap
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