# Telepités:
```sh
$ docker-compose up
$ docker exec -it xmlparser-php-fpm bash 
$ composer install
$ vendor/bin/doctrine orm:schema-tool:update --force --dump-sql
$ cd app/cli/ 
$ php xmlCli.php
```
localhoston elérhető egyből az adatok egy táblázatban.