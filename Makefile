config:
	- docker compose exec php php artisan config:cache
migrate:
	- docker compose exec php php artisan migrate
migrate-reset:
	- docker compose exec php php artisan migrate:reset
model:
	- docker compose exec php php artisan make:model
view:
	- docker compose exec php php artisan make:view
controller:
	- docker compose exec php php artisan make:controller
stop: 
	- docker compose stop
up-d:
	- docker compose up -d
build:
	- docker compose build