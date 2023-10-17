# Laravel Project README

## Setup

1. **Install dependencies:**

    ```bash
    composer install
    cp .env.example .env
    ```

2. **Configure database:**

    - Update `.env` with your database credentials.

3. **Generate key and run migrations:**

    ```bash
    php artisan key:generate
    php artisan migrate
    ```

## Usage

Run the development server:

```bash
php artisan serve
