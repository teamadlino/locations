# Locations
Iran Provinces, Counties and Cities with a Google Map Location for Laravel.

## Installation
```bash
composer require adlino/locations
```

## Commands
```bash
php artisan locations:publish
```
This will copy the `database/seeds` and `database/migrations` to your application.
Remember to add 
```php 
$this->call(ProvincesTableSeeder::class);
$this->call(CountiesTableSeeder::class);
$this->call(CitiesTableSeeder::class); 
```
in the `DatabaseSeeder.php`

## Usage
```php
// get all provinces
$provinces = Locations::getAllProvinces(); // return approved provinces

// get all counties
$counties = Locations::getAllCounties(); // return approved counties

// get all cities
$cities = Locations::getAllCities(); // return approved cities

// get cities of province
$cities = $province->getCities();

// get counties of province
$counties = $province->getCounties();

// get area code of tehran province
$areaCode = $province->getAreaCode(); // 021
```






