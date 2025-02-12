# Travel Laravel 11
                                         
![screencapture-127-0-0-1-8000-2025-02-07-17_54_44](https://github.com/user-attachments/assets/01721938-6e8d-44ed-91f8-6ed25b04ef07)
![screencapture-127-0-0-1-8000-2025-02-07-17_54_16](https://github.com/user-attachments/assets/331b81e6-4141-46ce-9b98-e203bb7389a2)
![Capture d'écran 2025-02-07 180010](https://github.com/user-attachments/assets/031ef86e-17a1-4d17-a94d-f83d8f3c57da)
025-02-07-17_54_44.png…]()
![Capture d'écran 2025-02-07 180114](https://github.com/user-attachments/assets/bfe83995-2fa1-42ec-b98d-eaa3914b4390)
![Capture d'écran 2025-02-07 175914](https://github.com/user-attachments/assets/aa9ceffb-fa9c-4af8-8640-0ee4e3e5d238)
Travel Laravel 11
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


