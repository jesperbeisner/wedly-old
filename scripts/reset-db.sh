#!/usr/bin/env bash

docker compose exec php php artisan db:wipe
docker compose exec php php artisan migrate
docker compose exec php php artisan db:seed
