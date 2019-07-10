.PHONY: init
init:
	docker-compose exec web php artisan key:generate
	docker-compose exec web php artisan migrate
	docker-compose exec web php artisan db:seed

.PHONY: phan
phan:
	docker-compose exec web composer phan

.PHONY: lint
lint:
	docker-compose exec web composer lint
