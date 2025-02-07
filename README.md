![screencapture-127-0-0-1-8000-2025-02-07-17_54_16](https://github.com/user-attachments/assets/91afc7a9-bfcb-4d07-b06c-d893b11f2464)![Capture d'écran 2025-02-07 180010](https://github.com/user-attachments/assets/5a6dc951-c79c-4ad5-a42a-ef292df040aa)
l Laravel 11![Uploading screenc![Capture d'écran 2025-02-07 175548](https://github.com/user-attachments/assets/037c50cb-bd3d-4823-b039-aeafe6b72205)
apture-127-0-0-1-8000-2025-02-07-17_54_16.png…]()
![screencapture-127-0-0-1-8000-2025-02-07-17_54_44](https://github.com/user-attachments/assets/ae3a8b42-bfce-4892-8638-1344ac0914cf)

![Capture d'écran 2025-02-07 175914](https://github.com/user-attachments/assets/4f6da6b3-0e61-4c81-8b6c-4938f5722849)
![Uploading Capture d'écran 2025-0![Capture d'écran 2025-02-07 180038](https://github.com/user-attachments/assets/8db0e3a3-a4fb-430c-89f5-ad86ad8a6085)
2-07 180010.png…]()![Capture d'écran 2025-02-07 180114](https://github.com/user-attachments/assets/5a42297f-9d89-4cd7-9eb2-d692ec8c80f6)


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

