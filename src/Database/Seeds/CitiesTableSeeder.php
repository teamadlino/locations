<?php

namespace Adlino\IranGeo\Database\Seeds;

use Adlino\IranGeo\Models\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            [
                'id' => 1,
                'province_id' => 1,
                'name' => 'آذرشهر',
                'name_en' => 'Azarshahr',
                'latitude' => '37.75888900',
                'longitude' => '45.97833300'
            ],
            [
                'id' => 2,
                'province_id' => 1,
                'name' => 'اسکو',
                'name_en' => 'Osku',
                'latitude' => '37.91583300',
                'longitude' => '46.12361100'
            ],
            [
                'id' => 3,
                'province_id' => 1,
                'name' => 'اهر',
                'name_en' => 'Ahar',
                'latitude' => '38.48943050',
                'longitude' => '47.06835750'
            ],
            [
                'id' => 4,
                'province_id' => 1,
                'name' => 'بستان آباد',
                'name_en' => 'Bostanabad',
                'latitude' => '37.85000000',
                'longitude' => '46.83333300'
            ],
            [
                'id' => 5,
                'province_id' => 1,
                'name' => 'بناب',
                'name_en' => 'Bonab',
                'latitude' => '37.34027800',
                'longitude' => '46.05611100'
            ],
            [
                'id' => 6,
                'province_id' => 1,
                'name' => 'تبریز',
                'name_en' => 'Tabriz',
                'latitude' => '38.06666700',
                'longitude' => '46.30000000'
            ],
            [
                'id' => 7,
                'province_id' => 1,
                'name' => 'جلفا',
                'name_en' => 'Jolfa',
                'latitude' => '38.94027800',
                'longitude' => '45.63083300'
            ],
            [
                'id' => 8,
                'province_id' => 1,
                'name' => 'چار اویماق',
                'name_en' => 'Charuymaq',
                'latitude' => '37.12990520',
                'longitude' => '47.02456860'
            ],
            [
                'id' => 9,
                'province_id' => 1,
                'name' => 'سراب',
                'name_en' => 'Sarab',
                'latitude' => '37.94083300',
                'longitude' => '47.53666700'
            ],
            [
                'id' => 10,
                'province_id' => 1,
                'name' => 'شبستر',
                'name_en' => 'Shabestar',
                'latitude' => '38.18027800',
                'longitude' => '45.70277800'
            ],
            [
                'id' => 11,
                'province_id' => 1,
                'name' => 'عجبشیر',
                'name_en' => 'Ajab Shir',
                'latitude' => '37.47750000',
                'longitude' => '45.89416700'
            ],
            [
                'id' => 12,
                'province_id' => 1,
                'name' => 'کلیبر',
                'name_en' => 'Kaleybar',
                'latitude' => '38.86944400',
                'longitude' => '47.03555600'
            ],
            [
                'id' => 13,
                'province_id' => 1,
                'name' => 'مراغه',
                'name_en' => 'Maragheh',
                'latitude' => '37.38916700',
                'longitude' => '46.23750000'
            ],
            [
                'id' => 14,
                'province_id' => 1,
                'name' => 'مرند',
                'name_en' => 'Marand',
                'latitude' => '38.42511700',
                'longitude' => '45.76963600'
            ],
            [
                'id' => 15,
                'province_id' => 1,
                'name' => 'ملکان',
                'name_en' => 'Malekan',
                'latitude' => '37.14562500',
                'longitude' => '46.16852420'
            ],
            [
                'id' => 16,
                'province_id' => 1,
                'name' => 'میانه',
                'name_en' => 'Mianeh',
                'latitude' => '37.42111100',
                'longitude' => '47.71500000'
            ],
            [
                'id' => 17,
                'province_id' => 1,
                'name' => 'ورزقان',
                'name_en' => 'Varzaqan',
                'latitude' => '38.50972200',
                'longitude' => '46.65444400'
            ],
            [
                'id' => 18,
                'province_id' => 1,
                'name' => 'هریس',
                'name_en' => 'Heris',
                'latitude' => '29.77518250',
                'longitude' => '-95.31025050'
            ],
            [
                'id' => 19,
                'province_id' => 1,
                'name' => 'هشترود',
                'name_en' => 'Hashtrud',
                'latitude' => '37.47777800',
                'longitude' => '47.05083300'
            ],
            [
                'id' => 20,
                'province_id' => 2,
                'name' => 'ارومیه',
                'name_en' => 'Urmia',
                'latitude' => '37.55527800',
                'longitude' => '45.07250000'
            ],
            [
                'id' => 21,
                'province_id' => 2,
                'name' => 'اشنویه',
                'name_en' => 'Oshnavieh',
                'latitude' => '37.03972200',
                'longitude' => '45.09833300'
            ],
            [
                'id' => 22,
                'province_id' => 2,
                'name' => 'بوکان',
                'name_en' => 'Bukan',
                'latitude' => '36.52111100',
                'longitude' => '46.20888900'
            ],
            [
                'id' => 23,
                'province_id' => 2,
                'name' => 'پیرانشهر',
                'name_en' => 'Piranshahr',
                'latitude' => '36.69444400',
                'longitude' => '45.14166700'
            ],
            [
                'id' => 24,
                'province_id' => 2,
                'name' => 'تکاب',
                'name_en' => 'Takab',
                'latitude' => '36.40083300',
                'longitude' => '47.11333300'
            ],
            [
                'id' => 25,
                'province_id' => 2,
                'name' => 'چالدران',
                'name_en' => 'Chaldoran',
                'latitude' => '39.06498370',
                'longitude' => '44.38446790'
            ],
            [
                'id' => 26,
                'province_id' => 2,
                'name' => 'خوی',
                'name_en' => 'Khoy',
                'latitude' => '38.55027800',
                'longitude' => '44.95222200'
            ],
            [
                'id' => 27,
                'province_id' => 2,
                'name' => 'سردشت',
                'name_en' => 'Sardasht',
                'latitude' => '36.15527800',
                'longitude' => '45.47888900'
            ],
            [
                'id' => 28,
                'province_id' => 2,
                'name' => 'سلماس',
                'name_en' => 'Salmas',
                'latitude' => '38.19722200',
                'longitude' => '44.76527800'
            ],
            [
                'id' => 29,
                'province_id' => 2,
                'name' => 'شاهین دژ',
                'name_en' => 'Shahin Dezh',
                'latitude' => '36.67916700',
                'longitude' => '46.56694400'
            ],
            [
                'id' => 30,
                'province_id' => 2,
                'name' => 'ماکو',
                'name_en' => 'Maku',
                'latitude' => '39.29527800',
                'longitude' => '44.51666700'
            ],
            [
                'id' => 31,
                'province_id' => 2,
                'name' => 'مهاباد',
                'name_en' => 'Mahabad',
                'latitude' => '36.76305600',
                'longitude' => '45.72222200'
            ],
            [
                'id' => 32,
                'province_id' => 2,
                'name' => 'میاندوآب',
                'name_en' => 'Miandoab',
                'latitude' => '36.96944400',
                'longitude' => '46.10277800'
            ],
            [
                'id' => 33,
                'province_id' => 2,
                'name' => 'نقده',
                'name_en' => 'Naqadeh',
                'latitude' => '36.95527800',
                'longitude' => '45.38805600'
            ],
            [
                'id' => 34,
                'province_id' => 3,
                'name' => 'اردبیل',
                'name_en' => 'Ardabil',
                'latitude' => '38.48532760',
                'longitude' => '47.89112090'
            ],
            [
                'id' => 35,
                'province_id' => 3,
                'name' => 'بیله سوار',
                'name_en' => 'Bileh Bileh Savar',
                'latitude' => '39.35677750',
                'longitude' => '47.94907650'
            ],
            [
                'id' => 36,
                'province_id' => 3,
                'name' => 'پارس آباد',
                'name_en' => 'Parsabad',
                'latitude' => '39.64833300',
                'longitude' => '47.91750000'
            ],
            [
                'id' => 37,
                'province_id' => 3,
                'name' => 'خلخال',
                'name_en' => 'Khalkhal',
                'latitude' => '37.61888900',
                'longitude' => '48.52583300'
            ],
            [
                'id' => 38,
                'province_id' => 3,
                'name' => 'کوثر',
                'name_en' => 'Kowsar',
                'latitude' => '31.86768660',
                'longitude' => '54.33798020'
            ],
            [
                'id' => 39,
                'province_id' => 3,
                'name' => 'گرمی',
                'name_en' => 'Germi',
                'latitude' => '39.03722670',
                'longitude' => '47.92770210'
            ],
            [
                'id' => 40,
                'province_id' => 3,
                'name' => 'مشگین',
                'name_en' => 'Meshginshahr',
                'latitude' => '38.39888900',
                'longitude' => '47.68194400'
            ],
            [
                'id' => 41,
                'province_id' => 3,
                'name' => 'نمین',
                'name_en' => 'Namin',
                'latitude' => '38.42694400',
                'longitude' => '48.48388900'
            ],
            [
                'id' => 42,
                'province_id' => 3,
                'name' => 'نیر',
                'name_en' => 'Nir',
                'latitude' => '38.03472200',
                'longitude' => '47.99861100'
            ]
        ]);
    }
}
