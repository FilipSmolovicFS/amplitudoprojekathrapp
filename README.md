AmplitudoHRApp
AmplitudoHRApp is a web-based human resource management system designed to streamline employee management processes. The application provides functionality for handling employee records, tracking organizational data, and supporting administrative HR operations in a centralized environment.
Tech Stack
PHP (Laravel 8.4.0)
Node.js (v24.13.0)
Vite (frontend build tool)
Composer
MySQL / PostgreSQL
---
Prerequisites
Ensure the following dependencies are installed on the system:
PHP >= 7.3
Composer
Node.js v24.13.0
npm or yarn
Database server (MySQL/PostgreSQL)
---
Installation
Clone the repository:
```bash
git clone <repo-url>
cd AmplitudoHRApp
```
Install PHP dependencies:
```bash
composer install
```
Install Node.js dependencies:
```bash
npm install
```
Copy the environment file and configure your database credentials:
```bash
cp .env.example .env
```
Generate the application key:
```bash
php artisan key:generate
```
---
Database Migration & Seeding
Run migrations to create all database tables:
```bash
php artisan migrate
```
Seed the database with initial data:
```bash
php artisan db:seed
```
Or run migrations and seeding together in a single command:
```bash
php artisan migrate --seed
```
To drop all tables, re-run migrations, and seed from scratch (development only):
```bash
php artisan migrate:fresh --seed
```
> ⚠️ **Warning:** `migrate:fresh` is destructive and will delete all existing data. Never run it in a production environment.
