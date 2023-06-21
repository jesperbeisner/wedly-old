#!/usr/bin/env bash

docker compose up -d
docker compose exec php composer install
docker compose exec php php artisan migrate
docker compose exec php php artisan db:seed
