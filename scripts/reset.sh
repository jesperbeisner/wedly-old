#!/usr/bin/env bash

docker compose exec php php artisan cache:clear
docker compose down -v --remove-orphans

source ./scripts/start.sh
