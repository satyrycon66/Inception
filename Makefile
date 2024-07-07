# Docker Compose Configuration
COMPOSE_FILE := srcs/docker-compose.yml

.PHONY: help build up stop down


run:
	mkdir -p /Users/simonrouleaucharbonneau/Desktop/Inception/srcs/data/wordpress
	sudo chmod 777 /Users/simonrouleaucharbonneau/Desktop/Inception/srcs/data/wordpress
	mkdir -p /Users/simonrouleaucharbonneau/Desktop/Inception/srcs/data/mariadb
	sudo chmod 777 /Users/simonrouleaucharbonneau/Desktop/Inception/srcs/data/mariadb
	docker-compose -f $(COMPOSE_FILE) up --build

stop:
	docker-compose -f $(COMPOSE_FILE) stop

down:
	docker-compose -f $(COMPOSE_FILE) down -v

mariadb:
	docker exec -it srcs_mariadb /bin/bash