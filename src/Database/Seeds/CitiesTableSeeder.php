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
            ],
            [
                'id' => 43,
                'province_id' => 4,
                'name' => 'آران و بیدگل',
                'name_en' => 'Aran va Bidgol',
                'latitude' => '34.05777800',
                'longitude' => '51.48416700'
            ],
            [
                'id' => 44,
                'province_id' => 4,
                'name' => 'اردستان',
                'name_en' => 'Ardestan',
                'latitude' => '33.37611100',
                'longitude' => '52.36944400'
            ],
            [
                'id' => 45,
                'province_id' => 4,
                'name' => 'اصفهان',
                'name_en' => 'Isfahan',
                'latitude' => '32.65462750',
                'longitude' => '51.66798260'
            ],
            [
                'id' => 46,
                'province_id' => 4,
                'name' => 'برخوار و میمه',
                'name_en' => 'Borkhar and Meymeh',
                'latitude' => '32.83333300',
                'longitude' => '51.77500000'
            ],
            [
                'id' => 47,
                'province_id' => 4,
                'name' => 'تیران و کرون',
                'name_en' => 'Tiran and Karvan',
                'latitude' => null,
                'longitude' => null
            ],
            [
                'id' => 48,
                'province_id' => 4,
                'name' => 'چادگان',
                'name_en' => 'Chadegan',
                'latitude' => '32.76833300',
                'longitude' => '50.62861100'
            ],
            [
                'id' => 49,
                'province_id' => 4,
                'name' => 'خمینی شهر',
                'name_en' => 'Khomeyni Shahr',
                'latitude' => '32.70027800',
                'longitude' => '51.52111100'
            ],
            [
                'id' => 50,
                'province_id' => 4,
                'name' => 'خوانسار',
                'name_en' => 'Khvansar',
                'latitude' => '33.22055600',
                'longitude' => '50.31500000'
            ],
            [
                'id' => 51,
                'province_id' => 4,
                'name' => 'سمیرم',
                'name_en' => 'Semirom',
                'latitude' => '31.39883460',
                'longitude' => '51.56759300'
            ],
            [
                'id' => 52,
                'province_id' => 4,
                'name' => 'شاهین شهر و میمه',
                'name_en' => 'Shahin Shahr and Meymeh',
                'latitude' => '33.12718520',
                'longitude' => '51.51500770'
            ],
            [
                'id' => 53,
                'province_id' => 4,
                'name' => 'شهر رضا',
                'name_en' => 'Shahreza',
                'latitude' => '36.29244520',
                'longitude' => '59.56771490'
            ],
            [
                'id' => 54,
                'province_id' => 4,
                'name' => 'دهاقان',
                'name_en' => 'Dehaqan',
                'latitude' => '31.94000000',
                'longitude' => '51.64777800'
            ],
            [
                'id' => 55,
                'province_id' => 4,
                'name' => 'فریدن',
                'name_en' => 'Faridan',
                'latitude' => '33.02148290',
                'longitude' => '50.30690880'
            ],
            [
                'id' => 56,
                'province_id' => 4,
                'name' => 'فریدون شهر',
                'name_en' => 'Fereydunshahr',
                'latitude' => '32.94111100',
                'longitude' => '50.12111100'
            ],
            [
                'id' => 57,
                'province_id' => 4,
                'name' => 'فلاورجان',
                'name_en' => 'Falavarjan',
                'latitude' => '32.55527800',
                'longitude' => '51.50972200'
            ],
            [
                'id' => 58,
                'province_id' => 4,
                'name' => 'کاشان',
                'name_en' => 'Kashan',
                'latitude' => '33.98503580',
                'longitude' => '51.40996250'
            ],
            [
                'id' => 59,
                'province_id' => 4,
                'name' => 'گلپایگان',
                'name_en' => 'Golpayegan',
                'latitude' => '33.45361100',
                'longitude' => '50.28833300'
            ],
            [
                'id' => 60,
                'province_id' => 4,
                'name' => 'لنجان',
                'name_en' => 'Lenjan',
                'latitude' => '32.47501680',
                'longitude' => '51.30508510'
            ],
            [
                'id' => 61,
                'province_id' => 4,
                'name' => 'مبارکه',
                'name_en' => 'Mobarakeh',
                'latitude' => '32.34638900',
                'longitude' => '51.50444400'
            ],
            [
                'id' => 62,
                'province_id' => 4,
                'name' => 'نائین',
                'name_en' => 'Nain',
                'latitude' => '32.85994450',
                'longitude' => '53.08783210'
            ],
            [
                'id' => 63,
                'province_id' => 4,
                'name' => 'نجف آباد',
                'name_en' => 'Najafabad',
                'latitude' => '32.63242310',
                'longitude' => '51.36799140'
            ],
            [
                'id' => 64,
                'province_id' => 4,
                'name' => 'نطنز',
                'name_en' => 'Natanz',
                'latitude' => '33.51333300',
                'longitude' => '51.91638900'
            ],
            [
                'id' => 65,
                'province_id' => 5,
                'name' => 'ساوجبلاق',
                'name_en' => 'Savojbolagh',
                'latitude' => '38.37879410',
                'longitude' => '47.49743590'
            ],
            [
                'id' => 66,
                'province_id' => 5,
                'name' => 'کرج',
                'name_en' => 'Karaj',
                'latitude' => '35.84001880',
                'longitude' => '50.93909060'
            ],
            [
                'id' => 67,
                'province_id' => 5,
                'name' => 'نظرآباد',
                'name_en' => 'Nazarabad',
                'latitude' => '35.95222200',
                'longitude' => '50.60750000'
            ],
            [
                'id' => 68,
                'province_id' => 5,
                'name' => 'طالقان',
                'name_en' => 'Taleqan',
                'latitude' => '33.27291710',
                'longitude' => '52.19853140'
            ],
            [
                'id' => 69,
                'province_id' => 6,
                'name' => 'آبدانان',
                'name_en' => 'Abdanan',
                'latitude' => '32.99250000',
                'longitude' => '47.41972200'
            ],
            [
                'id' => 70,
                'province_id' => 6,
                'name' => 'ایلام',
                'name_en' => 'Ilam',
                'latitude' => '33.29576180',
                'longitude' => '46.67053400'
            ],
            [
                'id' => 71,
                'province_id' => 6,
                'name' => 'ایوان',
                'name_en' => 'Eyvan',
                'latitude' => '33.82722200',
                'longitude' => '46.30972200'
            ],
            [
                'id' => 72,
                'province_id' => 6,
                'name' => 'دره شهر',
                'name_en' => 'Darreh Shahr',
                'latitude' => '33.13972200',
                'longitude' => '47.37611100'
            ],
            [
                'id' => 73,
                'province_id' => 6,
                'name' => 'دهلران',
                'name_en' => 'Dehloran',
                'latitude' => '32.69416700',
                'longitude' => '47.26777800'
            ],
            [
                'id' => 74,
                'province_id' => 6,
                'name' => 'شیران و چرداول',
                'name_en' => 'Chardavol',
                'latitude' => '33.69383480',
                'longitude' => '46.74784930'
            ],
            [
                'id' => 75,
                'province_id' => 6,
                'name' => 'مهران',
                'name_en' => 'Mehran',
                'latitude' => '33.12222200',
                'longitude' => '46.16472200'
            ],
	        [
		        'id' =>101 ,
		        'province_id' => 10,
		        'name' => 'بیرجند',
		        'name_en' => 'birjand',
		        'latitude' => '32.86490390',
		        'longitude' => '59.22624720'
	        ],
	        [
		        'id' => 102,
		        'province_id' =>10 ,
		        'name' => 'درمیان',
		        'name_en' => 'darmian',
		        'latitude' => '33.03394050',
		        'longitude' => '60.11847970'
	        ],
	        [
		        'id' =>103 ,
		        'province_id' => 10,
		        'name' => 'سرایان',
		        'name_en' => 'sarabian',
		        'latitude' => '33.86027800',
		        'longitude' => '58.52166700'
	        ],
	        [
		        'id' => 104,
		        'province_id' => 10,
		        'name' => 'سر بیشه',
		        'name_en' => 'sarbisheh',
		        'latitude' => '32.57555600',
		        'longitude' => '59.79833300'
	        ],
	        [
		        'id' => 105,
		        'province_id' => 10,
		        'name' => 'فردوس',
		        'name_en' => 'ferdos',
		        'latitude' => '34.01861100',
		        'longitude' => '58.17222200'
	        ],
	        [
		        'id' => 106,
		        'province_id' => 10,
		        'name' => 'قائن',
		        'name_en' => 'ghaen',
		        'latitude' => '33.72666700',
		        'longitude' => '59.18444400'
	        ],
	        [
		        'id' => 107,
		        'province_id' => 10,
		        'name' => 'نهبندان',
		        'name_en' => 'nahbandan',
		        'latitude' => '31.54194400',
		        'longitude' => '60.03638900'
	        ],
	        [
		        'id' => 108,
		        'province_id' => 11,
		        'name' => 'برد سکن',
		        'name_en' => 'bordscan',
		        'latitude' => '35.26083300',
		        'longitude' => '57.96972200'
	        ],
	        [
		        'id' => 109,
		        'province_id' => 11,
		        'name' => 'بجستان',
		        'name_en' => 'bejestan',
		        'latitude' => '34.51638900',
		        'longitude' => '58.18444400'
	        ],
	        [
		        'id' => 110,
		        'province_id' => 11,
		        'name' => 'تایباد',
		        'name_en' => 'taybad',
		        'latitude' => '34.74000000',
		        'longitude' => '60.77555600'
	        ],
	        [
		        'id' => 111,
		        'province_id' => 11,
		        'name' => 'تحت جلگه',
		        'name_en' => 'tahgholgeh',
		        'latitude' => 'null',
		        'longitude' => 'null'
	        ],
	        [
		        'id' => 112,
		        'province_id' => 11,
		        'name' => 'تربت جام',
		        'name_en' => 'torbatjam',
		        'latitude' => '35.24388900',
		        'longitude' => '60.62250000'
	        ],
	        [
		        'id' => 113,
		        'province_id' => 11,
		        'name' => 'تربت حیدریه',
		        'name_en' => 'torbateheidarieh',
		        'latitude' => '35.27388900',
		        'longitude' => '59.21944400'
	        ],
	        [
		        'id' => 114,
		        'province_id' => 11,
		        'name' => 'چناران',
		        'name_en' => 'chenaran',
		        'latitude' => '36.64555600',
		        'longitude' => '59.12111100'
	        ],
	        [
		        'id' => 115,
		        'province_id' => 11,
		        'name' => 'جغتای',
		        'name_en' => 'jaghtari',
		        'latitude' => '36.57888530',
		        'longitude' => '57.25121500'
	        ],
	        [
		        'id' => 116,
		        'province_id' => 11,
		        'name' => 'جوین',
		        'name_en' => 'jooyn',
		        'latitude' => '36.63622380',
		        'longitude' => '57.50799120'
	        ],
	        [
		        'id' => 117,
		        'province_id' => 11,
		        'name' => 'خلیل آباد',
		        'name_en' => 'khalilabad',
		        'latitude' => '35.25583300',
		        'longitude' => '58.28638900'
	        ],
	        [
		        'id' => 118,
		        'province_id' => 11,
		        'name' => 'خواف',
		        'name_en' => 'khoaf',
		        'latitude' => '34.57638900',
		        'longitude' => '60.14083300'
	        ],
	        [
		        'id' => 119,
		        'province_id' => 11,
		        'name' => 'درگز',
		        'name_en' => 'dargez',
		        'latitude' => '37.44444400',
		        'longitude' => '59.10805600'
	        ],
	        [
		        'id' => 120,
		        'province_id' => 11,
		        'name' => 'رشتخوار',
		        'name_en' => 'reshtkhar',
		        'latitude' => '34.97472200',
		        'longitude' => '59.62361100'
	        ],
	        [
		        'id' => 121,
		        'province_id' => 11,
		        'name' => 'زاوه',
		        'name_en' => 'zaveh',
		        'latitude' => '35.27473220',
		        'longitude' => '59.46777270'
	        ],
	        [
		        'id' => 122,
		        'province_id' => 11,
		        'name' => 'سبزوار',
		        'name_en' => 'sabzevar',
		        'latitude' => '36.21518230',
		        'longitude' => '57.66782280'
	        ],
	        [
		        'id' => 123,
		        'province_id' => 11,
		        'name' => 'سرخس',
		        'name_en' => 'sarakhs',
		        'latitude' => '36.54500000',
		        'longitude' => '61.15777800'
	        ],
	        [
		        'id' => 124,
		        'province_id' => 11,
		        'name' => 'فریمان',
		        'name_en' => 'feriman',
		        'latitude' => '35.70694400',
		        'longitude' => '59.85000000'
	        ],
	        [
		        'id' => 125,
		        'province_id' => 11,
		        'name' => 'قوچان',
		        'name_en' => 'ghochan',
		        'latitude' => '37.10611100',
		        'longitude' => '58.50944400'
	        ],
	        [
		        'id' => 126,
		        'province_id' => 11,
		        'name' => 'طرقبه شاندیز',
		        'name_en' => 'taghobehshandiz',
		        'latitude' => '36.35488410',
		        'longitude' => '59.43839550'
	        ],
	        [
		        'id' => 127,
		        'province_id' => 11,
		        'name' => 'کاشمر',
		        'name_en' => 'kashmer',
		        'latitude' => '35.23833300',
		        'longitude' => '58.46555600'
	        ],
	        [
		        'id' => 128,
		        'province_id' => 11,
		        'name' => 'کلات',
		        'name_en' => 'kalat',
		        'latitude' => '34.19833300',
		        'longitude' => '58.54444400'
	        ],
	        [
		        'id' => 129,
		        'province_id' => 11,
		        'name' => 'گناباد',
		        'name_en' => 'gonabad',
		        'latitude' => '34.35277800',
		        'longitude' => '58.68361100'
	        ],
	        [
		        'id' => 130,
		        'province_id' => 11,
		        'name' => 'مشهد',
		        'name_en' => 'mashhad',
		        'latitude' => '36.26046230',
		        'longitude' => '59.61675490'
	        ],
	        [
		        'id' => 131,
		        'province_id' => 11,
		        'name' => 'مه ولات',
		        'name_en' => 'mahvelat',
		        'latitude' => '35.02108290',
		        'longitude' => '58.78181160'
	        ],
	        [
		        'id' => 132,
		        'province_id' => 11,
		        'name' => 'نیشابور',
		        'name_en' => 'nishabor',
		        'latitude' => '36.21408650',
		        'longitude' => '58.79609150'
	        ],
	        [
		        'id' => 133,
		        'province_id' => 12,
		        'name' => 'اسفراین',
		        'name_en' => 'esrafin',
		        'latitude' => '37.07638900',
		        'longitude' => '57.51000000'
	        ],
	        [
		        'id' => 134,
		        'province_id' => 12,
		        'name' => 'بجنورد',
		        'name_en' => 'bojnord',
		        'latitude' => '37.47500000',
		        'longitude' => '57.33333300'
	        ],
	        [
		        'id' => 135,
		        'province_id' => 12,
		        'name' => 'جاجرم',
		        'name_en' => 'jajrom',
		        'latitude' => '36.95000000',
		        'longitude' => '56.38000000'
	        ],
	        [
		        'id' => 136,
		        'province_id' => 12,
		        'name' => 'شیروان',
		        'name_en' => 'shiravan',
		        'latitude' => '37.40923570',
		        'longitude' => '57.92761840'
	        ],
	        [
		        'id' => 137,
		        'province_id' => 12,
		        'name' => 'فاروج',
		        'name_en' => 'faroj',
		        'latitude' => '37.23111100',
		        'longitude' => '58.21888900'
	        ],
	        [
		        'id' => 138,
		        'province_id' => 12,
		        'name' => 'مانه و سملقان',
		        'name_en' => 'manehvasaloghan',
		        'latitude' => '37.66206140',
		        'longitude' => '56.74120700'
	        ],
	        [
		        'id' => 139,
		        'province_id' => 13,
		        'name' => 'آبادان',
		        'name_en' => 'abadan',
		        'latitude' => '30.34729600',
		        'longitude' => '48.29340040'
	        ],
	        [
		        'id' => 140,
		        'province_id' => 13,
		        'name' => 'امیدیه',
		        'name_en' => 'omideh',
		        'latitude' => '30.74583300',
		        'longitude' => '49.70861100'
	        ],
	        [
		        'id' => 141,
		        'province_id' => 13,
		        'name' => 'اندیمشک',
		        'name_en' => 'andimeshk',
		        'latitude' => '32.46000000',
		        'longitude' => '48.35916700'
	        ],
	        [
		        'id' => 142,
		        'province_id' => 13,
		        'name' => 'اهواز',
		        'name_en' => 'ahvaz',
		        'latitude' => '31.31832720',
		        'longitude' => '48.67061870'
	        ],
	        [
		        'id' => 143,
		        'province_id' => 13,
		        'name' => 'ایذه',
		        'name_en' => 'aizeh',
		        'latitude' => '31.83416700',
		        'longitude' => '49.86722200'
	        ],
	        [
		        'id' => 144,
		        'province_id' => 13,
		        'name' => 'باغ ملک',
		        'name_en' => 'baghmalek',
		        'latitude' => '32.39472060',
		        'longitude' => '51.59653280'
	        ],
	        [
		        'id' => 145,
		        'province_id' => 13,
		        'name' => 'بندرماهشهر',
		        'name_en' => 'bandarmahshar',
		        'latitude' => '30.55888900',
		        'longitude' => '49.19805600'
	        ],
	        [
		        'id' => 146,
		        'province_id' => 13,
		        'name' => 'بهبهان',
		        'name_en' => 'behbahan',
		        'latitude' => '30.59583300',
		        'longitude' => '50.24166700'
	        ],
	        [
		        'id' => 147,
		        'province_id' => 13,
		        'name' => 'خرمشهر',
		        'name_en' => 'khoramshar',
		        'latitude' => '30.42562190',
		        'longitude' => '48.18911850'
	        ],
	        [
		        'id' => 148,
		        'province_id' => 13,
		        'name' => 'دزفول',
		        'name_en' => 'dezfol',
		        'latitude' => '32.38307770',
		        'longitude' => '48.42358410'
	        ],
	        [
		        'id' => 149,
		        'province_id' => 13,
		        'name' => 'دشت آزادگان',
		        'name_en' => 'dashtazadeghan',
		        'latitude' => '31.55805600',
		        'longitude' => '48.18083300'
	        ],
	        [
		        'id' => 150,
		        'province_id' => 13,
		        'name' => 'رامشیر',
		        'name_en' => 'ramshahr',
		        'latitude' => '30.89565210',
		        'longitude' => '49.40947010'
	        ],
	        [
		        'id' => 151,
		        'province_id' => 13,
		        'name' => 'رامهرمز',
		        'name_en' => 'ramhormoz',
		        'latitude' => '31.28000000',
		        'longitude' => '49.60361100'
	        ],
	        [
		        'id' => 152,
		        'province_id' => 13,
		        'name' => 'شادگان',
		        'name_en' => 'shadegan',
		        'latitude' => '30.64972200',
		        'longitude' => '48.66472200'
	        ],
	        [
		        'id' => 153,
		        'province_id' => 13,
		        'name' => 'شوش',
		        'name_en' => 'shosh',
		        'latitude' => '32.19416700',
		        'longitude' => '48.24361100'
	        ],
	        [
		        'id' => 154,
		        'province_id' => 13,
		        'name' => 'شوشتر',
		        'name_en' => 'shoshtar',
		        'latitude' => '32.04555600',
		        'longitude' => '48.85666700'
	        ],
	        [
		        'id' => 155,
		        'province_id' => 13,
		        'name' => 'گتوند',
		        'name_en' => 'gatvand',
		        'latitude' => '32.25138900',
		        'longitude' => '48.81611100'
	        ],
	        [
		        'id' => 156,
		        'province_id' => 13,
		        'name' => 'لالی',
		        'name_en' => 'lali',
		        'latitude' => '32.32888900',
		        'longitude' => '49.09361100'
	        ],
	        [
		        'id' => 157,
		        'province_id' => 13,
		        'name' => 'مسجد سلیمان',
		        'name_en' => 'masjedsoliman',
		        'latitude' => '31.93638900',
		        'longitude' => '49.30388900'
	        ],
	        [
		        'id' => 158,
		        'province_id' => 13,
		        'name' => 'هندیجان',
		        'name_en' => 'handijan',
		        'latitude' => '30.23638900',
		        'longitude' => '49.71194400'
	        ],
	        [
		        'id' => 159,
		        'province_id' => 14,
		        'name' => 'ابهر',
		        'name_en' => 'abhar',
		        'latitude' => '36.14666700',
		        'longitude' => '49.21805600'
	        ],
	        [
		        'id' => 160,
		        'province_id' => 14,
		        'name' => 'ایجرود',
		        'name_en' => 'eijrod',
		        'latitude' => '36.41609280',
		        'longitude' => '48.24692490'
	        ],
	        [
		        'id' => 161,
		        'province_id' => 14,
		        'name' => 'خدابنده',
		        'name_en' => 'khodabandeh',
		        'latitude' => '36.11472200',
		        'longitude' => '48.59111100'
	        ],
	        [
		        'id' => 162,
		        'province_id' => 14,
		        'name' => 'خرمدره',
		        'name_en' => 'khoramdareh',
		        'latitude' => '36.20305600',
		        'longitude' => '49.18694400'
	        ],
	        [
		        'id' => 163,
		        'province_id' => 14,
		        'name' => 'زنجان',
		        'name_en' => 'zanjan',
		        'latitude' => '36.50181850',
		        'longitude' => '48.39881860'
	        ],
	        [
		        'id' => 164,
		        'province_id' => 14,
		        'name' => 'طارم',
		        'name_en' => 'tarom',
		        'latitude' => '28.18042870',
		        'longitude' => '55.74533670'
	        ],
	        [
		        'id' => 165,
		        'province_id' => 14,
		        'name' => 'ماه نشان',
		        'name_en' => 'mahneshan',
		        'latitude' => '36.74444400',
		        'longitude' => '47.67250000'
	        ],
	        [
		        'id' => 166,
		        'province_id' => 15,
		        'name' => 'دامغان',
		        'name_en' => 'damghan',
		        'latitude' => '36.16833300',
		        'longitude' => '54.34805600'
	        ],
	        [
		        'id' => 167,
		        'province_id' => 15,
		        'name' => 'سمنان',
		        'name_en' => 'semnan',
		        'latitude' => '35.22555850',
		        'longitude' => '54.43421380'
	        ],
	        [
		        'id' => 168,
		        'province_id' => 15,
		        'name' => 'شاهرود',
		        'name_en' => 'shahrod',
		        'latitude' => '36.41805600',
		        'longitude' => '54.97638900'
	        ],
	        [
		        'id' => 169,
		        'province_id' => 15,
		        'name' => 'گرمسار',
		        'name_en' => 'ghamsar',
		        'latitude' => '35.21833300',
		        'longitude' => '52.34083300'
	        ],
	        [
		        'id' => 170,
		        'province_id' => 15,
		        'name' => 'مهدی شهر',
		        'name_en' => 'mehdishar',
		        'latitude' => '35.70000000',
		        'longitude' => '53.35000000'
	        ],
	        [
		        'id' => 171,
		        'province_id' => 16,
		        'name' => 'ایرانشهر',
		        'name_en' => 'iranshar',
		        'latitude' => '27.20250000',
		        'longitude' => '60.68472200'
	        ],
	        [
		        'id' => 172,
		        'province_id' => 16,
		        'name' => 'چابهار',
		        'name_en' => 'chabahar',
		        'latitude' => '25.29194400',
		        'longitude' => '60.64305600'
	        ],
	        [
		        'id' => 173,
		        'province_id' => 16,
		        'name' => 'خاش',
		        'name_en' => 'kash',
		        'latitude' => '28.21666700',
		        'longitude' => '61.20000000'
	        ],
	        [
		        'id' => 174,
		        'province_id' => 16,
		        'name' => 'دلگان',
		        'name_en' => 'delgan',
		        'latitude' => '27.60773570',
		        'longitude' => '59.47209040'
	        ],
	        [
		        'id' => 175,
		        'province_id' => 16,
		        'name' => 'زابل',
		        'name_en' => 'zabol',
		        'latitude' => '31.02861100',
		        'longitude' => '61.50111100'
	        ],
	        [
		        'id' => 176,
		        'province_id' => 16,
		        'name' => 'زاهدان',
		        'name_en' => 'zahedan',
		        'latitude' => '29.49638900',
		        'longitude' => '60.86277800'
	        ],
	        [
		        'id' => 177,
		        'province_id' => 16,
		        'name' => 'زهک',
		        'name_en' => 'zahak',
		        'latitude' => '30.89388900',
		        'longitude' => '61.68027800'
	        ],
	        [
		        'id' => 178,
		        'province_id' => 16,
		        'name' => 'سراوان',
		        'name_en' => 'saravan',
		        'latitude' => '27.37083300',
		        'longitude' => '62.33416700'
	        ],
	        [
		        'id' => 179,
		        'province_id' => 16,
		        'name' => 'سرباز',
		        'name_en' => 'sarbaz',
		        'latitude' => '26.63083300',
		        'longitude' => '61.25638900'
	        ],
	        [
		        'id' => 180,
		        'province_id' => 16,
		        'name' => 'کنارک',
		        'name_en' => 'kenarack',
		        'latitude' => '25.36027800',
		        'longitude' => '60.39944400'
	        ],
	        [
		        'id' => 181,
		        'province_id' => 16,
		        'name' => 'نیکشهر',
		        'name_en' => 'nickshar',
		        'latitude' => '26.41847190',
		        'longitude' => '60.21107520'
	        ],
	        [
		        'id' => 182,
		        'province_id' => 17,
		        'name' => 'آباده',
		        'name_en' => 'abadeh',
		        'latitude' => '31.16083300',
		        'longitude' => '52.65055600'
	        ],
	        [
		        'id' => 183,
		        'province_id' => 17,
		        'name' => 'ارسنجان',
		        'name_en' => 'arsangan',
		        'latitude' => '29.91250000',
		        'longitude' => '53.30861100'
	        ],
	        [
		        'id' => 184,
		        'province_id' => 17,
		        'name' => 'استهبان',
		        'name_en' => 'sehban',
		        'latitude' => '29.12666700',
		        'longitude' => '54.04222200'
	        ],
	        [
		        'id' => 185,
		        'province_id' => 17,
		        'name' => 'اقلید',
		        'name_en' => 'eghlid',
		        'latitude' => '30.89888900',
		        'longitude' => '52.68666700'
	        ],  [
		        'id' => 186,
		        'province_id' => 17,
		        'name' => 'بوانات',
		        'name_en' => 'boanat',
		        'latitude' => '30.48559070',
		        'longitude' => '53.59333040'
	        ],
	        [
		        'id' => 187,
		        'province_id' => 17,
		        'name' => 'پاسارگاد',
		        'name_en' => 'pasargad',
		        'latitude' => '30.20330750',
		        'longitude' => '53.17901000'
	        ],  [
		        'id' => 188,
		        'province_id' => 17,
		        'name' => 'جهرم',
		        'name_en' => 'gahrom',
		        'latitude' => '28.50000000',
		        'longitude' => '53.56055600'
	        ],
	        [
		        'id' => 189,
		        'province_id' => 17,
		        'name' => 'خرم بید',
		        'name_en' => 'khorambid',
		        'latitude' => '32.67083450',
		        'longitude' => '51.64702790'
	        ],
	        [
		        'id' => 190,
		        'province_id' => 17,
		        'name' => 'خنج',
		        'name_en' => 'khenj',
		        'latitude' => '27.89138900',
		        'longitude' => '53.43444400'
	        ],
	        [
		        'id' => 191,
		        'province_id' => 17,
		        'name' => 'داراب',
		        'name_en' => 'darab',
		        'latitude' => '28.75194400',
		        'longitude' => '54.54444400'
	        ],
	        [
		        'id' => 192,
		        'province_id' => 17,
		        'name' => 'زرین دشت',
		        'name_en' => 'zarindasht',
		        'latitude' => '28.35450470',
		        'longitude' => '54.41780060'
	        ],
	        [
		        'id' => 193,
		        'province_id' => 17,
		        'name' => 'سپیدان',
		        'name_en' => 'sipidan',
		        'latitude' => '30.24252820',
		        'longitude' => '51.99241850'
	        ],
	        [
		        'id' => 194,
		        'province_id' => 17,
		        'name' => 'شیراز',
		        'name_en' => 'shiraz',
		        'latitude' => '29.59176770',
		        'longitude' => '52.58369820'
	        ],
	        [
		        'id' => 195,
		        'province_id' => 17,
		        'name' => 'فراشبند',
		        'name_en' => 'farashbnad',
		        'latitude' => '28.87138900',
		        'longitude' => '52.09166700'
	        ],
	        [
		        'id' => 196,
		        'province_id' => 17,
		        'name' => 'فسا',
		        'name_en' => 'fasa',
		        'latitude' => '28.93833300',
		        'longitude' => '53.64833300'
	        ],
	        [
		        'id' => 197,
		        'province_id' => 17,
		        'name' => 'فیروزآباد',
		        'name_en' => 'firozabad',
		        'latitude' => '28.84388900',
		        'longitude' => '52.57083300'
	        ],
	        [
		        'id' => 198,
		        'province_id' => 17,
		        'name' => 'قیر و کارزین',
		        'name_en' => 'ghir,karezin',
		        'latitude' => '28.42998000',
		        'longitude' => '53.09516000'
	        ],
	        [
		        'id' => 199,
		        'province_id' => 17,
		        'name' => 'کازرون',
		        'name_en' => 'kazeron',
		        'latitude' => '29.61944400',
		        'longitude' => '51.65416700'
	        ],
	        [
		        'id' => 200,
		        'province_id' => 17,
		        'name' => 'لارستان',
		        'name_en' => 'larestan',
		        'latitude' => '27.68111100',
		        'longitude' => '54.34027800'
	        ],
	        [
		        'id' => 201,
		        'province_id' => 17,
		        'name' => 'لامرد',
		        'name_en' => 'lamord',
		        'latitude' => '27.34237710',
		        'longitude' => '53.18035580'
	        ],
	        [
		        'id' => 202,
		        'province_id' => 17,
		        'name' => 'مرودشت',
		        'name_en' => 'marvdasht',
		        'latitude' => '29.87416700',
		        'longitude' => '52.80250000'
	        ],
	        [
		        'id' => 203,
		        'province_id' => 17,
		        'name' => 'ممسنی',
		        'name_en' => 'momseni',
		        'latitude' => '31.96003450',
		        'longitude' => '50.51226520'
	        ],
	        [
		        'id' => 204,
		        'province_id' => 17,
		        'name' => 'مهر',
		        'name_en' => 'mehr',
		        'latitude' => '27.55599310',
		        'longitude' => '52.88472050'
	        ],
	        [
		        'id' => 205,
		        'province_id' => 17,
		        'name' => 'نی ریز',
		        'name_en' => 'neiriz',
		        'latitude' => '29.19888900',
		        'longitude' => '54.32777800'
	        ],
	        [
		        'id' => 206,
		        'province_id' => 18,
		        'name' => 'آبیک',
		        'name_en' => 'abyek',
		        'latitude' => '36.04000000',
		        'longitude' => '50.53111100'
	        ],[
		        'id' => 207,
		        'province_id' => 18,
		        'name' => 'البرز',
		        'name_en' => 'alborz',
		        'latitude' => '35.99604670',
		        'longitude' => '50.92892460'
	        ],
	        [
		        'id' => 208,
		        'province_id' => 18,
		        'name' => 'بوئین زهرا',
		        'name_en' => 'booenzahra',
		        'latitude' => '35.76694400',
		        'longitude' => '50.05777800'
	        ],
	        [
		        'id' => 209,
		        'province_id' => 18,
		        'name' => 'تاکستان',
		        'name_en' => 'takestan',
		        'latitude' => '36.06972200',
		        'longitude' => '49.69583300'
	        ],
	        [
		        'id' => 210,
		        'province_id' => 18,
		        'name' => 'قزوین',
		        'name_en' => 'ghzvin',
		        'latitude' => '36.08813170',
		        'longitude' => '49.85472660'
	        ],
	        [
		        'id' => 211,
		        'province_id' => 19,
		        'name' => 'قم',
		        'name_en' => 'ghom',
		        'latitude' => '34.63994430',
		        'longitude' => '50.87594190'
	        ],
	        [
		        'id' => 212,
		        'province_id' => 20,
		        'name' => 'بانه',
		        'name_en' => 'baneh',
		        'latitude' => '35.99859990',
		        'longitude' => '45.88234280'
	        ],
	        [
		        'id' => 213,
		        'province_id' => 20,
		        'name' => 'بیجار',
		        'name_en' => 'bijar',
		        'latitude' => '32.73527800',
		        'longitude' => '59.46666700'
	        ],
	        [
		        'id' => 214,
		        'province_id' => 20,
		        'name' => 'دیواندره',
		        'name_en' => 'divandareh',
		        'latitude' => '35.91388900',
		        'longitude' => '47.02388900'
	        ],
	        [
		        'id' => 215,
		        'province_id' => 20,
		        'name' => 'سروآباد',
		        'name_en' => 'savabad',
		        'latitude' => '35.31250000',
		        'longitude' => '46.36694400'
	        ],
	        [
		        'id' => 216,
		        'province_id' => 20,
		        'name' => 'سقز',
		        'name_en' => 'saghez',
		        'latitude' => '36.24638900',
		        'longitude' => '46.26638900'
	        ],
	        [
		        'id' => 217,
		        'province_id' => 20,
		        'name' => 'سنندج',
		        'name_en' => 'sanndaj',
		        'latitude' => '35.32187480',
		        'longitude' => '46.98616470'
	        ],
	        [
		        'id' => 218,
		        'province_id' => 20,
		        'name' => 'قروه',
		        'name_en' => 'ghorveh',
		        'latitude' => '35.16789340',
		        'longitude' => '47.80382720'
	        ],
	        [
		        'id' => 219,
		        'province_id' => 20,
		        'name' => 'کامیاران',
		        'name_en' => 'kamyaran',
		        'latitude' => '34.79555600',
		        'longitude' => '46.93555600'
	        ],
	        [
		        'id' => 220,
		        'province_id' => 20,
		        'name' => 'مریوان',
		        'name_en' => 'marivan',
		        'latitude' => '35.52694400',
		        'longitude' => '46.17638900'
	        ],
	        [
		        'id' => 221,
		        'province_id' => 21,
		        'name' => 'بافت',
		        'name_en' => 'baft',
		        'latitude' => '29.23305600',
		        'longitude' => '56.60222200'
	        ],
	        [
		        'id' => 222,
		        'province_id' => 21,
		        'name' => 'بردسیر',
		        'name_en' => 'bordsir',
		        'latitude' => '29.92750000',
		        'longitude' => '56.57222200'
	        ],
	        [
		        'id' => 223,
		        'province_id' => 21,
		        'name' => 'بم',
		        'name_en' => 'bam',
		        'latitude' => '29.10611100',
		        'longitude' => '58.35694400'
	        ],
	        [
		        'id' => 224,
		        'province_id' => 21,
		        'name' => 'جیرفت',
		        'name_en' => 'jiroft',
		        'latitude' => '28.67511240',
		        'longitude' => '57.73715690'
	        ],
	        [
		        'id' => 225,
		        'province_id' => 21,
		        'name' => 'راور',
		        'name_en' => 'ravar',
		        'latitude' => '31.26555600',
		        'longitude' => '56.80555600'
	        ],
	        [
		        'id' => 226,
		        'province_id' => 21,
		        'name' => 'رفسنجان',
		        'name_en' => 'rafsanjan',
		        'latitude' => '30.40666700',
		        'longitude' => '55.99388900'
	        ],
	        [
		        'id' => 227,
		        'province_id' => 21,
		        'name' => 'رودبار جنوب',
		        'name_en' => 'rodbarjonob',
		        'latitude' => '36.82412890',
		        'longitude' => '49.42372740'
	        ],
	        [
		        'id' => 228,
		        'province_id' => 21,
		        'name' => 'زرند',
		        'name_en' => 'zarand',
		        'latitude' => '30.81277800',
		        'longitude' => '56.56388900'
	        ],
	        [
		        'id' => 229,
		        'province_id' => 21,
		        'name' => 'سیرجان',
		        'name_en' => 'sirjan',
		        'latitude' => '29.45866760',
		        'longitude' => '55.67140510'
	        ],
	        [
		        'id' => 230,
		        'province_id' => 21,
		        'name' => 'شهر بابک',
		        'name_en' => 'sharbabak',
		        'latitude' => '30.11638900',
		        'longitude' => '55.11861100'
	        ],
	        [
		        'id' => 231,
		        'province_id' => 21,
		        'name' => 'عنبرآباد',
		        'name_en' => 'anbarabad',
		        'latitude' => '28.47833330',
		        'longitude' => '57.84138890'
	        ],
	        [
		        'id' => 232,
		        'province_id' => 21,
		        'name' => 'قلعه گنج',
		        'name_en' => 'ghaleganj',
		        'latitude' => '27.52361100',
		        'longitude' => '57.88111100'
	        ],
	        [
		        'id' => 233,
		        'province_id' => 21,
		        'name' => 'کرمان',
		        'name_en' => 'kerman',
		        'latitude' => '29.48500890',
		        'longitude' => '57.64390480'
	        ],
	        [
		        'id' => 234,
		        'province_id' => 21,
		        'name' => 'کوهبنان',
		        'name_en' => 'kohbanan',
		        'latitude' => '31.41027800',
		        'longitude' => '56.28250000'
	        ],
	        [
		        'id' => 235,
		        'province_id' => 21,
		        'name' => 'کهنوج',
		        'name_en' => 'kahnoj',
		        'latitude' => '27.94676030',
		        'longitude' => '57.70625720'
	        ],
	        [
		        'id' => 236,
		        'province_id' => 21,
		        'name' => 'منوجان',
		        'name_en' => 'manojan',
		        'latitude' => '27.44756260',
		        'longitude' => '57.50516160'
	        ],
	        [
		        'id' => 237,
		        'province_id' => 22,
		        'name' => 'اسلام آباد غرب',
		        'name_en' => 'eslamabdgharb',
		        'latitude' => '33.72938820',
		        'longitude' => '73.09314610'
	        ],
	        [
		        'id' => 238,
		        'province_id' => 22,
		        'name' => 'پاوه',
		        'name_en' => 'paveh',
		        'latitude' => '35.04333300',
		        'longitude' => '46.35638900'
	        ],
	        [
		        'id' => 239,
		        'province_id' => 22,
		        'name' => 'ثلاث باباجانی',
		        'name_en' => 'salasbabajani',
		        'latitude' => '34.73583710',
		        'longitude' => '46.14939690'
	        ],
	        [
		        'id' => 240,
		        'province_id' => 22,
		        'name' => 'جوانرود',
		        'name_en' => 'javanrod',
		        'latitude' => '34.80666700',
		        'longitude' => '46.48861100'
	        ],
	        [
		        'id' => 241,
		        'province_id' => 22,
		        'name' => 'دالاهو',
		        'name_en' => 'dalaho',
		        'latitude' => '34.28416700',
		        'longitude' => '46.24222200'
	        ],
	        [
		        'id' => 242,
		        'province_id' => 22,
		        'name' => 'روانسر',
		        'name_en' => 'ravansar',
		        'latitude' => '34.71208920',
		        'longitude' => '46.65129980'
	        ],
	        [
		        'id' => 243,
		        'province_id' => 22,
		        'name' => 'سرپل ذهاب',
		        'name_en' => 'sarpolzahab',
		        'latitude' => '34.46111100',
		        'longitude' => '45.86277800'
	        ],
	        [
		        'id' => 244,
		        'province_id' => 22,
		        'name' => 'سنقر',
		        'name_en' => 'songhor',
		        'latitude' => '34.78361100',
		        'longitude' => '47.60027800'
	        ],
	        [
		        'id' => 245,
		        'province_id' => 22,
		        'name' => 'صحنه',
		        'name_en' => 'sahneh',
		        'latitude' => '34.48138900',
		        'longitude' => '47.69083300'
	        ],
	        [
		        'id' => 246,
		        'province_id' => 22,
		        'name' => 'قصر شیرین',
		        'name_en' => 'ghasershirin',
		        'latitude' => '34.51590310',
		        'longitude' => '45.57768590'
	        ],
	        [
		        'id' => 247,
		        'province_id' => 22,
		        'name' => 'کرمانشاه',
		        'name_en' => 'kermanshah',
		        'latitude' => '34.45762330',
		        'longitude' => '46.67053400'
	        ],
	        [
		        'id' => 248,
		        'province_id' => 22,
		        'name' => 'کنگاور',
		        'name_en' => 'kangavar',
		        'latitude' => '34.50416700',
		        'longitude' => '47.96527800'
	        ],
	        [
		        'id' => 249,
		        'province_id' => 22,
		        'name' => 'گیلان غرب',
		        'name_en' => 'ghilangharb',
		        'latitude' => '34.14222200',
		        'longitude' => '45.92027800'
	        ],
	        [
		        'id' => 250,
		        'province_id' => 22,
		        'name' => 'هرسین',
		        'name_en' => 'harsin',
		        'latitude' => '34.27191490',
		        'longitude' => '47.60461830'
	        ],
	        [
		        'id' => 251,
		        'province_id' => 23,
		        'name' => 'بویر احمد',
		        'name_en' => 'boyerahmad',
		        'latitude' => '30.72458600',
		        'longitude' => '50.84563230'
	        ],
	        [
		        'id' => 252,
		        'province_id' => 23,
		        'name' => 'بهمئی',
		        'name_en' => 'bahmaye',
		        'latitude' => 'null',
		        'longitude' => 'null'
	        ],
	        [
		        'id' => 253,
		        'province_id' => 23,
		        'name' => 'دنا',
		        'name_en' => 'dena',
		        'latitude' => '30.95166660',
		        'longitude' => '51.43750000'
	        ],
	        [
		        'id' => 254,
		        'province_id' => 23,
		        'name' => 'کهگیلویه',
		        'name_en' => 'kohghiloye',
		        'latitude' => 'null',
		        'longitude' => 'null'
	        ],
	        [
		        'id' => 255,
		        'province_id' => 23,
		        'name' => 'گچساران',
		        'name_en' => 'gachsaran',
		        'latitude' => '30.35000000',
		        'longitude' => '50.80000000'
	        ],
	        [
		        'id' => 256,
		        'province_id' => 24,
		        'name' => 'آزادشهر',
		        'name_en' => 'azadshar',
		        'latitude' => '37.08694400',
		        'longitude' => '55.17388900'
	        ],
	        [
		        'id' => 257,
		        'province_id' => 24,
		        'name' => ' آق قلا',
		        'name_en' => 'aghghela',
		        'latitude' => '37.01388900',
		        'longitude' => '54.45500000'
	        ],
	        [
		        'id' => 258,
		        'province_id' => 24,
		        'name' => 'بندر گز',
		        'name_en' => 'bandarghaz',
		        'latitude' => '36.77496500',
		        'longitude' => '53.94617490'
	        ],
	        [
		        'id' => 259,
		        'province_id' => 24,
		        'name' => 'بندر ترکمن',
		        'name_en' => 'bandartorkaman',
		        'latitude' => '36.90166700',
		        'longitude' => '54.07083300'
	        ],
	        [
		        'id' => 260,
		        'province_id' => 24,
		        'name' => 'رامیان',
		        'name_en' => 'ramyan',
		        'latitude' => '37.01611100',
		        'longitude' => '55.14111100'
	        ],
	        [
		        'id' => 261,
		        'province_id' => 24,
		        'name' => 'علی آباد',
		        'name_en' => 'aliabad',
		        'latitude' => '36.30822600',
		        'longitude' => '74.61954740'
	        ],
	        [
		        'id' => 262,
		        'province_id' => 24,
		        'name' => 'کرد کوی',
		        'name_en' => 'kordkoi',
		        'latitude' => '36.79414260',
		        'longitude' => '54.11027400'
	        ],
	        [
		        'id' => 263,
		        'province_id' => 24,
		        'name' => 'کلاله',
		        'name_en' => 'kalaleh',
		        'latitude' => '37.38083300',
		        'longitude' => '55.49166700'
	        ],
	        [
		        'id' => 264,
		        'province_id' => 24,
		        'name' => 'گرگان',
		        'name_en' => 'gorgan',
		        'latitude' => '36.84564270',
		        'longitude' => '54.43933630'
	        ],
	        [
		        'id' => 265,
		        'province_id' => 24,
		        'name' => 'گنبد کاووس',
		        'name_en' => 'gonbadkavos',
		        'latitude' => '37.25000000',
		        'longitude' => '55.16722200'
	        ],
	        [
		        'id' => 266,
		        'province_id' => 24,
		        'name' => 'مینو دشت',
		        'name_en' => 'minodasht',
		        'latitude' => '37.22888900',
		        'longitude' => '55.37472200'
	        ],
	        [
		        'id' => 267,
		        'province_id' => 25,
		        'name' => 'آستارا',
		        'name_en' => 'astara',
		        'latitude' => '38.42916700',
		        'longitude' => '48.87194400'
	        ],
	        [
		        'id' => 268,
		        'province_id' => 25,
		        'name' => 'آستانه اشرفیه',
		        'name_en' => 'astanehashafieh',
		        'latitude' => '37.25980220',
		        'longitude' => '49.94366210'
	        ],
	        [
		        'id' => 269,
		        'province_id' => 25,
		        'name' => 'املش',
		        'name_en' => 'amlesh',
		        'latitude' => '37.09163340',
		        'longitude' => '50.18693770'
	        ],
	        [
		        'id' => 270,
		        'province_id' => 25,
		        'name' => 'بندر انزلی',
		        'name_en' => 'bandaranzali',
		        'latitude' => '37.47244670',
		        'longitude' => '49.45873120'
	        ],
	        [
		        'id' => 271,
		        'province_id' => 25,
		        'name' => 'رشت',
		        'name_en' => 'rasht',
		        'latitude' => '37.28083300',
		        'longitude' => '49.58305600'
	        ],
	        [
		        'id' => 272,
		        'province_id' => 25,
		        'name' => 'رضوانشهر',
		        'name_en' => 'rezvanshahr',
		        'latitude' => '37.55067500',
		        'longitude' => '49.14098010'
	        ],
	        [
		        'id' => 273,
		        'province_id' => 25,
		        'name' => 'رودبار',
		        'name_en' => 'rodbar',
		        'latitude' => '36.82412890',
		        'longitude' => '49.42372740'
	        ],
	        [
		        'id' => 274,
		        'province_id' => 25,
		        'name' => 'رودسر',
		        'name_en' => 'rodsar',
		        'latitude' => '37.13784150',
		        'longitude' => '50.28361990'
	        ],
	        [
		        'id' => 275,
		        'province_id' => 25,
		        'name' => 'سیاهکل',
		        'name_en' => 'sihkel',
		        'latitude' => '37.15277800',
		        'longitude' => '49.87083300'
	        ],
	        [
		        'id' => 276,
		        'province_id' => 25,
		        'name' => 'شفت',
		        'name_en' => 'sheft',
		        'latitude' => '39.63063100',
		        'longitude' => '78.92954200'
	        ],
	        [
		        'id' => 277,
		        'province_id' => 25,
		        'name' => 'صومعه سرا',
		        'name_en' => 'somehesara',
		        'latitude' => '37.31166700',
		        'longitude' => '49.32194400'
	        ],
	        [
		        'id' => 278,
		        'province_id' => 25,
		        'name' => 'طوالش',
		        'name_en' => 'tavalesh',
		        'latitude' => '37.00000000',
		        'longitude' => '48.42222220'
	        ],
	        [
		        'id' => 279,
		        'province_id' => 25,
		        'name' => 'فومن',
		        'name_en' => 'foman',
		        'latitude' => '37.22388900',
		        'longitude' => '49.31250000'
	        ],
	        [
		        'id' => 280,
		        'province_id' => 25,
		        'name' => 'لاهیجان',
		        'name_en' => 'lahijan',
		        'latitude' => '37.20722200',
		        'longitude' => '50.00388900'
	        ],
	        [
		        'id' => 281,
		        'province_id' => 25,
		        'name' => 'لنگرود',
		        'name_en' => 'langerod',
		        'latitude' => '37.19694400',
		        'longitude' => '50.15361100'
	        ],
	        [
		        'id' => 282,
		        'province_id' => 25,
		        'name' => 'ماسال',
		        'name_en' => 'masal',
		        'latitude' => '37.36211850',
		        'longitude' => '49.13147690'
	        ],
	        [
		        'id' => 283,
		        'province_id' => 26,
		        'name' => 'ازنا',
		        'name_en' => 'azana',
		        'latitude' => '33.45583300',
		        'longitude' => '49.45555600'
	        ],
	        [
		        'id' => 284,
		        'province_id' => 26,
		        'name' => 'الیگودرز',
		        'name_en' => 'aligodarz',
		        'latitude' => '33.40055600',
		        'longitude' => '49.69500000'
	        ],
	        [
		        'id' => 285,
		        'province_id' => 26,
		        'name' => 'بروجرد',
		        'name_en' => 'brojerd',
		        'latitude' => '33.89419930',
		        'longitude' => '48.76703300'
	        ],
	        [
		        'id' => 286,
		        'province_id' => 26,
		        'name' => 'پلدختر',
		        'name_en' => 'poldokhtar',
		        'latitude' => '33.15361100',
		        'longitude' => '47.71361100'
	        ],
	        [
		        'id' => 287,
		        'province_id' => 26,
		        'name' => 'خرم آباد',
		        'name_en' => 'khoramabad',
		        'latitude' => '33.48777800',
		        'longitude' => '48.35583300'
	        ],
	        [
		        'id' => 288,
		        'province_id' => 26,
		        'name' => 'دورود',
		        'name_en' => 'dorood',
		        'latitude' => '33.49550280',
		        'longitude' => '49.06317430'
	        ],
	        [
		        'id' => 377,
		        'province_id' => 26,
		        'name' => 'دلفان',
		        'name_en' => 'delghan',
		        'latitude' => '33.50340140',
		        'longitude' => '48.35758360'
	        ],
	        [
		        'id' => 378,
		        'province_id' => 26,
		        'name' => 'سلسله',
		        'name_en' => 'selseleh',
		        'latitude' => '32.04577600',
		        'longitude' => '34.75163900'
	        ],
	        [
		        'id' => 379,
		        'province_id' => 27,
		        'name' => 'کوهدشت',
		        'name_en' => 'kohdasht',
		        'latitude' => '33.53500000',
		        'longitude' => '47.60611100'
	        ],
	        [
		        'id' => 380,
		        'province_id' => 26,
		        'name' => 'الشتر',
		        'name_en' => 'alshtar',
		        'latitude' => '33.86398880',
		        'longitude' => '48.26423870'
	        ],
	        [
		        'id' => 381,
		        'province_id' => 26,
		        'name' => 'نورآباد',
		        'name_en' => 'norabad',
		        'latitude' => '30.11416700',
		        'longitude' => '51.52166700'
	        ],
	        [
		        'id' => 382,
		        'province_id' => 27,
		        'name' => 'آمل',
		        'name_en' => 'amol',
		        'latitude' => '36.46972200',
		        'longitude' => '52.35083300'
	        ],
	        [
		        'id' => 383,
		        'province_id' => 27,
		        'name' => 'بابل',
		        'name_en' => 'babol',
		        'latitude' => '32.46819100',
		        'longitude' => '44.55019350'
	        ],
	        [
		        'id' => 384,
		        'province_id' => 27,
		        'name' => 'بابلسر',
		        'name_en' => 'baboolsar',
		        'latitude' => '36.70250000',
		        'longitude' => '52.65750000'
	        ],
	        [
		        'id' => 385,
		        'province_id' => 27,
		        'name' => 'بهشهر',
		        'name_en' => 'behsah',
		        'latitude' => '36.69222200',
		        'longitude' => '53.55250000'
	        ],
	        [
		        'id' => 386,
		        'province_id' => 27,
		        'name' => 'تنکابن',
		        'name_en' => 'tonokabon',
		        'latitude' => '36.81638900',
		        'longitude' => '50.87388900'
	        ],
	        [
		        'id' => 387,
		        'province_id' => 27,
		        'name' => 'جویبار',
		        'name_en' => 'jooybar',
		        'latitude' => '36.64111100',
		        'longitude' => '52.91250000'
	        ],
	        [
		        'id' => 388,
		        'province_id' => 27,
		        'name' => 'چالوس',
		        'name_en' => 'chalos',
		        'latitude' => '36.64591740',
		        'longitude' => '51.40697900'
	        ],
	        [
		        'id' => 389,
		        'province_id' => 27,
		        'name' => 'رامسر',
		        'name_en' => 'ramsar',
		        'latitude' => '36.90305600',
		        'longitude' => '50.65833300'
	        ],
	        [
		        'id' => 390,
		        'province_id' => 27,
		        'name' => 'ساری',
		        'name_en' => 'sari',
		        'latitude' => '36.56333300',
		        'longitude' => '53.06000000'
	        ],
	        [
		        'id' => 391,
		        'province_id' => 27,
		        'name' => 'سوادکوه',
		        'name_en' => 'savadkoh',
		        'latitude' => '36.30402550',
		        'longitude' => '52.88524030'
	        ],  [
		        'id' => 392,
		        'province_id' => 27,
		        'name' => 'قائم شهر',
		        'name_en' => 'ghaemshar',
		        'latitude' => '36.46305600',
		        'longitude' => '52.86000000'
	        ],
	        [
		        'id' => 393,
		        'province_id' => 27,
		        'name' => 'گلوگاه',
		        'name_en' => 'galoghah',
		        'latitude' => '36.72722200',
		        'longitude' => '53.80888900'
	        ],
	        [
		        'id' => 394,
		        'province_id' => 27,
		        'name' => 'محمود آباد',
		        'name_en' => 'mahmoodabad',
		        'latitude' => '36.63194400',
		        'longitude' => '52.26277800'
	        ],
	        [
		        'id' => 395,
		        'province_id' => 27,
		        'name' => 'نکا',
		        'name_en' => 'neka',
		        'latitude' => '36.65083300',
		        'longitude' => '53.29916700'
	        ],  [
		        'id' => 396,
		        'province_id' => 27,
		        'name' => 'نور',
		        'name_en' => 'noor',
		        'latitude' => '50.38512460',
		        'longitude' => '3.26424360'
	        ],
	        [
		        'id' => 397,
		        'province_id' => 27,
		        'name' => 'نوشهر',
		        'name_en' => 'noshahr',
		        'latitude' => '36.64888900',
		        'longitude' => '51.49611100'
	        ],
	        [
		        'id' => 398,
		        'province_id' => 27,
		        'name' => 'فریدونکنار',
		        'name_en' => 'fridoonkenar',
		        'latitude' => '36.68638900',
		        'longitude' => '52.52250000'
	        ],
	        [
		        'id' => 399,
		        'province_id' => 28,
		        'name' => 'آشتیان',
		        'name_en' => 'ahtyan',
		        'latitude' => '34.52194400',
		        'longitude' => '50.00611100'
	        ],
	        [
		        'id' => 400,
		        'province_id' => 28,
		        'name' => 'اراک',
		        'name_en' => 'arak',
		        'latitude' => '34.09166700',
		        'longitude' => '49.68916700'
	        ],
	        [
		        'id' => 401,
		        'province_id' => 28,
		        'name' => 'تفرش',
		        'name_en' => 'tafarosh',
		        'latitude' => '34.69194400',
		        'longitude' => '50.01305600'
	        ],
	        [
		        'id' => 402,
		        'province_id' => 28,
		        'name' => 'خمین',
		        'name_en' => 'khomin',
		        'latitude' => '33.64061480',
		        'longitude' => '50.07711250'
	        ],
	        [
		        'id' => 403,
		        'province_id' => 28,
		        'name' => 'دلیجان',
		        'name_en' => 'delijan',
		        'latitude' => '33.99055600',
		        'longitude' => '50.68388900'
	        ],
	        [
		        'id' => 404,
		        'province_id' => 28,
		        'name' => 'زرندیه',
		        'name_en' => 'zarandieh',
		        'latitude' => '35.30699620',
		        'longitude' => '50.49117920'
	        ],
	        [
		        'id' => 405,
		        'province_id' => 28,
		        'name' => 'ساوه',
		        'name_en' => 'saveh',
		        'latitude' => '35.02138900',
		        'longitude' => '50.35666700'
	        ],
	        [
		        'id' => 406,
		        'province_id' => 28,
		        'name' => 'شازند',
		        'name_en' => 'shazland',
		        'latitude' => '33.92750000',
		        'longitude' => '49.41166700'
	        ],
	        [
		        'id' => 407,
		        'province_id' => 28,
		        'name' => 'کمیجان',
		        'name_en' => 'kimyajan',
		        'latitude' => '34.71916700',
		        'longitude' => '49.32666700'
	        ],
	        [
		        'id' => 408,
		        'province_id' => 28,
		        'name' => 'محلات',
		        'name_en' => 'mahalat',
		        'latitude' => '33.90857480',
		        'longitude' => '50.45526160'
	        ], [
		        'id' => 409,
		        'province_id' => 29,
		        'name' => 'بندرعباس',
		        'name_en' => 'bandarabas',
		        'latitude' => '27.18322160',
		        'longitude' => '56.26664550'
	        ], [
		        'id' => 410,
		        'province_id' => 29,
		        'name' => 'میناب',
		        'name_en' => 'minab',
		        'latitude' => '27.14666700',
		        'longitude' => '57.08000000'
	        ],
	        [
		        'id' => 411,
		        'province_id' => 29,
		        'name' => 'بندر لنگه',
		        'name_en' => 'bandarlengeh',
		        'latitude' => '26.55805600',
		        'longitude' => '54.88055600'
	        ], [
		        'id' => 412,
		        'province_id' => 29,
		        'name' => 'رودان-دهبارز',
		        'name_en' => 'rodrandehbaz',
		        'latitude' => '27.44083300',
		        'longitude' => '57.19250000'
	        ], [
		        'id' => 413,
		        'province_id' => 29,
		        'name' => 'جاسک',
		        'name_en' => 'jask',
		        'latitude' => '25.64388900',
		        'longitude' => '57.77444400'
	        ],
	        [
		        'id' => 414,
		        'province_id' => 29,
		        'name' => 'قشم',
		        'name_en' => 'gheshm',
		        'latitude' => '26.81186730',
		        'longitude' => '55.89132070'
	        ],
	        [
		        'id' => 415,
		        'province_id' => 29,
		        'name' => 'حاجی آباد',
		        'name_en' => 'hajiabad',
		        'latitude' => '28.30916700',
		        'longitude' => '55.90166700'
	        ],
	        [
		        'id' => 416,
		        'province_id' => 29,
		        'name' => 'ابوموسی',
		        'name_en' => 'abomasa',
		        'latitude' => '25.87971060',
		        'longitude' => '55.03280170'
	        ],
	        [
		        'id' => 417,
		        'province_id' => 29,
		        'name' => 'بستک',
		        'name_en' => 'bastak',
		        'latitude' => '27.19916700',
		        'longitude' => '54.36666700'
	        ],
	        [
		        'id' => 418,
		        'province_id' => 29,
		        'name' => 'گاوبندی',
		        'name_en' => 'gavbandi',
		        'latitude' => '27.20833300',
		        'longitude' => '53.03611100'
	        ],
	        [
		        'id' => 419,
		        'province_id' => 29,
		        'name' => 'خمیر',
		        'name_en' => 'khomir',
		        'latitude' => '26.95222200',
		        'longitude' => '55.58500000'
	        ],
	        [
		        'id' => 420,
		        'province_id' => 30,
		        'name' => 'اسدآباد',
		        'name_en' => 'asadabad',
		        'latitude' => '34.78250000',
		        'longitude' => '48.11861100'
	        ],
	        [
		        'id' => 421,
		        'province_id' => 30,
		        'name' => 'بهار',
		        'name_en' => 'bahar',
		        'latitude' => '34.90832520',
		        'longitude' => '48.43927290'
	        ],
	        [
		        'id' => 422,
		        'province_id' => 30,
		        'name' => 'تویسرکان',
		        'name_en' => 'toyserkan',
		        'latitude' => '34.54805600',
		        'longitude' => '48.44694400'
	        ],
	        [
		        'id' => 423,
		        'province_id' => 30,
		        'name' => 'رزن',
		        'name_en' => 'razan',
		        'latitude' => '35.38666700',
		        'longitude' => '49.03388900'
	        ],
	        [
		        'id' => 424,
		        'province_id' => 30,
		        'name' => 'کبودر آهنگ',
		        'name_en' => 'kabotarahang',
		        'latitude' => '35.20833300',
		        'longitude' => '48.72388900'
	        ],
	        [
		        'id' => 425,
		        'province_id' => 30,
		        'name' => 'ملایر',
		        'name_en' => 'malayer',
		        'latitude' => '34.29694400',
		        'longitude' => '48.82361100'
	        ],
	        [
		        'id' => 426,
		        'province_id' => 30,
		        'name' => 'نهاوند',
		        'name_en' => 'nahavand',
		        'latitude' => '34.18861100',
		        'longitude' => '48.37694400'
	        ],
	        [
		        'id' => 427,
		        'province_id' => 30,
		        'name' => 'همدان',
		        'name_en' => 'hamedan',
		        'latitude' => '34.76079990',
		        'longitude' => '48.39881860'
	        ],
	        [
		        'id' => 428,
		        'province_id' => 31,
		        'name' => 'ابرکوه',
		        'name_en' => 'abarkoh',
		        'latitude' => '31.13040360',
		        'longitude' => '53.25037360'
	        ],
	        [
		        'id' => 429,
		        'province_id' => 31,
		        'name' => 'اردکان',
		        'name_en' => 'ardakan',
		        'latitude' => '32.31000000',
		        'longitude' => '54.01750000'
	        ],
	        [
		        'id' => 430,
		        'province_id' => 31,
		        'name' => 'بافق',
		        'name_en' => 'bafgh',
		        'latitude' => '31.61277800',
		        'longitude' => '55.41055600'
	        ],
	        [
		        'id' => 431,
		        'province_id' => 31,
		        'name' => 'تفت',
		        'name_en' => 'taft',
		        'latitude' => '27.97890740',
		        'longitude' => '97.39860410'
	        ],
	        [
		        'id' => 432,
		        'province_id' => 31,
		        'name' => 'خاتم',
		        'name_en' => 'khatam',
		        'latitude' => '37.27091520',
		        'longitude' => '49.59691460'
	        ],
	        [
		        'id' => 433,
		        'province_id' => 31,
		        'name' => 'صدوق',
		        'name_en' => 'sadogh',
		        'latitude' => '32.02421620',
		        'longitude' => '53.47703590'
	        ],
	        [
		        'id' => 434,
		        'province_id' => 31,
		        'name' => 'طبس',
		        'name_en' => 'tabas',
		        'latitude' => '33.59583300',
		        'longitude' => '56.92444400'
	        ],
	        [
		        'id' => 435,
		        'province_id' => 31,
		        'name' => 'مهریز',
		        'name_en' => 'mehriz',
		        'latitude' => '31.59166700',
		        'longitude' => '54.43166700'
	        ],
	        [
		        'id' => 436,
		        'province_id' => 31,
		        'name' => 'میبد',
		        'name_en' => 'mybod',
		        'latitude' => '32.24872260',
		        'longitude' => '54.00793410'
	        ],
	        [
		        'id' => 437,
		        'province_id' => 31,
		        'name' => 'یزد',
		        'name_en' => 'yazd',
		        'latitude' => '32.10063870',
		        'longitude' => '54.43421380'
	        ],
	        [
		        'id' => 438,
		        'province_id' => 8,
		        'name' => 'قرچک',
		        'name_en' => 'gharchak',
		        'latitude' => '35.44000000',
		        'longitude' => '51.57000000'
	        ],
	        [
		        'id' => 439,
		        'province_id' => 8,
		        'name' => 'گلستان',
		        'name_en' => 'golestan',
		        'latitude' => '35.51000000',
		        'longitude' => '51.16000000'
	        ],
	        [
		        'id' => 440,
		        'province_id' => 8,
		        'name' => 'قدس',
		        'name_en' => 'ghods',
		        'latitude' => '35.72000000',
		        'longitude' => '51.11000000'
	        ],
	        [
		        'id' => 441,
		        'province_id' => 8,
		        'name' => 'ملارد',
		        'name_en' => 'malard',
		        'latitude' => '35.66560000',
		        'longitude' => '50.97810000'
	        ],
	        [
		        'id' => 442,
		        'province_id' => 8,
		        'name' => 'نسیم‌شهر',
		        'name_en' => 'nasimshahr',
		        'latitude' => '35.55000000',
		        'longitude' => '51.16670000'
	        ],
	        [
		        'id' => 443,
		        'province_id' => 8,
		        'name' => 'اندیشه',
		        'name_en' => 'andishe',
		        'latitude' => '35.68333000',
		        'longitude' => '51.01666000'
	        ],
	        [
		        'id' => 444,
		        'province_id' => 8,
		        'name' => 'صالح‌آباد',
		        'name_en' => 'salehabad',
		        'latitude' => '35.51670000',
		        'longitude' => '51.18330000'
	        ],
	        [
		        'id' => 445,
		        'province_id' => 8,
		        'name' => 'باقرشهر',
		        'name_en' => 'baghershar',
		        'latitude' => '35.50920000',
		        'longitude' => '51.40220000'
	        ],
	        [
		        'id' => 446,
		        'province_id' => 8,
		        'name' => 'باغستان',
		        'name_en' => 'baghestan',
		        'latitude' => '35.63830000',
		        'longitude' => '51.11220000'
	        ],
	        [
		        'id' => 447,
		        'province_id' => 8,
		        'name' => 'بومهن',
		        'name_en' => 'bomehen',
		        'latitude' => '35.73190000',
		        'longitude' => '51.86470000'
	        ],
	        [
		        'id' => 448,
		        'province_id' => 8,
		        'name' => 'چهاردانگه',
		        'name_en' => 'chardangeh',
		        'latitude' => '35.83690000',
		        'longitude' => '50.84670000'
	        ],
	        [
		        'id' => 449,
		        'province_id' => 8,
		        'name' => 'پیشوا',
		        'name_en' => 'pishva',
		        'latitude' => '35.60000000',
		        'longitude' => '51.90000000'
	        ],
	        [
		        'id' => 450,
		        'province_id' => 8,
		        'name' => 'پردیس',
		        'name_en' => 'pardis',
		        'latitude' => '35.73190000',
		        'longitude' => '51.86470000'
	        ],
	        [
		        'id' => 451,
		        'province_id' => 8,
		        'name' => 'وحیدیه',
		        'name_en' => 'vahidieh',
		        'latitude' => '35.59640000',
		        'longitude' => '51.04140000'
	        ],
	        [
		        'id' => 452,
		        'province_id' => 8,
		        'name' => 'نصیرآباد',
		        'name_en' => 'nasirabad',
		        'latitude' => '35.49530000',
		        'longitude' => '51.13690000'
	        ],
	        [
		        'id' => 453,
		        'province_id' => 8,
		        'name' => 'فردوسیه',
		        'name_en' => 'ferdoseh',
		        'latitude' => '35.60000000',
		        'longitude' => '51.06670000'
	        ],
	        [
		        'id' => 454,
		        'province_id' => 8,
		        'name' => 'حسن‌آباد',
		        'name_en' => 'hasanabad',
		        'latitude' => '35.36750000',
		        'longitude' => '51.23694400'
	        ],
	        [
		        'id' => 455,
		        'province_id' => 8,
		        'name' => 'رودهن',
		        'name_en' => 'rodehen',
		        'latitude' => '35.73890000',
		        'longitude' => '51.91190000'
	        ],
	        [
		        'id' => 456,
		        'province_id' => 8,
		        'name' => 'شاهدشهر',
		        'name_en' => 'shedshahr',
		        'latitude' => '35.57140000',
		        'longitude' => '51.08390000'
	        ],
	        [
		        'id' => 457,
		        'province_id' => 8,
		        'name' => 'صباشهر',
		        'name_en' => 'sabashar',
		        'latitude' => '35.58330000',
		        'longitude' => '51.11670000'
	        ],
	        [
		        'id' => 458,
		        'province_id' => 8,
		        'name' => 'صفادشت',
		        'name_en' => 'safadasht',
		        'latitude' => '35.68448900',
		        'longitude' => '50.82465800'
	        ],
	        [
		        'id' => 459,
		        'province_id' => 8,
		        'name' => 'لواسان',
		        'name_en' => 'lavasan',
		        'latitude' => '35.82430000',
		        'longitude' => '51.63360000'
	        ],
	        [
		        'id' => 460,
		        'province_id' => 8,
		        'name' => 'آبسرد',
		        'name_en' => 'absard',
		        'latitude' => '35.65066100',
		        'longitude' => '52.01376100'
	        ],
	        [
		        'id' => 461,
		        'province_id' => 8,
		        'name' => 'شریف‌آباد',
		        'name_en' => 'sharifabad',
		        'latitude' => '35.42750000',
		        'longitude' => '51.78530000'
	        ],
	        [
		        'id' => 462,
		        'province_id' => 8,
		        'name' => 'کهریزک',
		        'name_en' => 'kaerizak',
		        'latitude' => '35.51597200',
		        'longitude' => '51.36221100'
	        ],
	        [
		        'id' => 463,
		        'province_id' => 8,
		        'name' => 'فشم',
		        'name_en' => 'fasham',
		        'latitude' => '35.93080000',
		        'longitude' => '51.52610000'
	        ],
	        [
		        'id' => 464,
		        'province_id' => 8,
		        'name' => 'جوادآباد',
		        'name_en' => 'javadabad',
		        'latitude' => 'null',
		        'longitude' => 'null'
	        ],
	        [
		        'id' => 465,
		        'province_id' => 8,
		        'name' => 'کیلان',
		        'name_en' => 'kilan',
		        'latitude' => '35.55360000',
		        'longitude' => '52.16330000'
	        ],
	        [
		        'id' => 466,
		        'province_id' => 8,
		        'name' => 'آبعلی',
		        'name_en' => 'abali',
		        'latitude' => '35.76310000',
		        'longitude' => '51.96560000'
	        ],
	        [
		        'id' => 467,
		        'province_id' => 8,
		        'name' => 'ارجمند',
		        'name_en' => 'arjomand',
		        'latitude' => '35.81580000',
		        'longitude' => '52.51670000'
	        ],
	        [
		        'id' => 468,
		        'province_id' => 29,
		        'name' => 'کیش',
		        'name_en' => 'kish',
		        'latitude' => '26.00000000',
		        'longitude' => '53.00000000'
	        ],
	        [
		        'id' => 469,
		        'province_id' => 29,
		        'name' => 'لاوان',
		        'name_en' => 'lavan',
		        'latitude' => '26.00000000',
		        'longitude' => '53.00000000'
	        ],
	        [
		        'id' => 470,
		        'province_id' => 29,
		        'name' => 'پارسیان',
		        'name_en' => 'parsian',
		        'latitude' => '27.00000000',
		        'longitude' => '54.00000000'
	        ],
	        [
		        'id' => 471,
		        'province_id' => 29,
		        'name' => 'سیریک',
		        'name_en' => 'sirk',
		        'latitude' => '27.00000000',
		        'longitude' => '54.00000000'
	        ],
	        [
		        'id' => 472,
		        'province_id' => 29,
		        'name' => 'بشاگرد',
		        'name_en' => 'beshargad',
		        'latitude' => '27.00000000',
		        'longitude' => '54.00000000'
	        ],
        ]);
    }
}
