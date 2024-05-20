# Download project

## config Backend
### Install project dependencies

composer install

### Configure environment variables
cp .env.example .env
php artisan key:generate

### Create migrations (tables and Seeders)
php artisan migrate --seed

## Login

email: admin@email.com
password: admin@123

