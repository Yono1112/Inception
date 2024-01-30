SRC = srcs/docker-compose.yml

all: build up

up:
# mkdir -p /home/yuohno/data/mariadb
# mkdir -p /home/yuohno/data/wordpress
	docker compose -f ${SRC} up -d

down:
	docker compose -f ${SRC} down

build:
	docker compose -f ${SRC} build

re: down build up

clean:
	docker compose -f ${SRC} down -v --rmi all
# rm -rf /home/yuohno/data/wordpress
# rm -rf /home/yuohno/data/mariadb

ps:
	docker compose -f ${SRC} ps

mariadb:
	docker exec -it mariadb bash

nginx:
	docker exec -it nginx bash

wordpress:
	docker exec -it wordpress bash

.PHONY: up down build re clean mariadb nginx wordpress