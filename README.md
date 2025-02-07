![screencapture-127-0-0-1-8000-2025-02-07-17_54_44](https://github.com/user-attachments/assets/b282ed6a-c497-48f3-b5c9-7ea5f58b25cd)
![Uploading screencapture-127-0-0-1-8000![Capture d'écran 2025-02-07 175548](https://github.com/user-attachments/assets/7a9bfa39-bdbc-4532-be6a-359eed1d138e)
-2025-02-07-17_54_44.png…]()
![Capture d'écran 2025-02-07 175914](https://github.com/user-attachments/assets/e0ae18e4-393a-463a-8532-51e586c09480)
![Capture d'écran 2025-02-07 180114](https://github.com/user-attachments/assets/f9b0ab80-2285-40f2-b076-e994468b20f2)

![Capture d'écran 2025-02-07 180010](https://github.com/user-attachments/assets/19d1e67e-c09e-4db9-8677-22b4c1d6bb8e)

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
- Multilingue (Arabe et Anglais)
- Envoi d'emails via Gmail
- Réservation et gestion des produits
- Interface utilisateur moderne

## Auteur

- **Youcef Skr**
- [Profil GitHub](https://github.com/yousaker)

## Licence

Ce projet est sous licence MIT.

