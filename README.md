# Hôtel La Principauté

Site vitrine pour un hôtel de luxe fictif, développé avec PHP, Tailwind CSS et une touche de JavaScript.

## ✨ Fonctionnalités

- **Design Élégant & Responsive** : Une interface soignée qui s'adapte à tous les écrans (mobile, tablette, ordinateur).
- **Navigation Intuitive** : Accès rapide aux sections clés : chambres, offres, galerie, contact.
- **Animations Discrètes** : Des transitions fluides (fade-in, slide-up) pour une expérience utilisateur agréable.
- **Structure Modulaire** : Utilisation d'includes PHP (`header.php`, `footer.php`) pour un code propre et maintenable.

## 🚀 Technologies utilisées

- **Backend** : PHP
- **Frontend** : HTML5, Tailwind CSS
- **JavaScript** : Pour les animations (AOS) et l'interactivité (menu mobile).

## 🛠️ Installation locale

1.  **Prérequis** : Avoir un serveur local comme WAMP, XAMPP ou MAMP installé.
2.  **Cloner le dépôt** :
    ```bash
    git clone https://github.com/VOTRE-NOM-UTILISATEUR/VOTRE-NOM-DEPOT.git
    ```
3.  **Placer les fichiers** : Copiez le contenu du dossier dans le répertoire racine de votre serveur (ex: `www` ou `htdocs`).
4.  **Accéder au site** : Ouvrez votre navigateur et allez à l'adresse `http://localhost/hotel/` (ou le nom du dossier que vous avez utilisé).

## 🎨 Structure du projet

```
/
├── assets/
│   ├── css/
│   │   └── style.css       # Styles CSS compilés
│   ├── images/             # Images et logos
│   └── js/
│       └── script.js       # Scripts JavaScript
├── index.php               # Page d'accueil
├── chambres-services.php   # Page des chambres
├── offres-evenements.php   # Page des offres
├── galerie-blog.php        # Page de la galerie
├── contact.php             # Page de contact
├── header.php              # En-tête du site
├── footer.php              # Pied de page du site
├── .gitignore              # Fichiers à ignorer par Git
└── README.md               # Ce fichier
``` 