SRC = srcs/docker-compose.yml

up:
	docker compose -f ${SRC} up -d

down:
	docker compose -f ${SRC} down

build:
	docker compose -f ${SRC} build

re:
	docker compose -f ${SRC} down
	docker compose -f ${SRC} build
	docker compose -f ${SRC} up -d

clean:
	docker compose -f ${SRC} down -v --rmi all

ps:
	docker compose -f ${SRC} ps

mariadb:
	docker exec -it mariadb bash

nginx:
	docker exec -it nginx bash

wordpress:
	docker exec -it wordpress bash

.PHONY: up down build re clean mariadb nginx wordpress