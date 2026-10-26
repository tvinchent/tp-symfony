# TP Symfony - Formulaires de messages

Durée indicative : 2 h. Niveau : Bac+2.

## Installation
Prérequis : PHP 8.2+ avec extensions nécessaires, Composer, Symfony CLI facultatif, SQLite / pdo_sqlite, Git.

Ces fichiers constituent un **kit de départ à copier dans un vrai projet Symfony** (sans `vendor/`).

```bash
composer create-project symfony/skeleton mon-tp
cd mon-tp
composer require symfony/twig-bundle symfony/asset symfony/orm-pack symfony/form symfony/validator symfony/security-csrf
composer require --dev symfony/maker-bundle doctrine/doctrine-fixtures-bundle
```

Copier ensuite le contenu du dossier `starter/` du kit dans la racine `mon-tp/`, en conservant l'arborescence. Pour SQLite, régler `DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"` dans `.env.local` (ne pas commiter ce fichier). Démarrer avec `symfony server:start` ou `php -S localhost:8000 -t public public/index.php` (le serveur PHP intégré doit fournir le front controller ; Symfony CLI est recommandé).

> Le kit distribué n'inclut ni `vendor/` ni le framework Symfony lui-même. Installer les dépendances avec Composer avant les exercices.

## A réaliser
Voir le PDF principal ; les marqueurs `TODO ETUDIANT` identifient les parties à compléter.

**Point de départ fourni :** entités, relations, contrôleur de lecture, vues et fixtures opérationnels ; seule la publication est à construire.

Après copie des fichiers dans le projet Symfony :

```bash
php bin/console make:migration
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
symfony server:start
```

Ouvrir `/salons`. Puis : créer `src/Form/MessageType.php`, ajouter le formulaire sur `/salon/{id}`, valider et persister.
