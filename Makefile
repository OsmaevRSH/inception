COMPOSE=docker-compose.yml
ENV=.env
PATH_TO_FILE=./srcs/

all:
	docker-compose -f $(PATH_TO_FILE)$(COMPOSE) --env-file $(PATH_TO_FILE)$(ENV) up --build -d

clean:
	docker-compose -f $(PATH_TO_FILE)$(COMPOSE) --env-file $(PATH_TO_FILE)$(ENV) down;

fclean:
	docker-compose -f $(PATH_TO_FILE)$(COMPOSE) --env-file $(PATH_TO_FILE)$(ENV) down;
	docker system prune -f -a --volumes

re: fclean all

.PHONY: all fclean clean re
