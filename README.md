# Laravel Webapplicatie

## Overzicht
Deze applicatie is een Laravel-gebaseerd project dat gebruikersauthenticatie, een admin dashboard en nieuwsbeheer ondersteunt. Het biedt een gebruiksvriendelijke interface voor het beheren van gebruikers, nieuwsartikelen en FAQ-secties. Het project is bedoeld als oefening in Laravel-development met best practices.

---

## Functionaliteiten
- **Authenticatie**:
  - Registreren, inloggen en uitloggen
  - Wachtwoordherstel via e-mail
  - Standaard admin-account:
    - **Email**: admin@ehb.be
    - **Wachtwoord**: Password!321

- **Nieuwsbeheer**:
  - CRUD-functionaliteiten voor nieuwsartikelen
  - Likes op nieuwsartikelen door gebruikers

- **FAQ-sectie**:
  - Overzicht van veelgestelde vragen
  - CRUD-functionaliteiten (alleen voor admins)

- **Profielbeheer**:
  - Gebruikers kunnen hun profiel bekijken en aanpassen
  - Mogelijkheid om profielfoto's en persoonlijke informatie te bewerken

- **Admin-dashboard**:
  - Overzicht van het aantal gebruikers en nieuwsartikelen
  - Beheer van gebruikersrollen (admin of standaardgebruiker)

---

## Stappen om het project te laten werken

### Vereisten
- PHP 8.4.2 of hoger
- Composer (voor PHP dependencies)
- MySQL (voor de database)
- Node.js en NPM (voor frontend dependencies)
- Laravel CLI (optioneel)

### Installatie-instructies
1. **Kloon de repository**
   ```bash
   git clone <repository-url>
   cd <project-map>
2. **Installeer backend dependencies**
   composer install
3. **Installeer frontend dependencies**
   npm install
   npm run dev

4. **Configureer de .env file**
   DB_DATABASE=project_database
   DB_USERNAME=root
   DB_PASSWORD=<jouw-wachtwoord>

5. **Voer de database migraties en seeders uit**
   php artisan migrate --seed

6. **Start de server**
   php artisan serve

7. **Open de applicatie Ga naar http://127.0.0.1:8000 in je browser.**

8. **Bronvermeldingen**
   php artisan serve
   https://laravel.com/docs/11.x
   https://openai.com/index/chatgpt/
   https://getbootstrap.com/
   https://fontawesome.com/
   https://laravel.com/docs/11.x/starter-kits#breeze-and-next
   https://www.apachefriends.org/

8. **Belangrijke informatie**
   Dit project gebruikt Laravel Breeze voor de standaard authenticatiefuncties.






