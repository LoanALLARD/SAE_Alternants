# I-AMU - Documentation

### ARchitecture du projet

```
├── README.md
├── app
│   ├── config
│   │   └── routes.php
│   ├── controllers
│   │   ├── HomeController.php
│   │   ├── LoginController.php
│   │   └── RegisterController.php
│   ├── core
│   │   └── Router.php
│   ├── models
│   └── views
│       ├── layout
│       │   ├── footer.php
│       │   ├── header.php
│       │   └── navbar.php
│       └── pages
│           ├── 404.php
│           ├── login.php
│           └── register.php
├── composer.json
├── composer.lock
├── public
│   ├── assets
│   │   ├── css
│   │   │   ├── 404.css
│   │   │   ├── auth.css
│   │   │   └── footer.css
│   │   └── img
│   └── index.php
└── tests
```

### Installation des dépendances

Avant de charger le projet, exécuter à la racine du projet la commande :

```composer install```

### Mise en place d'un serveur PHP en local :

Ouvrir un terminal à la racine du projet et exécuter la commande
```php -S localhost:8000 -t public```

### Exécution du PHPStan

Ouvrir un terminal à la racine du projet et exécuter la commande
```composer phpstan```