.PHONY: help
help: ## Show this help
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_\-\.]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

build: ## Start all docker containers and build everything
	./scripts/start.sh

reset: ## Resets everything
	./scripts/reset.sh

reset-db: ## Resets the database
	./scripts/reset-db.sh

down: ## Remove everything
	docker compose down -v --remove-orphans

test: pint phpunit phpstan ## Run PHP-CS-Fixer, PHPUnit and PHPStan

pint: ## Run PHP-CS-Fixer
	docker compose exec php vendor/bin/pint --verbose

phpunit: ## Run PHPUnit
	docker compose exec php vendor/bin/phpunit

phpstan: ## Run PHPStan
	docker compose exec php vendor/bin/phpstan --memory-limit=-1
