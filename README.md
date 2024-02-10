##Système de Gestion des Stocks

Ce projet est un système de gestion des stocks développé en PHP avec intégration MySQL. Il comprend des tests unitaires réalisés avec PHPUnit et une automatisation des workflows avec GitHub Actions.

###Fonctionnalités
Gestion des Stocks : Permet de suivre les articles en stock, leurs catégories, quantités, prix, etc.
Base de données MySQL : Utilise une base de données MySQL pour le stockage et la récupération des données.
Tests PHPUnit : Inclut des tests unitaires écrits avec PHPUnit pour garantir la qualité et la fiabilité du code.
GitHub Actions : Implémente des actions GitHub pour l'automatisation des workflows, y compris les tests et le déploiement.

###Prérequis
PHP (version 7.4 ou 8.0)
Base de données MySQL
PHPUnit (version 10.5)
Git
Installation
Cloner le Dépôt : Clonez ce dépôt sur votre machine locale en utilisant la commande suivante :

bash
Copy code
git clone https://github.com/elm-dak/Gestion-stock.git
Configuration de la Base de Données : Importez le schéma de la base de données fourni dans database/schema.sql pour configurer les tables et les relations nécessaires dans votre base de données MySQL.

Configuration : Configurez les paramètres de connexion à votre base de données dans config.php pour correspondre aux identifiants de votre serveur MySQL.

Installation des Dépendances : Installez les dépendances du projet à l'aide de Composer :

bash
Copy code
composer install
Utilisation
Exécution des Tests : Lancez les tests PHPUnit pour vérifier la fonctionnalité du code :

bash
Copy code
vendor/bin/phpunit
Démarrage du Serveur : Démarrez un serveur de développement PHP pour exécuter l'application en local :

bash
Copy code
php -S localhost:8000
Accès à l'Application : Accédez à l'application dans votre navigateur web en vous rendant sur http://localhost:8000/vue/dashboard.php.
