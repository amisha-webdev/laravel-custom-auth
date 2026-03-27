# Laravel Custom Authentication System with Profile & Password Reset

This is a **custom authentication system** built with **Laravel**, including:

- User registration and login
- Password reset via email
- Profile update (name, email, password)
- Dashboard with reusable master layout
- Secure authentication and session management

The project uses **reusable Blade templates** and can serve as a foundation for larger Laravel projects.

---

## Features

- **User Registration** – Create a new account with email and password
- **Login / Logout** – Secure authentication using Laravel Auth
- **Password Reset** – Request password reset link via email
- **Profile Management** – Update name, email, and password
- **Session Management** – Track logged-in users securely
- **Dashboard** – Simple dashboard view with master layout
- **Reusable Layouts** – Blade templates for header, footer, sidebar

---

## Tech Stack

- Laravel 12.x
- PHP 8.2
- Composer 2.8
- MySQL
- Blade Template Engine
- Sneat Template (UI)

---
## Project Setup

# Installation & Setup

Clone the repository:
Run: git clone https://github.com/amisha-webdev/laravel-custom-auth.git

Navigate to the project folder:
cd laravel-custom-auth

Install dependencies:
composer install

Create .env file by copying .env.example
Run: cp .env.example .env

Run: php artisan key:generate

Run: php artisan migrate

Start the development server:
php artisan serve
Open http://127.0.0.1:8000 in your browser

---

## Authentication Flow
Registration: User creates an account with name, email, and password (password confirmed)
Login: User enters credentials; Laravel Auth validates and creates session
Logout: Session destroyed using Auth::logout() (available in the navbar)

## Password Reset:
User enters email on “Forget Password” page
Token stored in forget_password table
Email sent with reset link
User clicks link, sets new password

## Profile Management:
User can update name, email, password (accessible via navbar)
Password updated only if current password matches

---
