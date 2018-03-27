## Install all the packages

```php
composer install
```

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Migrate your Database

```php
php artisan migrate
```

## Database setup

Create database with name ```eapi``` and configure as,

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eapi
DB_USERNAME=root
DB_PASSWORD=Hh1107030
```

You can import sample data from my database located at ```App/db```.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
