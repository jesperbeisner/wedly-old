#!/usr/bin/env bash

docker compose down -v --remove-orphans
docker compose up -d
docker compose exec php rm -rf vendor
docker compose exec php composer install
docker compose exec php php artisan optimize:clear
docker compose exec php php artisan app:clear-logs
docker compose exec php php artisan app:clear-bootstrap-cache
docker compose exec php php artisan migrate:fresh --seed
