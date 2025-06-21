    # On choisit une image de base officielle qui contient déjà PHP et le serveur Apache
    FROM php:8.2-apache

    # On définit le dossier de travail à l'intérieur du serveur
    WORKDIR /var/www/html

    # On copie tous les fichiers de notre projet (index.php, assets, etc.)
    # depuis le dépôt GitHub vers le dossier du serveur
    COPY . .

    # On expose le port 80 pour que le monde extérieur puisse accéder au site
    EXPOSE 80