# Travel Laravel 11

Ce projet est une application Laravel 11 de gestion de voyages multilingue.

## Installation

Suivez ces étapes pour configurer et lancer le projet sur votre machine locale :

### Prérequis

- PHP 8.1 ou supérieur
- Composer
- MySQL
- Node.js et npm
- Clé API Gmail pour l'envoi des emails

### Étapes

1. **Cloner le projet**
   ```bash
   git clone https://github.com/yousaker/travel_laravel11.git
   cd travel_laravel11
   ```

2. **Installer les dépendances PHP**
   ```bash
   composer install
   ```

3. **Installer les dépendances npm**
   ```bash
   npm install
   npm run dev
   ```

4. **Configurer l'environnement**
   
   Copiez le fichier `.env.example` en `.env` :
   ```bash
   cp .env.example .env
   ```

   Mettez à jour le fichier `.env` avec vos configurations, comme suit :

   **Base de données :**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=travel1
   DB_USERNAME=root
   DB_PASSWORD=
   ```

   **Configuration email :**
   ```env
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=465
   MAIL_USERNAME=your_email@gmail.com
   MAIL_PASSWORD=your_email_password
   MAIL_ENCRYPTION=ssl
   MAIL_FROM_ADDRESS="your_email@gmail.com"
   MAIL_FROM_NAME="Travel App"
   ```

5. **Créer un lien symbolique pour le stockage**
   ```bash
   php artisan storage:link
   ```

6. **Générer une clé d'application**
   ```bash
   php artisan key:generate
   ```

7. **Exécuter les migrations**
   ```bash
   php artisan migrate
   ```

8. **Démarrer le serveur local**
   ```bash
   php artisan serve
   ```

   L'application sera accessible sur [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Fonctionnalités

- Gestion des voyages
- Multilingue (Français et Anglais)
- Envoi d'emails via Gmail
- Réservation et gestion des produits
- Interface utilisateur moderne

## Auteur

- **Youcef Skr**
- [Profil GitHub](https://github.com/yousaker)

## Licence

Ce projet est sous licence MIT.

