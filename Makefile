.PHONY: init
init:
    docker-compose exec web php artisan key:generate
    docker-compose exec web php artisan migrate
