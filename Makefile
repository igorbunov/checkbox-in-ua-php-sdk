docker:=docker-compose -f ./docker/docker-compose.yml run php-cli

build:
	docker-compose -f ./docker/docker-compose.yml build $(c)
composer_install:
	$(docker) composer install
serve:
	docker-compose -f ./docker/docker-compose.yml up -d $(c)
down:
	docker-compose -f ./docker/docker-compose.yml down $(c)
style:
	$(docker) composer static
unit:
	$(docker) vendor/bin/phpunit --testsuite main
checks: style unit

all: build serve composer_install style unit