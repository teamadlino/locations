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
        ]);
    }
}
