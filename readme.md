Adlino/IranGeo
==========
Iran Provinces and Cities helper for Laravel.

## Installation

### Composer

Execute the following command to get the latest version of the package:

```terminal
composer require adlino/iran-geo
```

### Laravel

In your `config/app.php` add `Adlino\IranGeo\IranGeoServiceProvider::class` to the end of the `providers` array:

```php
'providers' => [
    ...
    Adlino\IranGeo\IranGeoServiceProvider::class,
],
```

Publish Configuration

```shell
php artisan vendor:publish --tag=irGeo
```

Migrate the new tables

```shell
php artisan migrate
```

Seeder Tables

```shell
php artisan db:seed --class="Adlino\IranGeo\Database\Seeds\ProvincesTableSeeder" 
php artisan db:seed --class="Adlino\IranGeo\Database\Seeds\CitiesTableSeeder"
```