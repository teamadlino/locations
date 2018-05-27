# Locations
Iran Provinces, Counties and Cities with a Google Map Location for Laravel.

## Installation
```bash
composer require adlino/locations
```

## Publish
```bash
php artisan vendor:publish --force --provider="Adlino\Locations\LocationsServiceProvider"
composer dump-autoload
php artisan locations:init
```

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






