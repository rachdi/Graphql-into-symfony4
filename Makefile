COMPOSE=docker-compose -p symfony4
RUN=$(COMPOSE) run --rm fpm

all: build start install

build:
	$(COMPOSE) pull --ignore-pull-failures && $(COMPOSE) build --pull --force-rm

composer-install:
	$(RUN) composer install --no-interaction --prefer-dist

doctrine-migration:
	$(RUN) dockerize -wait tcp://mysql:3306 -timeout 60s
	$(RUN) bin/console doctrine:migration:migrate --no-interaction

front-install:
	$(RUN) yarn install --ignore-engines
	$(RUN) node_modules/.bin/gulp

install: composer-install doctrine-migration front-install

start:
	$(COMPOSE) up -d fpm
	$(RUN) dockerize -wait tcp://fpm:9000 -timeout 60s
	$(COMPOSE) up -d nginx mysql redis graphiql
	$(RUN) dockerize -wait tcp://nginx:80 -timeout 60s

phpunit:
	$(RUN_TEST) vendor/bin/phpunit

clean:
	$(COMPOSE) down -v

cs:
	$(RUN_TEST) vendor/bin/php-cs-fixer fix --no-interaction --dry-run --diff -vvv --rules=@Symfony

cs-fix:
	$(RUN_TEST) vendor/bin/php-cs-fixer fix --no-interaction  -v --rules=@Symfony
