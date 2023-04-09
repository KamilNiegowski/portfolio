#!/bin/bash

composer install
npm install
npm install tailwindcss -S
npm install vite
npm install alpinejs
npm update
php artisan key:generate
php artisan cache:clear
php artisan view:clear
sleep 30
php artisan migrate
npm run build
php-fpm