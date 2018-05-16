<?php

namespace Adlino\IranGeo\Database\Seeds;

use Adlino\IranGeo\Models\County;
use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        County::insert([
            [
                'id' => 1,
                'province_id' => 1,
                'name' => 'آذرشهر',
                'en_name' => 'Azarshahr',
                'latitude' => '37.755143',
                'longitude' => '45.868963',
            ],
            [
                'id' => 2,
                'province_id' => 1,
                'name' => 'اسکو',
                'en_name' => 'Osku',
                'latitude' => '37.947687',
                'longitude' => '45.79345',
            ],
            [
                'id' => 3,
                'province_id' => 1,
                'name' => 'اهر',
                'en_name' => 'Ahar',
                'latitude' => '38.489431',
                'longitude' => '47.068358',
            ],
            [
                'id' => 4,
                'province_id' => 1,
                'name' => 'بستان آباد',
                'en_name' => 'Bostan Abad',
                'latitude' => '37.843106',
                'longitude' => '46.83035',
            ],
            [
                'id' => 5,
                'province_id' => 1,
                'name' => 'بناب',
                'en_name' => 'Bonab',
                'latitude' => '37.344596',
                'longitude' => '46.05648',
            ],
            [
                'id' => 6,
                'province_id' => 1,
                'name' => 'تبریز',
                'en_name' => 'Tabriz',
                'latitude' => '38.096239',
                'longitude' => '46.273801',
            ],
            [
                'id' => 7,
                'province_id' => 1,
                'name' => 'جلفا',
                'en_name' => 'Jolfa',
                'latitude' => '38.930737',
                'longitude' => '45.628868',
            ],
            [
                'id' => 8,
                'province_id' => 1,
                'name' => 'چاراویماق',
                'en_name' => 'Charoimagh',
                'latitude' => '36.904145',
                'longitude' => '47.091572',
            ],
            [
                'id' => 9,
                'province_id' => 1,
                'name' => 'خداآفرین',
                'en_name' => 'Khoda Afarin',
                'latitude' => '39.137506',
                'longitude' => '46.961128',
            ]
        ]);
    }
}
