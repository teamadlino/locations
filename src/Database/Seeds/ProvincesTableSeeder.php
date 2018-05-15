<?php

namespace Adlino\IranGeo\Database\Seeds;

use Adlino\IranGeo\Models\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::insert([
            [
                'id' => 1,
                'name' => 'آذربایجان شرقی',
                'en_name' => 'East Azerbaijan',
                'area_code' => (int) '041',
                'latitude' => '37.9708291',
                'longitude' => '45.6258276'
            ],
            [
                'id' => 2,
                'name' => 'آذربایجان غربی',
                'en_name' => 'West Azerbaijan',
                'area_code' => (int) '044',
                'latitude' => '37.8537149',
                'longitude' => '43.4486659'
            ],
            [
                'id' => 3,
                'name' => 'اردبیل',
                'en_name' => 'Ardabil',
                'area_code' => (int) '045',
                'latitude' => '38.2666961',
                'longitude' => '48.2709932'
            ],
            [
                'id' => 4,
                'name' => 'اصفهان',
                'en_name' => 'Isfahan',
                'area_code' => (int) '031',
                'latitude' => '32.6622111',
                'longitude' => '51.5469407'
            ],
            [
                'id' => 5,
                'name' => 'البرز',
                'en_name' => 'Alborz',
                'area_code' => (int) '026',
                'latitude' => '36.0229831',
                'longitude' => '50.5568582'
            ],
            [
                'id' => 6,
                'name' => 'ایلام',
                'en_name' => 'Ilam',
                'area_code' => (int) '084',
                'latitude' => '33.6369193',
                'longitude' => '46.396498'
            ],
            [
                'id' => 7,
                'name' => 'بوشهر',
                'en_name' => 'Bushehr',
                'area_code' => (int) '077',
                'latitude' => '28.9109022',
                'longitude' => '50.8300214'
            ],
            [
                'id' => 8,
                'name' => 'تهران',
                'en_name' => 'Tehran',
                'area_code' => (int) '021',
                'latitude' => '35.696733',
                'longitude' => '51.2097335'
            ],
            [
                'id' => 9,
                'name' => 'چهارمحال و بختیاری',
                'en_name' => 'Chaharmahal and Bakhtiari',
                'area_code' => (int) '038',
                'latitude' => '31.9053981',
                'longitude' => '49.9961703'
            ],
            [
                'id' => 10,
                'name' => 'خراسان جنوبی',
                'en_name' => 'South Khorasan',
                'area_code' => (int) '056',
                'latitude' => '32.7569919',
                'longitude' => '55.9818821'
            ],
            [
                'id' => 11,
                'name' => 'خراسان رضوی',
                'en_name' => 'Razavi Khorasan',
                'area_code' => (int) '051',
                'latitude' => '35.5745983',
                'longitude' => '56.6358414'
            ],
            [
                'id' => 12,
                'name' => 'خراسان شمالی',
                'en_name' => 'North Khorasan',
                'area_code' => (int) '058',
                'latitude' => '37.4393284',
                'longitude' => '55.9749504'
            ],
            [
                'id' => 13,
                'name' => 'خوزستان',
                'en_name' => 'Khuzestan',
                'area_code' => (int) '061',
                'latitude' => '31.5130987',
                'longitude' => '47.8887379'
            ],
            [
                'id' => 14,
                'name' => 'زنجان',
                'en_name' => 'Zanjan',
                'area_code' => (int) '024',
                'latitude' => '36.681',
                'longitude' => '48.4231829'
            ],
            [
                'id' => 15,
                'name' => 'سمنان',
                'en_name' => 'Semnan',
                'area_code' => (int) '023',
                'latitude' => '35.5776697',
                'longitude' => '53.3490938'
            ],
            [
                'id' => 16,
                'name' => 'سیستان و بلوچستان',
                'en_name' => 'Sistan and Baluchestan',
                'area_code' => (int) '054',
                'latitude' => '28.2486033',
                'longitude' => '58.8107962'
            ],
            [
                'id' => 17,
                'name' => 'فارس',
                'en_name' => 'Fars',
                'area_code' => (int) '071',
                'latitude' => '29.4417637',
                'longitude' => '50.8556421'
            ],
            [
                'id' => 18,
                'name' => 'قزوین',
                'en_name' => 'Qazvin',
                'area_code' => (int) '028',
                'latitude' => '36.2813381',
                'longitude' => '49.9466454'
            ],
            [
                'id' => 19,
                'name' => 'قم',
                'en_name' => 'Qom',
                'area_code' => (int) '025',
                'latitude' => '34.6887845',
                'longitude' => '50.7119792'
            ],
            [
                'id' => 20,
                'name' => 'كردستان',
                'en_name' => 'Kurdistan',
                'area_code' => (int) '087',
                'latitude' => '35.6313675',
                'longitude' => '45.7441852'
            ],
            [
                'id' => 21,
                'name' => 'كرمان',
                'en_name' => 'Kerman',
                'area_code' => (int) '034',
                'latitude' => '30.2731806',
                'longitude' => '56.9962094'
            ],
            [
                'id' => 22,
                'name' => 'كرمانشاه',
                'en_name' => 'Kermanshah',
                'area_code' => (int) '083',
                'latitude' => '34.3373914',
                'longitude' => '47.025833'
            ],
            [
                'id' => 23,
                'name' => 'کهگیلویه و بویراحمد',
                'en_name' => 'Kohgiluyeh and Boyer-Ahmad',
                'area_code' => (int) '074',
                'latitude' => '30.8420853',
                'longitude' => '50.2442777'
            ],
            [
                'id' => 24,
                'name' => 'گلستان',
                'en_name' => 'Golestan',
                'area_code' => (int) '017',
                'latitude' => '35.7699815',
                'longitude' => '51.456538'
            ],
            [
                'id' => 25,
                'name' => 'گیلان',
                'en_name' => 'Gilan',
                'area_code' => (int) '013',
                'latitude' => '37.5275502',
                'longitude' => '48.4421516'
            ],
            [
                'id' => 26,
                'name' => 'لرستان',
                'en_name' => 'Lorestan',
                'area_code' => (int) '066',
                'latitude' => '33.5251246',
                'longitude' => '47.3312048'
            ],
            [
                'id' => 27,
                'name' => 'مازندران',
                'en_name' => 'Mazandaran',
                'area_code' => (int) '011',
                'latitude' => '36.3681381',
                'longitude' => '51.1494056'
            ],
            [
                'id' => 28,
                'name' => 'مركزی',
                'en_name' => 'Markazi',
                'area_code' => (int) '086',
                'latitude' => '34.6214831',
                'longitude' => '48.8664113'
            ],
            [
                'id' => 29,
                'name' => 'هرمزگان',
                'en_name' => 'Hormozgan',
                'area_code' => (int) '076',
                'latitude' => '27.1905429',
                'longitude' => '53.7073749'
            ],
            [
                'id' => 30,
                'name' => 'همدان',
                'en_name' => 'Hamedan',
                'area_code' => (int) '081',
                'latitude' => '34.8124497',
                'longitude' => '48.4400271'
            ],
            [
                'id' => 31,
                'name' => 'یزد',
                'en_name' => 'Yazd',
                'area_code' => (int) '035',
                'latitude' => '31.879685',
                'longitude' => '54.2667267'
            ]
        ]);
    }
}
