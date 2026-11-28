# gestionnaire-campagnes-jdr

Application de gestion de campagnes de jeu de rôle avec génération de quêtes par IA.

## Prérequis

- PHP 8.4 ou supérieur, avec les extensions requises par Laravel
- Composer
- Node.js et npm
- SQLite (base de données utilisée par défaut)

## Installation et démarrage

À la racine du projet, installez les dépendances et préparez l'application :

```bash
composer run setup
```

Cette commande installe les dépendances PHP et JavaScript, crée le fichier
`.env` s'il n'existe pas, génère la clé de l'application, exécute les migrations
et compile les ressources front-end.

Lancez ensuite l'environnement de développement :

```bash
composer run dev
```

L'application est alors disponible à l'adresse indiquée par Laravel
(par défaut `http://localhost:8000`). Le script démarre également les processus
de développement configurés dans le projet, dont Vite.

Pour les vérifications, les commandes disponibles comprennent :

```bash
composer run test
composer run ci:check
```

## Choix d'architecture

- **Monolithe Laravel** : le serveur PHP gère les routes, la logique applicative,
  l'authentification et l'accès aux données.
- **Inertia.js et Vue 3 avec TypeScript** : les pages Vue sont rendues dans le
  flux de navigation Laravel, sans application front-end séparée.
- **SQLite par défaut** : la configuration de développement utilise SQLite ;
  Laravel permet de changer de moteur via la configuration de base de données
  et les variables d'environnement.
- **Vite Plus et Tailwind CSS** : Vite Plus gère le développement et la
  compilation du front-end, avec Tailwind CSS pour les styles.
