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
    <script src="https://cdn.tailwindcss.com?cache=true"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preload" as="style" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
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
                    <a href="index.php" class="logo-hover flex items-center gap-3">
                        <img src="assets/images/logo.png" alt="La Principauté" class="h-12 w-auto rounded-full">
                        <span class="text-xl font-bold gold-gradient bg-clip-text text-transparent title-font tracking-wide">LA PRINCIPAUTÉ</span>
                    </a>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center">
                    <a href="index.php" class="nav-link text-gray-200 hover:text-gold-500 transition" data-aos="fade-down">Accueil</a>
                    <a href="chambres-services.php" class="nav-link text-gray-200 hover:text-gold-500 transition" data-aos="fade-down" data-aos-delay="100">Chambres & Services</a>
                    <a href="offres-evenements.php" class="nav-link text-gray-200 hover:text-gold-500 transition" data-aos="fade-down" data-aos-delay="200">Offres & Événements</a>
                    <a href="galerie-blog.php" class="nav-link text-gray-200 hover:text-gold-500 transition" data-aos="fade-down" data-aos-delay="300">Galerie & Blog</a>
                </div>
                <div class="items-center">
                    <a href="contact.php" class="nav-button hidden md:flex bg-gold-500 text-black px-4 py-1 rounded-full hover:bg-gold-600 transition items-center ripple btn-animate" data-aos="zoom-in" data-aos-delay="800">
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
                <a href="index.php" class="block py-3 px-4 text-gray-200 hover:text-gold-500 transition hover:bg-gray-900 rounded">
                    <i class="fas fa-home mr-2"></i>Accueil
                </a>
                <a href="chambres-services.php" class="block py-3 px-4 text-gray-200 hover:text-gold-500 transition hover:bg-gray-900 rounded">
                    <i class="fas fa-bed mr-2"></i>Chambres & Services
                </a>
                <a href="offres-evenements.php" class="block py-3 px-4 text-gray-200 hover:text-gold-500 transition hover:bg-gray-900 rounded">
                    <i class="fas fa-tag mr-2"></i>Offres & Événements
                </a>
                <a href="galerie-blog.php" class="block py-3 px-4 text-gray-200 hover:text-gold-500 transition hover:bg-gray-900 rounded">
                    <i class="fas fa-images mr-2"></i>Galerie & Blog
                </a>
                <a href="contact.php" class="block mt-2 text-center bg-gold-500 text-black py-3 px-4 rounded-full hover:bg-gold-600 transition">
                    <i class="fas fa-calendar-alt mr-2"></i>Réserver
                </a>
            </div>
        </div>
    </nav>

</body>
</html> 