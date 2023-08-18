default_php_version:=8.0
default_server_port:=8080
php_version:=$(PHP_VERSION)
server_port:=$(PORT)

ifndef PHP_VERSION
	php_version:=$(default_php_version)
endif

ifndef PORT
	server_port:=$(default_server_port)
endif

base_dir:=$(shell basename $(CURDIR))
docker:=docker run --rm -v $(CURDIR):/app -w /app $(base_dir):$(php_version)

build:
	docker build --build-arg VERSION=$(php_version) --tag $(base_dir):$(php_version) ./docker/

exec:
	docker run --rm -ti -v $(CURDIR):/app:rw -w /app $(base_dir):$(php_version) sh

serve:
	docker run -p$(server_port):8080 --rm -v $(CURDIR):/app -w /app $(base_dir):$(php_version) php -S 0.0.0.0:8080

install:
	$(docker) composer install

install-no-dev:
	$(docker) composer install --no-dev

static-analyze:
	$(docker) composer static

unit:
	$(docker) -dzend_extension=xdebug.so -dxdebug.mode=coverage  vendor/bin/phpunit --testsuite main

coverage:
	$(docker) vendor/bin/php-coverage-checker build/logs/clover.xml 60

all: build install static-analyze unit coverage

.PHONY: build
