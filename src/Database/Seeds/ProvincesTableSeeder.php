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
                'latitude' => '27.52999060',
                'longitude' => '60.58206760'
            ],
            [
                'id' => 17,
                'name' => 'فارس',
                'en_name' => 'Fars',
                'area_code' => (int) '071',
                'latitude' => '29.10438130',
                'longitude' => '53.04589300'
            ],
            [
                'id' => 18,
                'name' => 'قزوین',
                'en_name' => 'Qazvin',
                'area_code' => (int) '028',
                'latitude' => '36.08813170',
                'longitude' => '49.85472660'
            ],
            [
                'id' => 19,
                'name' => 'قم',
                'en_name' => 'Qom',
                'area_code' => (int) '025',
                'latitude' => '34.63994430',
                'longitude' => '50.87594190'
            ],
            [
                'id' => 20,
                'name' => 'كردستان',
                'en_name' => 'Kurdistan',
                'area_code' => (int) '087',
                'latitude' => '35.95535790',
                'longitude' => '47.13621250'
            ],
            [
                'id' => 21,
                'name' => 'كرمان',
                'en_name' => 'Kerman',
                'area_code' => (int) '034',
                'latitude' => '30.28393790',
                'longitude' => '57.08336280'
            ],
            [
                'id' => 22,
                'name' => 'كرمانشاه',
                'en_name' => 'Kermanshah',
                'area_code' => (int) '083',
                'latitude' => '34.31416700',
                'longitude' => '47.06500000'
            ],
            [
                'id' => 23,
                'name' => 'کهگیلویه و بویراحمد',
                'en_name' => 'Kohgiluyeh and Boyer-Ahmad',
                'area_code' => (int) '074',
                'latitude' => '30.65094790',
                'longitude' => '51.60525000'
            ],
            [
                'id' => 24,
                'name' => 'گلستان',
                'en_name' => 'Golestan',
                'area_code' => (int) '017',
                'latitude' => '37.28981230',
                'longitude' => '55.13758340'
            ],
            [
                'id' => 25,
                'name' => 'گیلان',
                'en_name' => 'Gilan',
                'area_code' => (int) '013',
                'latitude' => '37.11716170',
                'longitude' => '49.52799960'
            ],
            [
                'id' => 26,
                'name' => 'لرستان',
                'en_name' => 'Lorestan',
                'area_code' => (int) '066',
                'latitude' => '33.58183940',
                'longitude' => '48.39881860'
            ],
            [
                'id' => 27,
                'name' => 'مازندران',
                'en_name' => 'Mazandaran',
                'area_code' => (int) '011',
                'latitude' => '36.22623930',
                'longitude' => '52.53186040'
            ],
            [
                'id' => 28,
                'name' => 'مركزی',
                'en_name' => 'Markazi',
                'area_code' => (int) '086',
                'latitude' => '33.50932940',
                'longitude' => '-92.39611900'
            ],
            [
                'id' => 29,
                'name' => 'هرمزگان',
                'en_name' => 'Hormozgan',
                'area_code' => (int) '076',
                'latitude' => '27.13872300',
                'longitude' => '55.13758340'
            ],
            [
                'id' => 30,
                'name' => 'همدان',
                'en_name' => 'Hamedan',
                'area_code' => (int) '081',
                'latitude' => '34.76079990',
                'longitude' => '48.39881860'
            ],
            [
                'id' => 31,
                'name' => 'یزد',
                'en_name' => 'Yazd',
                'area_code' => (int) '035',
                'latitude' => '32.10063870',
                'longitude' => '54.43421380'
            ]
        ]);
    }
}
