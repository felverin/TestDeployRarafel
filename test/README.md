# Personal Portfolio

A Laravel MVC portfolio with three text-focused pages:

- **Home** — a short personal introduction.
- **Projects** — a list of coursework projects, their codes, and courses.
- **Contact** — contact information.

The previous `/about` URL redirects to the Projects page.

## Requirements

- PHP 8.3 or later with PDO SQLite enabled
- Composer
- Node.js and npm

## Setup

1. Install PHP dependencies with `composer install`.
2. Copy `.env.example` to `.env` if needed and generate an application key with `php artisan key:generate`.
3. The app uses SQLite by default. Run `php artisan migrate` to create the database and tables.
4. Install frontend dependencies with `npm install`, then build the stylesheet with `npm run build`.
5. Start the app with `php artisan serve` and open the address printed by Artisan.

The local `.env` selects SQLite and file-backed sessions/cache, so the site does not require a MySQL server.

## Tests

Run the feature suite with:

```sh
php artisan test
```
