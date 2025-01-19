# Youdemy - Plateforme de Cours en Ligne

## Description

Youdemy est une plateforme de cours en ligne interactive qui permet aux étudiants et aux enseignants d'interagir de manière personnalisée. Le système propose un catalogue de cours riche, une gestion des utilisateurs basée sur des rôles (étudiant, enseignant, administrateur), et des fonctionnalités avancées comme des statistiques détaillées et des notifications. 

La plateforme vise à révolutionner l'apprentissage en ligne en offrant une interface fluide, un suivi des performances, et une grande flexibilité d'utilisation.

---

## Fonctionnalités

### Partie Front Office

#### Visiteur
- **Accès au catalogue des cours** avec pagination.
- **Recherche de cours** par mots-clés.
- **Création d’un compte** avec le choix du rôle (Étudiant ou Enseignant).

#### Étudiant
- **Visualisation du catalogue des cours**.
- **Recherche et consultation des détails des cours** (description, contenu, enseignant, etc.).
- **Inscription à un cours** après authentification.
- **Accès à une section "Mes cours"** regroupant les cours rejoints.

#### Enseignant
- **Ajout de nouveaux cours** avec détails : titre, description, contenu (vidéo ou document), tags et catégorie.
- **Gestion des cours** : modification, suppression et consultation des inscriptions.
- **Accès à une section "Statistiques"** sur les cours : nombre d’étudiants inscrits, nombre de cours créés, etc.

### Partie Back Office

#### Administrateur
- **Validation des comptes enseignants**.
- **Gestion des utilisateurs** : activation, suspension ou suppression de comptes.
- **Gestion des contenus** : création et gestion des cours, catégories et tags.
- **Insertion en masse de tags** pour faciliter la gestion des cours.
- **Accès à des statistiques globales** : nombre total de cours, répartition par catégorie, cours avec le plus d’étudiants, top 3 des enseignants.

### Fonctionnalités Transversales
- **Relation many-to-many pour les tags** : Un cours peut contenir plusieurs tags.
- **Polymorphisme** dans les méthodes "Ajouter cours" et "Afficher cours".
- **Système d’authentification et d’autorisation** pour protéger les routes sensibles.
- **Contrôle d’accès** : chaque utilisateur peut accéder uniquement aux fonctionnalités correspondant à son rôle.

---

## Exigences Techniques

### Prérequis
- PHP 8.4.1
- Serveur Apache ou Nginx
- Base de données MySQL
- Composer pour la gestion des dépendances

### Architecture
- **Modèle OOP (Object-Oriented Programming)** : Respect des principes OOP, notamment l'encapsulation, l'héritage et le polymorphisme.
- **Base de données relationnelle** : Gestion des relations one-to-many et many-to-many.
- **Sessions PHP** pour la gestion des utilisateurs connectés.
- **Validation des données utilisateur** pour garantir la sécurité du site.

---

### Fonctionnalités Avancées
- **Recherche avancée** avec filtres : catégorie, tags, auteur.
- **Statistiques avancées** : taux d’engagement par cours, catégories les plus populaires.
- **Système de notifications** : par exemple, validation de compte enseignant ou confirmation d'inscription à un cours.
- **Système de commentaires/évaluations** sur les cours.
- **Génération de certificats PDF** de complétion pour les étudiants.

---

## Installation

1. **Clonez le repository :**

   ```bash
   git clone https://github.com/Abdelhakim-Baalla/Youdemy.git
   cd youdemy

2. **Configurez la base de données :**

    => Créez une base de données MySQL.
    => Mettez à jour les paramètres de connexion dans le fichier .env.

3. **Démarrez le serveur de développement :**

     ```bash
    php -S localhost:8000

4. **Accédez à l'application via votre navigateur :**

    => http://localhost:8000

## Structure du Projet

 ```bash
    /youdemy
    |-- /Assests
    |-- /Conceptions
    |-- /Controllers
    |-- /Data
    |-- /Models
    |-- /Views
    |index.html
    |Readme.md

