# Profile Management System
This is a web application developed for a Final Year Project. 

The system allows users to manage their profiles with support for different user roles such as students, staff, and administrators. 

Built with Laravel, it follows the MVC architecture and includes basic authentication and role-based access control.

## Features
- User authentication (login/logout)
- Profile creation and updates
- Separate views and data for student and staff users
- Role-based access for different staff privileges
- Module and major integration for academic context

## Requirements
- PHP >= 8.1
- Composer
- Laravel 10
- MySQL or PostgreSQL
- Node.js and npm

## Installation
1. Clone the repository:

```
git clone https://github.com/your-username/profile-management-system.git
cd profile-management-system
```

2. Install dependencies:

```
composer install
npm install && npm run dev
```

3. Set up environment:

```
cp .env.example .env
php artisan key:generate
```

4. Configure .env with your database settings, then run:

```
php artisan migrate
php artisan db:seed (optional)
php artisan serve
```

## Project Structure

- `app/Models` – Eloquent models

- `resources/views` – Blade templates

- `routes/web.php` – Route definitions

- `app/Http/Controllers` – Controller logic

## Project Progress
- [X] User login and logout system 
- [ ] Role-based access (student, staff, admin)
  - [X] Student
  - [X] Staff
  - [ ] Admin
- [X] Profile creation and editing
- [X] Separate profile fields for students and staff
- [X] Staff role classification: admin, lecturer, program leader
- [X] Module and major tracking for academic context

## Notes
This project was created as part of an academic requirement, and thus belongs to Universiti Brunei Darussalam

