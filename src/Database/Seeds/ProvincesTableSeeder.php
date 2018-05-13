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
                'latitude' => '37.90357330',
                'longitude' => '46.26821090'
            ],
            [
                'id' => 2,
                'name' => 'آذربایجان غربی',
                'en_name' => 'West Azerbaijan',
                'latitude' => '37.45500620',
                'longitude' => '45.00000000'
            ],
            [
                'id' => 3,
                'name' => 'اردبیل',
                'en_name' => 'Ardabil',
                'latitude' => '38.48532760',
                'longitude' => '47.89112090'
            ],
            [
                'id' => 4,
                'name' => 'اصفهان',
                'en_name' => 'Isfahan',
                'latitude' => '32.65462750',
                'longitude' => '51.66798260'
            ],
            [
                'id' => 5,
                'name' => 'البرز',
                'en_name' => 'Alborz',
                'latitude' => '35.99604670',
                'longitude' => '50.92892460'
            ],
            [
                'id' => 6,
                'name' => 'ایلام',
                'en_name' => 'Ilam',
                'latitude' => '33.29576180',
                'longitude' => '46.67053400'
            ],
            [
                'id' => 7,
                'name' => 'بوشهر',
                'en_name' => 'Bushehr',
                'latitude' => '28.92338370',
                'longitude' => '50.82031400'
            ],
            [
                'id' => 8,
                'name' => 'تهران',
                'en_name' => 'Tehran',
                'latitude' => '35.69611100',
                'longitude' => '51.42305600'
            ],
            [
                'id' => 9,
                'name' => 'چهارمحال و بختیاری',
                'en_name' => 'Chaharmahal and Bakhtiari',
                'latitude' => '31.96143480',
                'longitude' => '50.84563230'
            ],
            [
                'id' => 10,
                'name' => 'خراسان جنوبی',
                'en_name' => 'South Khorasan',
                'latitude' => '32.51756430',
                'longitude' => '59.10417580'
            ],
            [
                'id' => 11,
                'name' => 'خراسان رضوی',
                'en_name' => 'Razavi Khorasan',
                'latitude' => '35.10202530',
                'longitude' => '59.10417580'
            ],
            [
                'id' => 12,
                'name' => 'خراسان شمالی',
                'en_name' => 'North Khorasan',
                'latitude' => '37.47103530',
                'longitude' => '57.10131880'
            ],
            [
                'id' => 13,
                'name' => 'خوزستان',
                'en_name' => 'Khuzestan',
                'latitude' => '31.43601490',
                'longitude' => '49.04131200'
            ],
            [
                'id' => 14,
                'name' => 'زنجان',
                'en_name' => 'Zanjan',
                'latitude' => '36.50181850',
                'longitude' => '48.39881860'
            ],
            [
                'id' => 15,
                'name' => 'سمنان',
                'en_name' => 'Semnan',
                'latitude' => '35.22555850',
                'longitude' => '54.43421380'
            ],
            [
                'id' => 16,
                'name' => 'سیستان و بلوچستان',
                'en_name' => 'Sistan and Baluchestan',
                'latitude' => '27.52999060',
                'longitude' => '60.58206760'
            ],
            [
                'id' => 17,
                'name' => 'فارس',
                'en_name' => 'Fars',
                'latitude' => '29.10438130',
                'longitude' => '53.04589300'
            ],
            [
                'id' => 18,
                'name' => 'قزوین',
                'en_name' => 'Qazvin',
                'latitude' => '36.08813170',
                'longitude' => '49.85472660'
            ],
            [
                'id' => 19,
                'name' => 'قم',
                'en_name' => 'Qom',
                'latitude' => '34.63994430',
                'longitude' => '50.87594190'
            ],
            [
                'id' => 20,
                'name' => 'كردستان',
                'en_name' => 'Kurdistan',
                'latitude' => '35.95535790',
                'longitude' => '47.13621250'
            ],
            [
                'id' => 21,
                'name' => 'كرمان',
                'en_name' => 'Kerman',
                'latitude' => '30.28393790',
                'longitude' => '57.08336280'
            ],
            [
                'id' => 22,
                'name' => 'كرمانشاه',
                'en_name' => 'Kermanshah',
                'latitude' => '34.31416700',
                'longitude' => '47.06500000'
            ],
            [
                'id' => 23,
                'name' => 'کهگیلویه و بویراحمد',
                'en_name' => 'Kohgiluyeh and Boyer-Ahmad',
                'latitude' => '30.65094790',
                'longitude' => '51.60525000'
            ],
            [
                'id' => 24,
                'name' => 'گلستان',
                'en_name' => 'Golestan',
                'latitude' => '37.28981230',
                'longitude' => '55.13758340'
            ],
            [
                'id' => 25,
                'name' => 'گیلان',
                'en_name' => 'Gilan',
                'latitude' => '37.11716170',
                'longitude' => '49.52799960'
            ],
            [
                'id' => 26,
                'name' => 'لرستان',
                'en_name' => 'Lorestan',
                'latitude' => '33.58183940',
                'longitude' => '48.39881860'
            ],
            [
                'id' => 27,
                'name' => 'مازندران',
                'en_name' => 'Mazandaran',
                'latitude' => '36.22623930',
                'longitude' => '52.53186040'
            ],
            [
                'id' => 28,
                'name' => 'مركزی',
                'en_name' => 'Markazi',
                'latitude' => '33.50932940',
                'longitude' => '-92.39611900'
            ],
            [
                'id' => 29,
                'name' => 'هرمزگان',
                'en_name' => 'Hormozgan',
                'latitude' => '27.13872300',
                'longitude' => '55.13758340'
            ],
            [
                'id' => 30,
                'name' => 'همدان',
                'en_name' => 'Hamadan',
                'latitude' => '34.76079990',
                'longitude' => '48.39881860'
            ],
            [
                'id' => 31,
                'name' => 'یزد',
                'en_name' => 'Yazd',
                'latitude' => '32.10063870',
                'longitude' => '54.43421380'
            ]
        ]);
    }
}
