# Salutem

## Installation

```shell
composer install
npm install
```

Créer la connection à la base de données (fichier .env.local avec DATABASE_URL).

```shell
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

Générer les fixtures :

```shell
php bin/console doctrine:migrations:migrate
```

Puis mettre les images dynamiques dans le dossier public/uploads

```shell
symfony serve
npm run watch
```

## Création d'un projet Symfony

### Créer le projet

```shell
symfony new salutem --full
```

OU

```shell
composer create-project symfony/website-skeleton salutem
```

Eventuellement modifier le fichier .gitignore

### Installer WebPack Encore

https://symfony.com/doc/current/frontend.html

```shell
composer require symfony/webpack-encore-bundle
npm install
```

#### Activer SASS

Décommenter la ligne suivante du fichier webpack.config.js

```javascript
.enableSassLoader()
```

Renommer le fichier assets/css/style.css enassets/css/style.scss

Modifier la ligne suivante dans le fichier assets/js/app.js

```javascript
import '../css/app.scss';
```

Installer les dépendances pour SASS puis compiler les fichiers

```shell
npm install sass-loader@^7.0.1 node-sass --save-dev
npm run watch
```

### Intégrer le code HTML dans les fichiers Twig

Créer un controller pour la page d'accueil

```shell
php bin/console make:controller DefaultController
```

### Création des entités

Créer la base de données avec MySQL Workbench

Créer les classes (entités) PHP

```shell
php bin/console make:entity
```

Créer la base de données dans MySQL

```shell
php bin/console doctrine:database:create
```

Créer le fichier de migration

```shell
php bin/console make:migration
```

Exécuter les migrations

```shell
php bin/console doctrine:migrations:migrate
```

En cas de problème :
1. Supprimer les fichiers de migration
2. Supprimer puis recréer la base de données :
```shell
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
```
3. Récréer le fichier de migration puis executer les migrations :
```shell
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

### Création des données de test

https://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html

```shell
composer req --dev orm-fixtures
```

Générer des fichiers de fixtures :

```shell
php bin/console make:fixtures
```

Exécuter les fixtures :

```shell
php bin/console doctrine:fixtures:load
```