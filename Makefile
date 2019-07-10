.PHONY: init
init:
	docker-compose exec web php artisan key:generate
	docker-compose exec web php artisan migrate

.PHONY: phan
phan:
	docker-compose exec web composer phan

.PHONY: lint
lint:
	docker-compose exec web composer lint
