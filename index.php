<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="La Principauté - Hôtel de luxe à BAKASSA, Cameroun. Chambres élégantes, service exceptionnel et expériences uniques.">
    <meta name="keywords" content="hôtel, luxe, BAKASSA, Cameroun, chambres, restaurant, spa">
    <meta name="author" content="La Principauté">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.laprincedouala.com/">
    <meta property="og:title" content="La Principauté - Hôtel de Luxe">
    <meta property="og:description" content="Découvrez l'élégance et le luxe à Douala">
    <meta property="og:image" content="https://www.laprincedouala.com/assets/images/hero.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.laprincedouala.com/">
    <meta property="twitter:title" content="La Principauté - Hôtel de Luxe">
    <meta property="twitter:description" content="Découvrez l'élégance et le luxe à Douala">
    <meta property="twitter:image" content="https://www.laprincedouala.com/assets/images/hero.jpg">
    
    <title>La Principauté - Hôtel de Luxe à Douala</title>
    
    <!-- CDN avec cache et optimisation -->
    <script src="https://cdn.tailwindcss.com?cache=true"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" integrity="sha384-07Qb9RER/Q26hwQroR+T6uh2RYyLOk0ew4v2DAZUJ6/982u9CzcMrPU6+0zD9t+u" crossorigin="anonymous" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap');
        
        html, body {
            overflow-x: hidden;
            max-width: 100vw;
            background: linear-gradient(135deg, #f9fafb 0%, #e0e7ff 100%);
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            scroll-behavior: smooth;
            overflow-x: hidden;
            max-width: 100vw;
        }
        
        .title-font {
            font-family: 'Playfair Display', serif;
        }
        
        .gold-gradient {
            background: linear-gradient(90deg, #d4af37 0%, #f9d423 100%);
        }

        /* Nouvelles classes pour le header */
        .nav-link {
            position: relative;
            padding-bottom: 2px;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: linear-gradient(90deg, #d4af37 0%, #f9d423 100%);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .header-shadow {
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        .logo-hover {
            transition: transform 0.3s ease;
        }

        .logo-hover:hover {
            transform: scale(1.05);
        }

        .nav-button {
            position: relative;
            overflow: hidden;
            border-radius: 9999px;
            font-weight: 800;
            font-size: 0.95rem;
            background: linear-gradient(135deg, #FFD700 0%, #f9d423 50%, #FFD700 100%);
            color: #111 !important;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3), 0 2px 8px rgba(0,0,0,0.1);
            transition: all 0.3s cubic-bezier(.4,2,.3,1);
            z-index: 10;
            border: 2px solid #FFD700;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            padding: 12px 24px;
            min-width: 140px;
            text-align: center;
        }
        .nav-button:hover, .nav-button:focus {
            box-shadow: 0 8px 25px rgba(255, 215, 0, 0.5), 0 4px 15px rgba(0,0,0,0.15);
            transform: translateY(-2px) scale(1.05);
            background: linear-gradient(135deg, #f9d423 0%, #FFD700 50%, #f9d423 100%);
            color: #111 !important;
            border-color: #f9d423;
        }
        .nav-button:active {
            transform: translateY(0) scale(0.98);
            box-shadow: 0 2px 10px rgba(255, 215, 0, 0.4);
        }

        .nav-link {
            transition: color 0.25s, background 0.25s, box-shadow 0.25s;
            border-radius: 9999px;
            padding: 0.25rem 0.75rem;
            position: relative;
        }
        .nav-link:hover, .nav-link:focus {
            background: linear-gradient(90deg, #FFD700 0%, #f9d423 100%);
            color: #111 !important;
            box-shadow: 0 2px 12px 0 #FFD70099;
            z-index: 2;
        }
        .nav-link:active {
            transform: scale(0.97);
        }

        .mobile-menu {
            transform: translateY(-10px);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .mobile-menu.show {
            transform: translateY(0);
            opacity: 1;
        }
        
        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/images/home.jpg');
            background-size: cover;
            background-position: center;
            animation: heroBgZoom 14s ease-in-out infinite alternate;
        }
        @keyframes heroBgZoom {
            0% {
                background-size: 100% 100%;
            }
            50% {
                background-size: 108% 108%;
            }
            100% {
                background-size: 100% 100%;
            }
        }
        
        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .testimonial-card {
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: scale(1.03);
        }
        
        .gallery-item {
            transition: all 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: scale(1.05);
        }
        
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Dégradé animé pour le header */
        .animated-gradient {
            background: linear-gradient(270deg, #000428, #004e92, #000428);
            background-size: 400% 400%;
            animation: gradientMoveBlue 12s ease infinite;
        }
        @keyframes gradientMoveBlue {
            0% {background-position:0% 50%}
            50% {background-position:100% 50%}
            100% {background-position:0% 50%}
        }
        /* Effet de zoom et filtre sur la galerie */
        .gallery-item img {
            transition: transform 0.5s cubic-bezier(.4,2,.3,1), filter 0.4s;
        }
        .gallery-item:hover img {
            transform: scale(1.08) rotate(-2deg);
            filter: brightness(1.1) saturate(1.2) drop-shadow(0 4px 16px #d4af3777);
        }
        /* Effet de survol sur les boutons */
        .nav-button, .gold-gradient, .btn-animate {
            transition: all 0.3s cubic-bezier(.4,2,.3,1);
        }
        .nav-button:hover, .gold-gradient:hover, .btn-animate:hover {
            box-shadow: 0 0 24px 0 #fc5c7d55, 0 4px 24px 0 #d4af3777;
            transform: scale(1.08) rotate(-1deg);
            background: linear-gradient(90deg, #fc5c7d 0%, #6a82fb 100%);
            color: #fff !important;
        }
        /* Micro-interaction sur les icônes réseaux */
        .social-anim {
            transition: transform 0.2s, color 0.2s;
        }
        .social-anim:hover {
            transform: scale(1.2) rotate(-8deg);
            color: #fc5c7d !important;
        }
        /* Animation d'apparition fade-in */
        .fade-in {
            opacity: 0;
            transform: translateY(40px);
            animation: fadeInUp 1s forwards;
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: none;
            }
        }
        /* Effet ripple sur les boutons */
        .ripple {
            position: relative;
            overflow: hidden;
        }
        .ripple:after {
            content: '';
            display: block;
            position: absolute;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            left: 50%;
            top: 50%;
            pointer-events: none;
            background: rgba(252,92,125,0.25);
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.4s, opacity 0.8s;
            opacity: 0;
        }
        .ripple:active:after {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
            transition: 0s;
        }
        /* --- Palette ergonomique supplémentaire --- */
        :root {
            --beige-pastel: #f7f6ef;
            --gris-perle: #f3f4f6;
            --blanc-casse: #f9fafb;
            --bleu-pale: #eaf6fb;
        }
        section.bg-gray-50,
        section.bg-gray-100 {
            background: linear-gradient(120deg, var(--beige-pastel) 60%, var(--bleu-pale) 100%) !important;
            transition: background 0.6s;
        }
        section.bg-white {
            background: var(--blanc-casse) !important;
            transition: background 0.6s;
        }
        section#chambres {
            background: linear-gradient(120deg, var(--bleu-pale) 60%, var(--gris-perle) 100%) !important;
            transition: background 0.6s;
        }
        section#offres {
            background: linear-gradient(90deg, var(--beige-pastel) 60%, var(--or-clair) 100%) !important;
            transition: background 0.6s;
        }
        section#evenements {
            background: var(--gris-perle) !important;
            transition: background 0.6s;
        }
        section#galerie {
            background: linear-gradient(120deg, var(--bleu-pale) 60%, var(--beige-pastel) 100%) !important;
            transition: background 0.6s;
        }
        section#equipe {
            background: var(--beige-pastel) !important;
            transition: background 0.6s;
        }
        section#recompenses {
            background: var(--gris-perle) !important;
            transition: background 0.6s;
        }
        section#faq {
            background: var(--blanc-casse) !important;
            transition: background 0.6s;
        }
        section#acces {
            background: linear-gradient(120deg, var(--beige-pastel) 60%, var(--bleu-pale) 100%) !important;
            transition: background 0.6s;
        }
        section#experiences {
            background: var(--gris-perle) !important;
            transition: background 0.6s;
        }
        section#groupes {
            background: var(--blanc-casse) !important;
            transition: background 0.6s;
        }
        section#partenaires {
            background: var(--beige-pastel) !important;
            transition: background 0.6s;
        }
        section#contact {
            background: var(--gris-perle) !important;
            transition: background 0.6s;
        }
        /* --- Micro-interactions sur champs, liens, icônes --- */
        input:focus, select:focus, textarea:focus {
            animation: bounceField 0.25s;
        }
        @keyframes bounceField {
            0% { transform: scale(1); }
            60% { transform: scale(1.04); }
            100% { transform: scale(1); }
        }
        a, .nav-link {
            transition: color 0.2s, transform 0.2s;
        }
        a:hover, .nav-link:hover {
            transform: translateY(-2px) scale(1.04);
        }
        .social-anim {
            transition: transform 0.2s, color 0.2s, box-shadow 0.2s;
        }
        .social-anim:hover {
            transform: scale(1.22) rotate(-8deg);
            color: #38bdf8 !important;
            box-shadow: 0 2px 12px #38bdf855;
        }
        button:active, .btn-animate:active, .nav-button:active {
            animation: btnVibrate 0.18s linear;
        }
        @keyframes btnVibrate {
            0% { transform: scale(1) translateX(0); }
            20% { transform: scale(0.98) translateX(-2px); }
            40% { transform: scale(1.02) translateX(2px); }
            60% { transform: scale(0.99) translateX(-1px); }
            80% { transform: scale(1.01) translateX(1px); }
            100% { transform: scale(1) translateX(0); }
        }
        /* --- Icônes dorées pour le formulaire de contact --- */
        #contact .fa-map-marker-alt,
        #contact .fa-phone-alt,
        #contact .fa-envelope {
            color: #d4af37 !important;
        }
        .hero-image a.bg-gold-500 {
            background: #fff !important;
            color: #d4af37 !important;
            box-shadow: 0 6px 32px 0 #0007, 0 2px 8px 0 #d4af3744;
            border: 2px solid #fff3;
            font-size: 1.15rem;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-shadow: 0 2px 8px #fff8, 0 1px 2px #0008;
            transition: box-shadow 0.3s, border 0.3s, background 0.3s, color 0.3s;
        }
        .hero-image a.bg-gold-500:hover, .hero-image a.bg-gold-500:focus {
            box-shadow: 0 8px 40px 0 #000b, 0 4px 16px 0 #d4af3777;
            border: 2px solid #d4af37;
            background: linear-gradient(90deg, #f9d423 0%, #FFD700 100%) !important;
            color: #111 !important;
            transform: scale(1.07) rotate(-1deg);
        }
        /* --- Icônes dorées pour la section À propos --- */
        #about .fa-wifi,
        #about .fa-swimming-pool,
        #about .fa-utensils,
        #about .fa-spa {
            color: #d4af37 !important;
        }
        /* --- Animation fade-up personnalisée pour apparition progressive des sections --- */
        section.fade-up-init {
            opacity: 0;
            transform: translateY(60px);
            transition: opacity 1.4s cubic-bezier(.4,2,.3,1), transform 1.4s cubic-bezier(.4,2,.3,1);
        }
        section.fade-up-active {
            opacity: 1;
            transform: none;
        }
        .chiffre-gradient {
            background: linear-gradient(90deg, #FFD700 0%, #f9d423 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }
        .chiffre-card {
            box-shadow: 0 4px 24px 0 #0004;
            border: 1.5px solid rgba(249,212,35,0.08);
        }
        .chiffre-card:hover {
            transform: translateY(-10px) scale(1.04);
            box-shadow: 0 8px 32px 0 #FFD70055, 0 4px 24px 0 #0008;
            border: 1.5px solid #FFD700;
        }

        /* --- Style des Titres de Section --- */
        h2.title-font {
            position: relative;
            display: inline-block;
            padding-bottom: 0.75rem; /* 12px */
        }
        h2.title-font::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, #d4af37 0%, #f9d423 100%);
            border-radius: 2px;
            box-shadow: 0 2px 8px 0 rgba(212, 175, 55, 0.5);
        }
        /* --- Effet de Lueur sur les Cartes --- */
        .room-card, .offre-card {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        .room-card:hover, .offre-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 30px -10px rgba(0,0,0,0.15), 0 0 25px -5px rgba(212, 175, 55, 0.6);
        }
    </style>
    <!-- CSS pré-chargé -->
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preload" as="style" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    
    <!-- Pré-chargement des images principales -->
    <link rel="preload" as="image" href="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa">
    <link rel="preload" as="image" href="https://www.laprincedouala.com/assets/images/hero.jpg">
</head>
<body class="bg-white text-gray-800" onload="initialize()">
    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/237678760117?text=Bonjour%2C%20je%20souhaite%20avoir%20des%20informations%20sur%20votre%20h%C3%B4tel." class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Bouton Remonter en haut -->
    <button id="scrollTopBtn" aria-label="Remonter en haut" class="fixed bottom-8 left-1/2 transform -translate-x-1/2 z-50 bg-white text-blue-500 border border-blue-200 shadow-lg rounded-full p-3 transition-opacity duration-300 opacity-0 pointer-events-none aos-zoom-hover" style="box-shadow: 0 4px 16px #38bdf855;">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Navigation -->
    <nav class="animated-gradient bg-black bg-opacity-95 text-white sticky top-0 z-50 header-shadow transition-all duration-300">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center mr-8 min-w-fit -ml-4">
                    <a href="#" class="logo-hover flex items-center gap-3">
                        <img src="assets/images/logo.png" alt="La Principauté" class="h-12 w-auto rounded-full">
                        <span class="text-xl font-bold gold-gradient bg-clip-text text-transparent title-font tracking-wide">LA PRINCIPAUTÉ</span>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center">
                    <a href="#accueil" class="nav-link text-gray-200 hover:text-gold-500 transition" data-aos="fade-down">Accueil</a>
                    <a href="#about" class="nav-link text-gray-200 hover:text-gold-500 transition" data-aos="fade-down" data-aos-delay="100">À propos</a>
                    <a href="#chambres" class="nav-link text-gray-200 hover:text-gold-500 transition" data-aos="fade-down" data-aos-delay="200">Chambres</a>
                    <a href="#services" class="nav-link text-gray-200 hover:text-gold-500 transition" data-aos="fade-down" data-aos-delay="300">Services</a>
                    <a href="#offres" class="nav-link text-gray-200 hover:text-gold-500 transition" data-aos="fade-down" data-aos-delay="400">Offres</a>
                    <a href="#evenements" class="nav-link text-gray-200 hover:text-gold-500 transition" data-aos="fade-down" data-aos-delay="500">Événements</a>
                    <a href="#galerie" class="nav-link text-gray-200 hover:text-gold-500 transition" data-aos="fade-down" data-aos-delay="600">Galerie</a>
                    <a href="#blog" class="nav-link text-gray-200 hover:text-gold-500 transition" data-aos="fade-down" data-aos-delay="700">Blog</a>
                </div>
                
                <div class="items-center">
                    <a href="#contact" class="nav-button hidden md:flex bg-gold-500 text-black px-4 py-1 rounded-full hover:bg-gold-600 transition items-center ripple btn-animate" data-aos="zoom-in" data-aos-delay="800">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        Réserver
                    </a>
                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button class="outline-none mobile-menu-button transition-transform duration-300 hover:scale-110">
                            <svg class="w-6 h-6 text-gray-200" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div class="mobile-menu hidden md:hidden bg-black bg-opacity-95 mt-4 rounded-lg p-4">
                <a href="#accueil" class="block py-3 px-4 text-gray-200 hover:text-gold-500 transition hover:bg-gray-900 rounded">
                    <i class="fas fa-home mr-2"></i>Accueil
                </a>
                <a href="#about" class="block py-3 px-4 text-gray-200 hover:text-gold-500 transition hover:bg-gray-900 rounded">
                    <i class="fas fa-info-circle mr-2"></i>À propos
                </a>
                <a href="#chambres" class="block py-3 px-4 text-gray-200 hover:text-gold-500 transition hover:bg-gray-900 rounded">
                    <i class="fas fa-bed mr-2"></i>Chambres
                </a>
                <a href="#services" class="block py-3 px-4 text-gray-200 hover:text-gold-500 transition hover:bg-gray-900 rounded">
                    <i class="fas fa-concierge-bell mr-2"></i>Services
                </a>
                <a href="#offres" class="block py-3 px-4 text-gray-200 hover:text-gold-500 transition hover:bg-gray-900 rounded">
                    <i class="fas fa-tag mr-2"></i>Offres
                </a>
                <a href="#evenements" class="block py-3 px-4 text-gray-200 hover:text-gold-500 transition hover:bg-gray-900 rounded">
                    <i class="fas fa-glass-cheers mr-2"></i>Événements
                </a>
                <a href="#galerie" class="block py-3 px-4 text-gray-200 hover:text-gold-500 transition hover:bg-gray-900 rounded">
                    <i class="fas fa-images mr-2"></i>Galerie
                </a>
                <a href="#blog" class="block py-3 px-4 text-gray-200 hover:text-gold-500 transition hover:bg-gray-900 rounded">
                    <i class="fas fa-blog mr-2"></i>Blog
                </a>
                <a href="#contact" class="block mt-2 text-center bg-gold-500 text-black py-3 px-4 rounded-full hover:bg-gold-600 transition">
                    <i class="fas fa-calendar-alt mr-2"></i>Réserver
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="hero-image h-screen flex items-center justify-center text-center text-white" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <h1 class="title-font text-4xl md:text-6xl font-bold mb-6">Bienvenue à <span class="gold-gradient bg-clip-text text-transparent">La Principauté</span></h1>
            <p class="text-xl md:text-2xl mb-8">Un havre de paix où le luxe rencontre le confort</p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="#chambres" class="bg-gold-500 hover:bg-gold-600 text-black font-bold py-3 px-6 rounded transition duration-300">Nos Chambres</a>
                <a href="#contact" class="bg-transparent hover:bg-white hover:text-black text-white font-bold py-3 px-6 border border-white rounded transition duration-300">Réserver</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <img src="assets/images/bien etre.jpg" alt="Hôtel La Principauté" class="rounded-lg shadow-xl w-full">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="title-font text-3xl md:text-4xl font-bold mb-6">À propos de <span class="gold-gradient bg-clip-text text-transparent">La Principauté</span></h2>
                    <p class="text-gray-600 mb-4">Fondé en 2010, La Principauté est bien plus qu'un simple hôtel. C'est une expérience, un voyage sensoriel où chaque détail a été pensé pour votre bien-être.</p>
                    <p class="text-gray-600 mb-6">Situé au cœur de la ville, notre établissement allie élégance contemporaine et charme intemporel pour vous offrir un séjour inoubliable.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <div class="bg-gold-500 p-2 rounded-full mr-3">
                                <i class="fas fa-wifi text-white"></i>
                            </div>
                            <span>WiFi Haut Débit</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-gold-500 p-2 rounded-full mr-3">
                                <i class="fas fa-swimming-pool text-white"></i>
                            </div>
                            <span>Piscine</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-gold-500 p-2 rounded-full mr-3">
                                <i class="fas fa-utensils text-white"></i>
                            </div>
                            <span>Restaurant</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-gold-500 p-2 rounded-full mr-3">
                                <i class="fas fa-spa text-white"></i>
                            </div>
                            <span>Spa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms Section -->
    <section id="chambres" class="py-20 bg-white" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Nos <span class="gold-gradient bg-clip-text text-transparent">Chambres</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Découvrez nos chambres et suites luxueuses, conçues pour répondre à toutes vos attentes en matière de confort et d'élégance.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Room 1 -->
                <div class="room-card bg-white rounded-lg overflow-hidden shadow-md transition duration-500" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/images/classique.jpg" alt="Chambre Classique" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="title-font text-xl font-bold">Chambre Classique</h3>
                            <span class="text-gold-500 font-bold">90000f/nuit</span>
                        </div>
                        <p class="text-gray-600 mb-4">Une chambre élégante avec tout le confort nécessaire pour un séjour agréable.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 px-2 py-1 text-xs rounded">30m²</span>
                            <span class="bg-gray-100 px-2 py-1 text-xs rounded">1-2 personnes</span>
                            <span class="bg-gray-100 px-2 py-1 text-xs rounded">Vue ville</span>
                        </div>
                        <a href="#contact" class="block w-full text-center bg-black text-white py-2 rounded hover:bg-gray-800 transition">Réserver</a>
                    </div>
                </div>
                
                <!-- Room 2 -->
                <div class="room-card bg-white rounded-lg overflow-hidden shadow-md transition duration-500" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/images/Suite Deluxe.jpg" alt="Suite Deluxe" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="title-font text-xl font-bold">Suite Deluxe</h3>
                            <span class="text-gold-500 font-bold">150000f/nuit</span>
                        </div>
                        <p class="text-gray-600 mb-4">Un espace généreux avec salon séparé et vue imprenable sur la ville.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 px-2 py-1 text-xs rounded">50m²</span>
                            <span class="bg-gray-100 px-2 py-1 text-xs rounded">1-3 personnes</span>
                            <span class="bg-gray-100 px-2 py-1 text-xs rounded">Vue panoramique</span>
                        </div>
                        <a href="#contact" class="block w-full text-center bg-black text-white py-2 rounded hover:bg-gray-800 transition">Réserver</a>
                    </div>
                </div>
                
                <!-- Room 3 -->
                <div class="room-card bg-white rounded-lg overflow-hidden shadow-md transition duration-500" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-4.0.3" alt="Suite Principale" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="title-font text-xl font-bold">Suite Principale</h3>
                            <span class="text-gold-500 font-bold">240000f/nuit</span>
                        </div>
                        <p class="text-gray-600 mb-4">Notre suite la plus prestigieuse avec espace salon, chambre spacieuse et salle de bain en marbre.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 px-2 py-1 text-xs rounded">80m²</span>
                            <span class="bg-gray-100 px-2 py-1 text-xs rounded">1-4 personnes</span>
                            <span class="bg-gray-100 px-2 py-1 text-xs rounded">Terrasse privée</span>
                        </div>
                        <a href="#contact" class="block w-full text-center bg-black text-white py-2 rounded hover:bg-gray-800 transition">Réserver</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#contact" class="inline-block gold-gradient text-black font-bold py-3 px-8 rounded-full hover:shadow-lg transition">Voir toutes nos chambres</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Nos <span class="gold-gradient bg-clip-text text-transparent">Services</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Nous mettons tout en œuvre pour rendre votre séjour exceptionnel.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="gold-gradient p-3 rounded-full inline-block mb-4">
                        <i class="fas fa-utensils text-white text-2xl"></i>
                    </div>
                    <h3 class="title-font text-xl font-bold mb-2">Restaurant Gastronomique</h3>
                    <p class="text-gray-600">Notre chef étoilé vous propose une cuisine raffinée avec des produits locaux de saison.</p>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="gold-gradient p-3 rounded-full inline-block mb-4">
                        <i class="fas fa-spa text-white text-2xl"></i>
                    </div>
                    <h3 class="title-font text-xl font-bold mb-2">Spa & Bien-être</h3>
                    <p class="text-gray-600">Détendez-vous avec nos soins exclusifs et notre espace bien-être de 500m².</p>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="gold-gradient p-3 rounded-full inline-block mb-4">
                        <i class="fas fa-swimming-pool text-white text-2xl"></i>
                    </div>
                    <h3 class="title-font text-xl font-bold mb-2">Piscine Extérieure</h3>
                    <p class="text-gray-600">Notre piscine chauffée avec vue panoramique est ouverte toute l'année.</p>
                </div>
                
                <!-- Service 4 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="gold-gradient p-3 rounded-full inline-block mb-4">
                        <i class="fas fa-concierge-bell text-white text-2xl"></i>
                    </div>
                    <h3 class="title-font text-xl font-bold mb-2">Service Conciergerie</h3>
                    <p class="text-gray-600">Notre équipe est à votre disposition pour organiser votre séjour sur mesure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Offres Spéciales Section -->
    <section id="offres" class="py-20 bg-gray-50" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Offres <span class="gold-gradient bg-clip-text text-transparent">Spéciales</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Découvrez nos offres exclusives pour un séjour inoubliable.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Offre 1 -->
                <div class="offre-card bg-white rounded-lg overflow-hidden shadow-lg transition duration-500 hover:-translate-y-2" data-aos="flip-left" data-aos-delay="100">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3" alt="Weekend Romantique" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-full">-20%</div>
                    </div>
                    <div class="p-6">
                        <h3 class="title-font text-xl font-bold mb-2">Weekend Romantique</h3>
                        <p class="text-gray-600 mb-4">2 nuits en suite deluxe, dîner gastronomique et accès spa inclus.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gold-500 font-bold text-xl">299400f</span>
                            <a href="#contact" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800 transition">Réserver</a>
                        </div>
                    </div>
                </div>

                <!-- Offre 2 -->
                <div class="offre-card bg-white rounded-lg overflow-hidden shadow-lg transition duration-500 hover:-translate-y-2" data-aos="flip-left" data-aos-delay="200">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1534353436294-0dbd4bdac845?ixlib=rb-4.0.3" alt="Séjour Bien-être" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-full">-15%</div>
                    </div>
                    <div class="p-6">
                        <h3 class="title-font text-xl font-bold mb-2">Séjour Bien-être</h3>
                        <p class="text-gray-600 mb-4">3 nuits avec petit-déjeuner et 2 soins spa par personne.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gold-500 font-bold text-xl">479400f</span>
                            <a href="#contact" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800 transition">Réserver</a>
                        </div>
                    </div>
                </div>

                <!-- Offre 3 -->
                <div class="offre-card bg-white rounded-lg overflow-hidden shadow-lg transition duration-500 hover:-translate-y-2" data-aos="flip-left" data-aos-delay="300">
                    <div class="relative">
                        <img src="assets/images/Escapade Relaxe.jpg" alt="Escapade Relaxe" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-full">-25%</div>
                    </div>
                    <div class="p-6">
                        <h3 class="title-font text-xl font-bold mb-2">Espace Relaxe</h3>
                        <p class="text-gray-600 mb-4">1 nuit avec menu dégustation et accord mets-vins.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gold-500 font-bold text-xl">179400f</span>
                            <a href="#contact" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800 transition">Réserver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Événements Section -->
    <section id="evenements" class="py-20 bg-white" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Événements & <span class="gold-gradient bg-clip-text text-transparent">Célébrations</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Des moments inoubliables dans un cadre d'exception.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-8">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="title-font text-xl font-bold mb-4">Mariages de Luxe</h3>
                        <p class="text-gray-600 mb-4">Organisation complète de votre mariage avec notre équipe dédiée.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-2"></i>Salle de réception jusqu'à 200 personnes</li>
                            <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-2"></i>Traiteur gastronomique</li>
                            <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-2"></i>Décoration personnalisée</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="title-font text-xl font-bold mb-4">Séminaires d'Entreprise</h3>
                        <p class="text-gray-600 mb-4">Des espaces modernes pour vos événements professionnels.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-2"></i>5 salles de conférence équipées</li>
                            <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-2"></i>Restauration sur mesure</li>
                            <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-2"></i>Team building personnalisé</li>
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?ixlib=rb-4.0.3" alt="Mariage" class="w-full h-48 object-cover rounded-lg">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3" alt="Séminaire" class="w-full h-48 object-cover rounded-lg">
                    <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3" alt="Événement" class="w-full h-48 object-cover rounded-lg">
                    <img src="https://images.unsplash.com/photo-1562967916-eb82221dfb92?ixlib=rb-4.0.3" alt="Célébration" class="w-full h-48 object-cover rounded-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Expériences Culinaires Section -->
    <section class="py-20 bg-gray-50" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Expériences <span class="gold-gradient bg-clip-text text-transparent">Culinaires</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Découvrez nos restaurants et bars d'exception.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Restaurant Gastronomique -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="assets/images/Restauran.jpg" alt="Restaurant" class="w-full h-72 object-cover">
                    <div class="p-6">
                        <h3 class="title-font text-2xl font-bold mb-4">"L'Essence" - Restaurant Gastronomique</h3>
                        <p class="text-gray-600 mb-4">Une cuisine raffinée étoilée Michelin, mettant en valeur les produits locaux et de saison.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">Menu Dégustation</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">Carte des Vins</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">Vue Panoramique</span>
                        </div>
                        <a href="#contact" class="inline-block bg-black text-white px-6 py-2 rounded hover:bg-gray-800 transition">Réserver une table</a>
                    </div>
                </div>

                <!-- Bar Lounge -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="assets/images/Bar.jpg" alt="Bar" class="w-full h-72 object-cover">
                    <div class="p-6">
                        <h3 class="title-font text-2xl font-bold mb-4">"Le Crystal" - Bar Lounge</h3>
                        <p class="text-gray-600 mb-4">Un espace élégant pour déguster nos cocktails signatures et une sélection de spiritueux rares.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">Cocktails Signature</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">Tapas</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">Musique Live</span>
                        </div>
                        <a href="#contact" class="inline-block bg-black text-white px-6 py-2 rounded hover:bg-gray-800 transition">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-20 bg-white" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Blog & <span class="gold-gradient bg-clip-text text-transparent">Actualités</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Restez informé des dernières nouvelles et événements de l'hôtel.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <article class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <img src="assets/images/cuisine.jpg" alt="Article" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">12 Juin 2023</div>
                        <h3 class="title-font text-xl font-bold mb-2">Notre Chef Étoilé Dévoile ses Secrets</h3>
                        <p class="text-gray-600 mb-4">Découvrez les coulisses de notre cuisine gastronomique...</p>
                        <a href="#" class="text-gold-500 hover:text-gold-600 font-medium">Lire la suite →</a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <img src="assets/images/jeux.jpg" alt="Article" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">5 Juin 2023</div>
                        <h3 class="title-font text-xl font-bold mb-2">Espace De Jeu Pour Enfant</h3>
                        <p class="text-gray-600 mb-4">Guide des lieux incontournables à visiter...</p>
                        <a href="#" class="text-gold-500 hover:text-gold-600 font-medium">Lire la suite →</a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <img src="assets/images/bien etre.jpg" alt="Article" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">1 Juin 2023</div>
                        <h3 class="title-font text-xl font-bold mb-2">Espace conviviale </h3>
                        <p class="text-gray-600 mb-4">Découvrez notre nouvelle carte de soins...</p>
                        <a href="#" class="text-gold-500 hover:text-gold-600 font-medium">Lire la suite →</a>
                    </div>
                </article>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-block gold-gradient text-black font-bold py-3 px-8 rounded-full hover:shadow-lg transition">Voir tous les articles</a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="galerie" class="py-20 bg-white" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Galerie <span class="gold-gradient bg-clip-text text-transparent">Photos</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Découvrez l'atmosphère unique de La Principauté à travers notre galerie.</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="gallery-item overflow-hidden rounded-lg shadow-md" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/images/classique.jpg" alt="Hôtel" class="w-full h-48 object-cover hover:opacity-90 transition">
                </div>
                <div class="gallery-item overflow-hidden rounded-lg shadow-md" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/images/Restauran.jpg" alt="Chambre" class="w-full h-48 object-cover hover:opacity-90 transition">
                </div>
                <div class="gallery-item overflow-hidden rounded-lg shadow-md" data-aos="zoom-in" data-aos-delay="300">
                    <img src="assets/images/Suite Deluxe.jpg" alt="Restaurant" class="w-full h-48 object-cover hover:opacity-90 transition">
                </div>
                <div class="gallery-item overflow-hidden rounded-lg shadow-md" data-aos="zoom-in" data-aos-delay="400">
                    <img src="assets/images/securite.jpg" alt="Spa" class="w-full h-48 object-cover hover:opacity-90 transition">
                </div>
                <div class="gallery-item overflow-hidden rounded-lg shadow-md" data-aos="zoom-in" data-aos-delay="500">
                    <img src="assets/images/bien etre.jpg" alt="Hall" class="w-full h-48 object-cover hover:opacity-90 transition">
                </div>
                <div class="gallery-item overflow-hidden rounded-lg shadow-md" data-aos="zoom-in" data-aos-delay="600">
                    <img src="assets/images/jeux.jpg" alt="Piscine" class="w-full h-48 object-cover hover:opacity-90 transition">
                </div>
                <div class="gallery-item overflow-hidden rounded-lg shadow-md" data-aos="zoom-in" data-aos-delay="700">
                    <img src="assets/images/jeux2.jpg" alt="Bar" class="w-full h-48 object-cover hover:opacity-90 transition">
                </div>
                <div class="gallery-item overflow-hidden rounded-lg shadow-md" data-aos="zoom-in" data-aos-delay="800">
                    <img src="assets/images/home.jpg" alt="Vue" class="w-full h-48 object-cover hover:opacity-90 transition">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-black text-white" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Avis <span class="gold-gradient bg-clip-text text-transparent">Clients</span></h2>
                <p class="max-w-2xl mx-auto text-gray-300">Ce que nos clients disent de leur expérience à La Principauté.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card bg-gray-900 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="gold-gradient p-1 rounded-full mr-4">
                            <img src="assets/images/boris5.jpg" alt="Client" class="w-12 h-12 rounded-full">
                        </div>
                        <div>
                            <h4 class="font-bold">Sophie Martin</h4>
                            <div class="flex text-gold-500">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-300">"Un séjour exceptionnel ! Le service est impeccable, les chambres spacieuses et le spa est tout simplement divin. Nous reviendrons certainement."</p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card bg-gray-900 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="gold-gradient p-1 rounded-full mr-4">
                            <img src="assets/images/boris3.jpg" alt="Client" class="w-12 h-12 rounded-full">
                        </div>
                        <div>
                            <h4 class="font-bold">Jean Dubois</h4>
                            <div class="flex text-gold-500">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-300">"L'emplacement est parfait, le personnel attentionné et la qualité des prestations est au rendez-vous. La suite principale est un vrai petit paradis."</p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card bg-gray-900 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="gold-gradient p-1 rounded-full mr-4">
                            <img src="assets/images/boris4.jpg" alt="Client" class="w-12 h-12 rounded-full">
                        </div>
                        <div>
                            <h4 class="font-bold">Élodie Lambert</h4>
                            <div class="flex text-gold-500">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-300">"Nous avons passé un week-end romantique inoubliable. Le restaurant gastronomique est à ne pas manquer et le service en chambre est très réactif."</p>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Map Section -->
    <section class="bg-gray-100 py-10" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <h2 class="title-font text-3xl text-center font-bold mb-8">Notre <span class="gold-gradient bg-clip-text text-transparent">Localisation</span></h2>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.96496435763!2d9.9444444!3d5.2333333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061e2e2e2e2e2e3%3A0x7d0b0b0b0b0b0b0b!2sBakassa%2C%20Cameroun!5e0!3m2!1sfr!2sfr!4v1710000000001!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="rounded-lg"></iframe>
            </div>
        </div>
    </section>

    <!-- Section Équipe & Conciergerie -->
    <section id="equipe" class="py-20 bg-gray-50" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Notre <span class="gold-gradient bg-clip-text text-transparent">Équipe</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Découvrez les visages qui font l'excellence de notre service.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-8 text-center" data-aos="zoom-in">
                    <img src="assets/images/boris1.jpg" alt="Directeur" class="w-24 h-24 mx-auto rounded-full mb-4 border-4 border-blue-500">
                    <h4 class="font-bold text-xl mb-2">Tendjou boris</h4>
                    <p class="text-gold-500 font-semibold mb-2">Directeur Général</p>
                    <p class="text-gray-600">30 ans d'expérience dans l'hôtellerie de luxe, passionné par l'accueil sur-mesure.</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8 text-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/images/boris2.jpg" alt="Chef" class="w-24 h-24 mx-auto rounded-full mb-4 border-4 border-blue-500">
                    <h4 class="font-bold text-xl mb-2">boris tendjou</h4>
                    <p class="text-gold-500 font-semibold mb-2">Cheffe Gastronomique</p>
                    <p class="text-gray-600">Créatrice de saveurs, elle sublime les produits locaux pour une expérience unique.</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8 text-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/images/boris3.jpg" alt="Concierge" class="w-24 h-24 mx-auto rounded-full mb-4 border-4 border-blue-500">
                    <h4 class="font-bold text-xl mb-2">boris parker</h4>
                    <p class="text-gold-500 font-semibold mb-2">Chef Concierge</p>
                    <p class="text-gray-600">À votre écoute 24/7 pour organiser un séjour inoubliable et personnalisé.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Récompenses & Distinctions -->
    <section id="recompenses" class="py-20 bg-white" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Récompenses & <span class="gold-gradient bg-clip-text text-transparent">Distinctions</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Notre engagement pour l'excellence reconnu par les professionnels et nos clients.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="bg-gray-50 rounded-lg shadow-md p-6 flex flex-col items-center" data-aos="zoom-in">
                    <i class="fas fa-trophy text-4xl text-gold-500 mb-2"></i>
                    <span class="font-bold">Luxury Hotel Awards 2023</span>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-md p-6 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fas fa-certificate text-4xl text-blue-500 mb-2"></i>
                    <span class="font-bold">Certifié Green Key</span>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-md p-6 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fab fa-tripadvisor text-4xl text-green-600 mb-2"></i>
                    <span class="font-bold">Traveller's Choice 2023</span>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-md p-6 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="300">
                    <i class="fas fa-star text-4xl text-gold-500 mb-2"></i>
                    <span class="font-bold">Note 4.9/5 sur 500+ avis</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section FAQ -->
    <section id="faq" class="py-20 bg-gray-50" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Foire Aux <span class="gold-gradient bg-clip-text text-transparent">Questions</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Retrouvez ici les réponses à vos questions les plus fréquentes.</p>
            </div>
            <div class="max-w-4xl mx-auto">
                <div class="space-y-4">
                    <!-- Question 1 -->
                    <div class="faq-item bg-white rounded-xl shadow-lg overflow-hidden" data-aos="fade-up">
                        <button class="faq-question w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-all duration-300">
                            <div class="flex items-center">
                                <i class="fas fa-clock text-amber-500 mr-3 text-lg"></i>
                                <h4 class="font-bold text-lg">Quels sont les horaires d'arrivée et de départ ?</h4>
                            </div>
                            <i class="fas fa-chevron-down text-amber-500 transition-transform duration-300"></i>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="px-6 pb-4 text-gray-600">
                                <p class="mb-2">• <strong>Arrivée :</strong> À partir de 15h00</p>
                                <p class="mb-2">• <strong>Départ :</strong> Jusqu'à 12h00</p>
                                <p class="mb-2">• <strong>Arrivée anticipée :</strong> Possible sur demande selon disponibilité</p>
                                <p class="mb-2">• <strong>Départ tardif :</strong> Supplément possible selon disponibilité</p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="faq-item bg-white rounded-xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                        <button class="faq-question w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-all duration-300">
                            <div class="flex items-center">
                                <i class="fas fa-paw text-amber-500 mr-3 text-lg"></i>
                                <h4 class="font-bold text-lg">Les animaux sont-ils acceptés ?</h4>
                            </div>
                            <i class="fas fa-chevron-down text-amber-500 transition-transform duration-300"></i>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="px-6 pb-4 text-gray-600">
                                <p class="mb-2">✅ <strong>Oui, les animaux de compagnie sont les bienvenus !</strong></p>
                                <p class="mb-2">• Supplément de 9000f par nuit par animal</p>
                                <p class="mb-2">• Maximum 2 animaux par chambre</p>
                                <p class="mb-2">• Animaux de moins de 25kg acceptés</p>
                                <p class="mb-2">• Zones dédiées pour les promenades disponibles</p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="faq-item bg-white rounded-xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                        <button class="faq-question w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-all duration-300">
                            <div class="flex items-center">
                                <i class="fas fa-parking text-amber-500 mr-3 text-lg"></i>
                                <h4 class="font-bold text-lg">Y a-t-il un parking ?</h4>
                            </div>
                            <i class="fas fa-chevron-down text-amber-500 transition-transform duration-300"></i>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="px-6 pb-4 text-gray-600">
                                <p class="mb-2">🚗 <strong>Parking privé et sécurisé disponible</strong></p>
                                <p class="mb-2">• <strong>Gratuit</strong> pour tous nos clients</p>
                                <p class="mb-2">• <strong>Surveillance 24h/24</strong> et 7j/7</p>
                                <p class="mb-2">• <strong>Réservation recommandée</strong> en haute saison</p>
                                <p class="mb-2">• <strong>Accès direct</strong> à l'hôtel</p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="faq-item bg-white rounded-xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                        <button class="faq-question w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-all duration-300">
                            <div class="flex items-center">
                                <i class="fas fa-undo text-amber-500 mr-3 text-lg"></i>
                                <h4 class="font-bold text-lg">Quelles sont les conditions d'annulation ?</h4>
                            </div>
                            <i class="fas fa-chevron-down text-amber-500 transition-transform duration-300"></i>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="px-6 pb-4 text-gray-600">
                                <p class="mb-2">📋 <strong>Politique d'annulation flexible</strong></p>
                                <p class="mb-2">• <strong>Annulation gratuite</strong> jusqu'à 48h avant l'arrivée</p>
                                <p class="mb-2">• <strong>Annulation tardive</strong> : 50% du montant entre 48h et 24h</p>
                                <p class="mb-2">• <strong>Pas de remboursement</strong> moins de 24h avant</p>
                                <p class="mb-2">• <strong>Assurance annulation</strong> disponible en option</p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="faq-item bg-white rounded-xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                        <button class="faq-question w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-all duration-300">
                            <div class="flex items-center">
                                <i class="fas fa-wifi text-amber-500 mr-3 text-lg"></i>
                                <h4 class="font-bold text-lg">Le WiFi est-il disponible ?</h4>
                            </div>
                            <i class="fas fa-chevron-down text-amber-500 transition-transform duration-300"></i>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="px-6 pb-4 text-gray-600">
                                <p class="mb-2">📶 <strong>WiFi haut débit gratuit dans tout l'hôtel</strong></p>
                                <p class="mb-2">• <strong>Connexion ultra-rapide</strong> dans toutes les chambres</p>
                                <p class="mb-2">• <strong>Couverture complète</strong> : chambres, lobby, restaurant, spa</p>
                                <p class="mb-2">• <strong>Support technique</strong> disponible 24h/24</p>
                                <p class="mb-2">• <strong>Sécurisé</strong> avec mot de passe unique</p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 6 -->
                    <div class="faq-item bg-white rounded-xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                        <button class="faq-question w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-all duration-300">
                            <div class="flex items-center">
                                <i class="fas fa-utensils text-amber-500 mr-3 text-lg"></i>
                                <h4 class="font-bold text-lg">Le petit-déjeuner est-il inclus ?</h4>
                            </div>
                            <i class="fas fa-chevron-down text-amber-500 transition-transform duration-300"></i>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="px-6 pb-4 text-gray-600">
                                <p class="mb-2">🍳 <strong>Petit-déjeuner buffet inclus dans toutes nos offres</strong></p>
                                <p class="mb-2">• <strong>Service de 6h30 à 10h30</strong> en semaine</p>
                                <p class="mb-2">• <strong>Service de 7h00 à 11h00</strong> le weekend</p>
                                <p class="mb-2">• <strong>Produits frais</strong> et locaux</p>
                                <p class="mb-2">• <strong>Options végétariennes</strong> disponibles</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact supplémentaire -->
                <div class="mt-12 text-center bg-white rounded-xl shadow-lg p-8" data-aos="zoom-in">
                    <i class="fas fa-headset text-4xl text-amber-500 mb-4"></i>
                    <h3 class="text-2xl font-bold mb-4">Vous ne trouvez pas votre réponse ?</h3>
                    <p class="text-gray-600 mb-6">Notre équipe est là pour vous aider 24h/24 et 7j/7</p>
                    <div class="flex flex-col md:flex-row gap-4 justify-center">
                        <a href="tel:+237678760117" class="inline-flex items-center px-6 py-3 bg-amber-500 text-white rounded-lg hover:bg-amber-600 transition duration-300">
                            <i class="fas fa-phone mr-2"></i>
                            Appelez-nous
                        </a>
                        <a href="#contact" class="inline-flex items-center px-6 py-3 bg-gray-800 text-white rounded-lg hover:bg-gray-900 transition duration-300">
                            <i class="fas fa-envelope mr-2"></i>
                            Envoyez un message
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .faq-item {
        transition: all 0.3s ease;
    }
    
    .faq-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .faq-question.active {
        background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
    }
    
    .faq-question.active i.fa-chevron-down {
        transform: rotate(180deg);
    }
    
    .faq-answer.active {
        max-height: 300px;
    }
    </style>

    <script>
    // Gestion des FAQ
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const isActive = this.classList.contains('active');
                
                // Fermer toutes les autres questions
                faqQuestions.forEach(q => {
                    q.classList.remove('active');
                    q.nextElementSibling.classList.remove('active');
                });
                
                // Ouvrir/fermer la question cliquée
                if (!isActive) {
                    this.classList.add('active');
                    answer.classList.add('active');
                }
            });
        });
    });
    </script>

    <!-- Section Accès & Transports -->
    <section id="acces" class="py-20 bg-white" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Accès & <span class="gold-gradient bg-clip-text text-transparent">Transports</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Comment venir à l'hôtel et se déplacer facilement.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg shadow-md p-6 flex flex-col items-center" data-aos="zoom-in">
                    <i class="fas fa-car text-3xl text-blue-500 mb-2"></i>
                    <span class="font-bold mb-1">Parking privé</span>
                    <span class="text-gray-600 text-sm">Sur réservation, accès sécurisé 24/7</span>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-md p-6 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fas fa-bus text-3xl text-blue-500 mb-2"></i>
                    <span class="font-bold mb-1">Navette aéroport</span>
                    <span class="text-gray-600 text-sm">Sur demande, service payant</span>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-md p-6 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fas fa-train text-3xl text-blue-500 mb-2"></i>
                    <span class="font-bold mb-1">Gare à proximité</span>
                    <span class="text-gray-600 text-sm">10 min à pied, taxis disponibles</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Expériences & Activités -->
    <section id="experiences" class="py-20 bg-gray-50" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Expériences & <span class="gold-gradient bg-clip-text text-transparent">Activités</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Vivez des moments uniques à l'hôtel et aux alentours.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-8 text-center" data-aos="zoom-in">
                    <i class="fas fa-spa text-4xl text-gold-500 mb-4"></i>
                    <h4 class="font-bold mb-2">Spa & Bien-être</h4>
                    <p class="text-gray-600">Massages, soins, espace détente et piscine intérieure.</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8 text-center" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fas fa-golf-ball text-4xl text-blue-500 mb-4"></i>
                    <h4 class="font-bold mb-2">Golf & Loisirs</h4>
                    <p class="text-gray-600">Accès privilégié à un golf 18 trous et activités sportives.</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8 text-center" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fas fa-map-marked-alt text-4xl text-blue-500 mb-4"></i>
                    <h4 class="font-bold mb-2">Excursions & Culture</h4>
                    <p class="text-gray-600">Visites guidées, musées, découvertes gastronomiques.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Offres Entreprises & Groupes -->
    <section id="groupes" class="py-20 bg-white" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Entreprises & <span class="gold-gradient bg-clip-text text-transparent">Groupes</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Organisez vos séminaires, mariages ou événements privés dans un cadre d'exception.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-lg shadow-md p-8" data-aos="fade-right">
                    <h4 class="font-bold text-xl mb-2"><i class="fas fa-briefcase text-blue-500 mr-2"></i>Séminaires & Réunions</h4>
                    <p class="text-gray-600 mb-4">5 salles équipées, restauration sur mesure, team building.</p>
                    <a href="#contact" class="gold-gradient text-black font-bold py-2 px-6 rounded-full btn-animate">Demander un devis</a>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-md p-8" data-aos="fade-left" data-aos-delay="100">
                    <h4 class="font-bold text-xl mb-2"><i class="fas fa-glass-cheers text-gold-500 mr-2"></i>Mariages & Célébrations</h4>
                    <p class="text-gray-600 mb-4">Organisation clé en main, décoration personnalisée, hébergement groupe.</p>
                    <a href="#contact" class="gold-gradient text-black font-bold py-2 px-6 rounded-full btn-animate">Obtenir une offre</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Partenaires & Marques -->
    <section id="partenaires" class="py-20 bg-gray-50" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="title-font text-3xl md:text-4xl font-bold mb-4">Nos <span class="gold-gradient bg-clip-text text-transparent">Partenaires</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Nous collaborons avec des marques et acteurs de prestige.</p>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-8">
                <img src="assets/images/logo.jpg" alt="Evian" class="h-12" data-aos="zoom-in">
                <img src="assets/images/logo1.jpg" alt="L'Occitane" class="h-12" data-aos="zoom-in" data-aos-delay="100">
                <img src="assets/images/logo2.jpg" alt="Veuve Clicquot" class="h-12" data-aos="zoom-in" data-aos-delay="200">
                <img src="assets/images/logo3.jpg" alt="Relais & Châteaux" class="h-12" data-aos="zoom-in" data-aos-delay="300">
            </div>
        </div>
    </section>

    <!-- Section Chiffres Clés -->
    <section id="chiffres" class="py-20 bg-[#101828] text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12" style="text-shadow: 0 0 16px #FFD700, 0 2px 8px #fff8; color: #FFD700; letter-spacing: 1px;">Nos Chiffres Clés</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="chiffre-card bg-[#232736] rounded-xl shadow-lg p-8 text-center transition-transform duration-300" data-aos="zoom-in">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-trophy text-4xl text-yellow-400"></i>
                    </div>
                    <div class="text-4xl md:text-5xl font-extrabold mb-2 chiffre-gradient compteur" data-max="850">0</div>
                    <div class="text-lg text-gray-300">Projets réalisés</div>
                </div>
                <div class="chiffre-card bg-[#232736] rounded-xl shadow-lg p-8 text-center transition-transform duration-300" data-aos="zoom-in" data-aos-delay="100">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-hourglass-half text-4xl text-yellow-400"></i>
                    </div>
                    <div class="text-4xl md:text-5xl font-extrabold mb-2 chiffre-gradient compteur" data-max="15">0</div>
                    <div class="text-lg text-gray-300">Années d'expérience</div>
                </div>
                <div class="chiffre-card bg-[#232736] rounded-xl shadow-lg p-8 text-center transition-transform duration-300" data-aos="zoom-in" data-aos-delay="200">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-smile-beam text-4xl text-yellow-400"></i>
                    </div>
                    <div class="text-4xl md:text-5xl font-extrabold mb-2 chiffre-gradient compteur" data-max="100">0</div>
                    <div class="text-lg text-gray-300">Clients satisfaits</div>
                </div>
                <div class="chiffre-card bg-[#232736] rounded-xl shadow-lg p-8 text-center transition-transform duration-300" data-aos="zoom-in" data-aos-delay="300">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-headset text-4xl text-yellow-400"></i>
                    </div>
                    <div class="text-4xl md:text-5xl font-extrabold mb-2 chiffre-gradient compteur" data-max="24">0</div>
                    <div class="text-lg text-gray-300">Support client <span class="text-yellow-400 font-bold">/7</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact & Reservation -->
    <section id="contact" class="py-20 bg-white" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <h2 class="title-font text-3xl md:text-4xl font-bold mb-6">Contact & <span class="gold-gradient bg-clip-text text-transparent">Réservation</span></h2>
                    <p class="text-gray-600 mb-8">Pour toute demande d'information ou réservation, n'hésitez pas à nous contacter par téléphone, email ou via le formulaire.</p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-gold-500 p-2 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Adresse</h4>
                                <p class="text-gray-600">PRINCIPAUTE BAKASSA</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-gold-500 p-2 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Téléphone</h4>
                                <p class="text-gray-600">+237 678 76 01 17</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-gold-500 p-2 rounded-full mr-4">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Email</h4>
                                <p class="text-gray-600">contact@laprincipaute.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h4 class="font-bold mb-4">Suivez-nous</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-black text-white p-2 rounded-full hover:bg-gray-800 transition social-anim">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-black text-white p-2 rounded-full hover:bg-gray-800 transition social-anim">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-black text-white p-2 rounded-full hover:bg-gray-800 transition social-anim">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <form id="contact-form" class="bg-gray-50 p-8 rounded-lg shadow-md">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 mb-2">Nom complet</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gold-500">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gold-500">
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 mb-2">Téléphone</label>
                            <input type="tel" id="phone" name="phone" pattern="[0-9]{9}" minlength="9" maxlength="9" inputmode="numeric" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gold-500">
                            <p id="phone-error" class="text-red-500 text-sm mt-1 hidden">Veuillez entrer exactement 9 chiffres.</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="checkin" class="block text-gray-700 mb-2">Arrivée</label>
                                <input type="date" id="checkin" name="checkin" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gold-500">
                            </div>
                            <div>
                                <label for="checkout" class="block text-gray-700 mb-2">Départ</label>
                                <input type="date" id="checkout" name="checkout" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gold-500">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="room" class="block text-gray-700 mb-2">Type de chambre</label>
                            <select id="room" name="room" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gold-500">
                                <option>Sélectionnez une option</option>
                                <option>Chambre Classique</option>
                                <option>Suite Deluxe</option>
                                <option>Suite Principale</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gold-500"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full gold-gradient text-black font-bold py-3 px-4 rounded-lg hover:shadow-lg transition ripple btn-animate">Envoyer la demande</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-12 animated-gradient">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="title-font text-xl font-bold mb-4">LA PRINCIPAUTÉ</h3>
                    <p class="text-gray-400">Un hôtel où le luxe et le confort se rencontrent pour créer des souvenirs inoubliables.</p>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Liens rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="#accueil" class="text-gray-400 hover:text-white transition">Accueil</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition">À propos</a></li>
                        <li><a href="#chambres" class="text-gray-400 hover:text-white transition">Chambres</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition">Services</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>LA PRINCIPAUTE</li>
                        <li>BAKASSA</li>
                        <li>+237 678 76 01 17</li>
                        <li>contact@laprincipaute.com</li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Abonnez-vous pour recevoir nos offres spéciales.</p>
                    <div class="flex">
                        <input type="email" placeholder="Votre email" class="px-4 py-2 rounded-l-lg focus:outline-none text-black">
                        <button class="gold-gradient text-black px-4 py-2 rounded-r-lg font-bold">OK</button>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0">© 2023 La Principauté. Tous droits réservés.</p>
                <div class="flex space-x-6 items-center">
                    <a href="#" class="text-gray-400 hover:text-white transition social-anim">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition social-anim">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition social-anim">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
    // Animation compteur pour la section chiffres clés
    function animateCounter(element, max, duration = 1800, suffix = "") {
        let start = 0;
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const value = Math.floor(progress * (max - start) + start);
            element.textContent = value + suffix;
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                element.textContent = max + suffix;
            }
        };
        window.requestAnimationFrame(step);
    }
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.compteur');
        let animated = false;
        function triggerCounters() {
            const section = document.getElementById('chiffres');
            if (!section) return;
            const rect = section.getBoundingClientRect();
            if (rect.top < window.innerHeight - 80 && !animated) {
                animated = true;
                counters.forEach(counter => {
                    let max = parseInt(counter.getAttribute('data-max'));
                    let suffix = '';
                    if (max === 100) suffix = '%';
                    if (max === 24) suffix = '/7';
                    animateCounter(counter, max, max > 100 ? 2000 : 1200, suffix);
                });
            }
        }
        window.addEventListener('scroll', triggerCounters);
        window.addEventListener('resize', triggerCounters);
        triggerCounters();
    });
    </script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Fonction d'initialisation
        function initialize() {
            // Initialisation de AOS
            AOS.init({
                duration: 1000,
                once: true,
                offset: 120
            });

            // Détection de la langue
            const lang = navigator.language || navigator.userLanguage;
            if (lang.toLowerCase().includes('fr')) {
                document.documentElement.lang = 'fr';
            }

            // Optimisation des images
            optimizeImages();
            
            // Gestion des formulaires
            setupFormValidation();
            
            // Gestion du scroll
            setupScrollBehavior();
            
            // Protection contre les clics rapides
            preventFastClicks();

            // --- Animation d'apparition sur toutes les images principales des sections ---
            const animatedImages = document.querySelectorAll(
                '#about img, #chambres img, #offres img, #evenements img, #galerie img, #services img, #blog img, #equipe img, #recompenses img, #partenaires img, .room-card img, .gallery-item img, .testimonial-card img, .bg-white img, .bg-gray-50 img, .bg-gray-100 img'
            );
            animatedImages.forEach(img => {
                img.style.opacity = 0;
                img.style.transform = 'scale(0.93)';
                img.style.transition = 'opacity 1.1s cubic-bezier(.4,2,.3,1), transform 1.1s cubic-bezier(.4,2,.3,1)';
            });
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries, obs) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = 1;
                            entry.target.style.transform = 'scale(1)';
                            obs.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.15 });
                animatedImages.forEach(img => observer.observe(img));
            } else {
                // Fallback si IntersectionObserver non supporté
                animatedImages.forEach(img => {
                    img.style.opacity = 1;
                    img.style.transform = 'scale(1)';
                });
            }
        }

        // Optimisation des images
        function optimizeImages() {
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                if (!img.hasAttribute('loading')) {
                    img.setAttribute('loading', 'lazy');
                }
                if (!img.hasAttribute('alt')) {
                    img.setAttribute('alt', 'Image de l\'hôtel');
                }
            });
        }

        // Validation des formulaires
        function setupFormValidation() {
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    const inputs = this.querySelectorAll('input[required], textarea[required]');
                    let isValid = true;
                    
                    inputs.forEach(input => {
                        if (!input.value.trim()) {
                            isValid = false;
                            input.classList.add('border-red-500');
                        } else {
                            input.classList.remove('border-red-500');
                        }
                    });
                    
                    if (!isValid) {
                        e.preventDefault();
                        alert('Veuillez remplir tous les champs obligatoires');
                    }
                });
            });
        }

        // Gestion du scroll
        function setupScrollBehavior() {
            const sections = document.querySelectorAll('section');
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (currentScroll >= sectionTop - 100 && currentScroll < sectionTop + sectionHeight - 100) {
                        section.classList.add('active');
                    } else {
                        section.classList.remove('active');
                    }
                });
            });
        }

        // Protection contre les clics rapides
        function preventFastClicks() {
            const buttons = document.querySelectorAll('button, a');
            buttons.forEach(button => {
                let lastClick = 0;
                button.addEventListener('click', function(e) {
                    const now = Date.now();
                    if (now - lastClick < 1000) {
                        e.preventDefault();
                        return;
                    }
                    lastClick = now;
                });
            });
        }

        // Gestion des erreurs
        window.onerror = function(msg, url, line, col, error) {
            console.error('Erreur détectée:', msg);
            return false;
        };

        // Mobile menu toggle avec animation
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        const nav = document.querySelector('nav');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            setTimeout(() => {
                mobileMenu.classList.toggle('show');
            }, 10);
        });
        
        // Effet de scroll pour le header
        let lastScroll = 0;
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll <= 0) {
                nav.classList.remove('bg-opacity-95');
                nav.classList.add('bg-opacity-100');
            } else {
                nav.classList.add('bg-opacity-95');
                nav.classList.remove('bg-opacity-100');
            }
            
            lastScroll = currentScroll;
        });
        
        // Smooth scrolling pour les liens d'ancrage avec fermeture du menu mobile
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                    
                    // Fermer le menu mobile avec animation
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.remove('show');
                        setTimeout(() => {
                            mobileMenu.classList.add('hidden');
                        }, 300);
                    }
                }
            });
        });
        
        // Form submission to WhatsApp
        const contactForm = document.getElementById('contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const phoneInput = document.getElementById('phone');
                const phoneError = document.getElementById('phone-error');
                const phoneValue = phoneInput.value.replace(/\D/g, '');

                // Validation du téléphone
                if (phoneValue.length !== 9) {
                    phoneError.classList.remove('hidden');
                    phoneInput.classList.add('border-red-500');
                    phoneInput.focus();
                    return;
                } else {
                    phoneError.classList.add('hidden');
                    phoneInput.classList.remove('border-red-500');
                }

                // Récupération des données du formulaire
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const phone = phoneInput.value;
                const checkin = document.getElementById('checkin').value;
                const checkout = document.getElementById('checkout').value;
                const room = document.getElementById('room').value;
                const message = document.getElementById('message').value;

                // Construction du message WhatsApp
                let waMessage = `*Nouvelle demande de réservation via le site web*\n\n`;
                waMessage += `*Nom:* ${name}\n`;
                waMessage += `*Email:* ${email}\n`;
                waMessage += `*Téléphone:* ${phone}\n`;
                if (checkin) waMessage += `*Arrivée:* ${new Date(checkin).toLocaleDateString('fr-FR')}\n`;
                if (checkout) waMessage += `*Départ:* ${new Date(checkout).toLocaleDateString('fr-FR')}\n`;
                if (room && room !== 'Sélectionnez une option') waMessage += `*Chambre:* ${room}\n`;
                if (message) waMessage += `*Message:* ${message}`;

                const waNumber = '237678760117';
                const waURL = `https://wa.me/${waNumber}?text=${encodeURIComponent(waMessage)}`;

                // Redirection vers WhatsApp
                window.open(waURL, '_blank');
                
                // Réinitialiser le formulaire après envoi
                contactForm.reset();
            });

            // Empêcher la saisie de caractères non numériques pour le téléphone
            document.getElementById('phone').addEventListener('input', function(e) {
                this.value = this.value.replace(/[^0-9]/g, '');
                if (this.value.length > 9) {
                    this.value = this.value.slice(0, 9);
                }
            });
        }

        // Empêcher la sélection de dates passées pour arrivée et départ
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0');
            const dd = String(today.getDate()).padStart(2, '0');
            const minDate = `${yyyy}-${mm}-${dd}`;
            const checkin = document.getElementById('checkin');
            const checkout = document.getElementById('checkout');
            if (checkin) checkin.setAttribute('min', minDate);
            if (checkout) checkout.setAttribute('min', minDate);
        });

        // --- Bouton Remonter en haut ---
        const scrollTopBtn = document.getElementById('scrollTopBtn');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.add('opacity-100');
                scrollTopBtn.classList.remove('opacity-0', 'pointer-events-none');
            } else {
                scrollTopBtn.classList.remove('opacity-100');
                scrollTopBtn.classList.add('opacity-0', 'pointer-events-none');
            }
        });
        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Animation fade-up JS pour apparition progressive des sections
        function fadeUpOnScroll() {
            const sections = document.querySelectorAll('section');
            const windowHeight = window.innerHeight;
            sections.forEach(section => {
                if (!section.classList.contains('fade-up-init')) {
                    section.classList.add('fade-up-init');
                }
                const rect = section.getBoundingClientRect();
                if (rect.top < windowHeight - 80) {
                    section.classList.add('fade-up-active');
                } else {
                    section.classList.remove('fade-up-active');
                }
            });
        }
        window.addEventListener('scroll', fadeUpOnScroll);
        window.addEventListener('resize', fadeUpOnScroll);
        document.addEventListener('DOMContentLoaded', fadeUpOnScroll);

        // --- Animations personnalisées JS ---
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Effet pulse sur le bouton WhatsApp
            const whatsappBtn = document.querySelector('.whatsapp-float');
            if (whatsappBtn) {
                whatsappBtn.animate([
                    { transform: 'scale(1)' },
                    { transform: 'scale(1.12)' },
                    { transform: 'scale(1)' }
                ], {
                    duration: 1200,
                    iterations: Infinity,
                    easing: 'ease-in-out'
                });
            }

            // 2. Rebond sur tous les boutons au clic
            document.querySelectorAll('button, .btn-animate, .nav-button').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    btn.animate([
                        { transform: 'scale(1)' },
                        { transform: 'scale(1.08)' },
                        { transform: 'scale(0.96)' },
                        { transform: 'scale(1)' }
                    ], {
                        duration: 350,
                        easing: 'cubic-bezier(.4,2,.3,1)'
                    });
                });
            });

            // 3. Slide-in sur les titres de section
            document.querySelectorAll('section h2').forEach(title => {
                title.style.opacity = 0;
                title.style.transform = 'translateX(-60px)';
            });
            function slideInTitles() {
                document.querySelectorAll('section h2').forEach(title => {
                    const rect = title.getBoundingClientRect();
                    if (rect.top < window.innerHeight - 80) {
                        title.style.transition = 'opacity 1.1s cubic-bezier(.4,2,.3,1), transform 1.1s cubic-bezier(.4,2,.3,1)';
                        title.style.opacity = 1;
                        title.style.transform = 'none';
                    }
                });
            }
            window.addEventListener('scroll', slideInTitles);
            window.addEventListener('resize', slideInTitles);
            slideInTitles();

            // 4. Zoom/rotation sur les images de galerie au survol (JS pour effet plus fluide)
            document.querySelectorAll('.gallery-item img').forEach(img => {
                img.addEventListener('mouseenter', function() {
                    img.style.transition = 'transform 0.5s cubic-bezier(.4,2,.3,1)';
                    img.style.transform = 'scale(1.13) rotate(-3deg)';
                });
                img.addEventListener('mouseleave', function() {
                    img.style.transform = 'none';
                });
            });

            // 5. Vibration subtile sur les cartes témoignages au survol
            document.querySelectorAll('.testimonial-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    card.animate([
                        { transform: 'translateX(0)' },
                        { transform: 'translateX(-3px)' },
                        { transform: 'translateX(3px)' },
                        { transform: 'translateX(-2px)' },
                        { transform: 'translateX(2px)' },
                        { transform: 'translateX(0)' }
                    ], {
                        duration: 350,
                        easing: 'ease-in-out'
                    });
                });
            });
        });

        // --- Animation au survol (hover) simple (zoom uniquement) sur toutes les images principales des sections ---
        document.addEventListener('DOMContentLoaded', function() {
            const hoverImages = document.querySelectorAll(
                '#about img, #chambres img, #offres img, #evenements img, #galerie img, #services img, #blog img, #equipe img, #recompenses img, #partenaires img, .room-card img, .gallery-item img, .testimonial-card img, .bg-white img, .bg-gray-50 img, .bg-gray-100 img'
            );
            hoverImages.forEach(img => {
                img.addEventListener('mouseenter', function() {
                    img.style.transition = 'transform 0.4s cubic-bezier(.4,2,.3,1)';
                    img.style.transform = 'scale(1.08)';
                });
                img.addEventListener('mouseleave', function() {
                    img.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>
</html>