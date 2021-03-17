#!/bin/sh

sed -i -E "s/DB_HOST=.*/DB_HOST=$DB_HOST/" .env
sed -i -E "s/DB_DATABASE=.*/DB_DATABASE=$DB_DATABASE/" .env
sed -i -E "s/DB_USERNAME=.*/DB_USERNAME=$DB_USERNAME/" .env
sed -i -E "s/DB_PASSWORD=.*/DB_PASSWORD=$DB_PASSWORD/" .env
composer install
php artisan migrate
php artisan passport:keys
php artisan key:generate
php artisan serve --host 0.0.0.0