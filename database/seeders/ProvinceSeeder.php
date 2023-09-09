<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(
            [
                [
                    "title" => "مرکزی",
                    "slug" => "markazi"
                ],
                [
                    "title" => "گيلان",
                    "slug" => "gilan"
                ],
                [
                    "title" => "مازندران",
                    "slug" => "mazandaran"
                ],
                [
                    "title" => "آذربايجان شرقي",
                    "slug" => "east-azarbaijan"
                ],
                [
                    "title" => "آذربايجان غربي",
                    "slug" => "western-azerbaijan"
                ],
                [
                    "title" => "کرمانشاه",
                    "slug" => "kermanshah"
                ],
                [
                    "title" => "خوزستان",
                    "slug" => "khuzestan"
                ],
                [
                    "title" => "فارس",
                    "slug" => "fars"
                ],
                [
                    "title" => "كرمان",
                    "slug" => "kerman"
                ],
                [
                    "title" => "خراسان رضوئ",
                    "slug" => "khorasan-razavi"
                ],
                [
                    "title" => "اصفهان",
                    "slug" => "esfahan"
                ],
                [
                    "title" => "سيستان وبلوچستان",
                    "slug" => "sistan-and-baluchistan"
                ],
                [
                    "title" => "كردستان",
                    "slug" => "kurdistan"
                ],
                [
                    "title" => "همدان",
                    "slug" => "hamedan"
                ],
                [
                    "title" => "چهارمحال وبختياری",
                    "slug" => "chaharmahal-and-bakhtiari-"
                ],
                [
                    "title" => "لرستان",
                    "slug" => "lorestan"
                ],
                [
                    "title" => "ايلام",
                    "slug" => "ilam"
                ],
                [
                    "title" => "كهگيلويه وبويراحمد",
                    "slug" => "kohgiloyeh-boyerahmad"
                ],
                [
                    "title" => "بوشهر",
                    "slug" => "bushehr"
                ],
                [
                    "title" => "زنجان",
                    "slug" => "zanjan"
                ],
                [
                    "title" => "سمنان",
                    "slug" => "semnan"
                ],
                [
                    "title" => "یزد",
                    "slug" => "yazd"
                ],
                [
                    "title" => "هرمزگان",
                    "slug" => "hormozgan"
                ],
                [
                    "title" => "تهران",
                    "slug" => "tehran"
                ],
                [
                    "title" => "اردبيل",
                    "slug" => "ardabil"
                ],
                [
                    "title" => "قم",
                    "slug" => "qom"
                ],
                [
                    "title" => "قزوين",
                    "slug" => "qazvin"
                ],
                [
                    "title" => "گلستان",
                    "slug" => "golestan"
                ],
                [
                    "title" => "خراسان شمالي",
                    "slug" => "north-khorasan"
                ],
                [
                    "title" => "خراسان جنوبي",
                    "slug" => "south-khorasan"
                ],
                [
                    "title" => "البرز",
                    "slug" => "alborz"
                ]
            ]
        );
    }
}
