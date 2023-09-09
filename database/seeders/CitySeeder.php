<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(
            [
                [
                    "title" => "آبادان",
                    "slug" => "abadan",
                    "province_id" => 7
                ],
                [
                    "title" => "آباده",
                    "slug" => "abade",
                    "province_id" => 8
                ],
                [
                    "title" => "آبدانان",
                    "slug" => "abdanan",
                    "province_id" => 17
                ],
                [
                    "title" => "آذرشهر",
                    "slug" => "azarshahr",
                    "province_id" => 4
                ],
                [
                    "title" => "آرادان",
                    "slug" => "aradan",
                    "province_id" => 21
                ],
                [
                    "title" => "آران وبيدگل",
                    "slug" => "aran-va-bidgol",
                    "province_id" => 11
                ],
                [
                    "title" => "آزادشهر",
                    "slug" => "azadshahr",
                    "province_id" => 28
                ],
                [
                    "title" => "آستارا",
                    "slug" => "astara",
                    "province_id" => 2
                ],
                [
                    "title" => "آستانه اشرفيه",
                    "slug" => "astaneh",
                    "province_id" => 2
                ],
                [
                    "title" => "آشتيان",
                    "slug" => "ashtian",
                    "province_id" => 1
                ],
                [
                    "title" => "آق قلا",
                    "slug" => "aqqala",
                    "province_id" => 28
                ],
                [
                    "title" => "آمل",
                    "slug" => "amol",
                    "province_id" => 3
                ],
                [
                    "title" => "ابركوه",
                    "slug" => "abarkouh",
                    "province_id" => 22
                ],
                [
                    "title" => "ابهر",
                    "slug" => "abhar",
                    "province_id" => 20
                ],
                [
                    "title" => "ابوموسي",
                    "slug" => "abu-musa",
                    "province_id" => 23
                ],
                [
                    "title" => "اراک",
                    "slug" => "arak",
                    "province_id" => 1
                ],
                [
                    "title" => "اردبيل",
                    "slug" => "ardabil",
                    "province_id" => 25
                ],
                [
                    "title" => "اردستان",
                    "slug" => "ardestān",
                    "province_id" => 11
                ],
                [
                    "title" => "اردكان",
                    "slug" => "ardakan",
                    "province_id" => 22
                ],
                [
                    "title" => "اردل",
                    "slug" => "ardal",
                    "province_id" => 15
                ],
                [
                    "title" => "ارسنجان",
                    "slug" => "arsanjan",
                    "province_id" => 8
                ],
                [
                    "title" => "اروميه",
                    "slug" => "urmia",
                    "province_id" => 5
                ],
                [
                    "title" => "ازنا",
                    "slug" => "azna",
                    "province_id" => 16
                ],
                [
                    "title" => "استهبان",
                    "slug" => "estahban",
                    "province_id" => 8
                ],
                [
                    "title" => "اسدآباد",
                    "slug" => "asadabad",
                    "province_id" => 14
                ],
                [
                    "title" => "اسفراين",
                    "slug" => "esfaraien",
                    "province_id" => 29
                ],
                [
                    "title" => "اسلام آبادغرب",
                    "slug" => "islamic-garb",
                    "province_id" => 6
                ],
                [
                    "title" => "اسلامشهر",
                    "slug" => "eslamshahr",
                    "province_id" => 24
                ],
                [
                    "title" => "اسکو",
                    "slug" => "osku",
                    "province_id" => 4
                ],
                [
                    "title" => "اشنويه",
                    "slug" => "oshnavieh",
                    "province_id" => 5
                ],
                [
                    "title" => "اصفهان",
                    "slug" => "esfahan",
                    "province_id" => 11
                ],
                [
                    "title" => "اقليد",
                    "slug" => "eghlid",
                    "province_id" => 8
                ],
                [
                    "title" => "البرز",
                    "slug" => "alborz",
                    "province_id" => 27
                ],
                [
                    "title" => "اليگودرز",
                    "slug" => "aligoudarz",
                    "province_id" => 16
                ],
                [
                    "title" => "املش",
                    "slug" => "amlash",
                    "province_id" => 2
                ],
                [
                    "title" => "انار",
                    "slug" => "pomegranate",
                    "province_id" => 9
                ],
                [
                    "title" => "انديمشک",
                    "slug" => "andimeshk",
                    "province_id" => 7
                ],
                [
                    "title" => "اهر",
                    "slug" => "ahar",
                    "province_id" => 4
                ],
                [
                    "title" => "اهواز",
                    "slug" => "ahvaz",
                    "province_id" => 7
                ],
                [
                    "title" => "ايجرود",
                    "slug" => "ijroud",
                    "province_id" => 20
                ],
                [
                    "title" => "ايذه",
                    "slug" => "izeh",
                    "province_id" => 7
                ],
                [
                    "title" => "ايرانشهر",
                    "slug" => "iranshahr",
                    "province_id" => 12
                ],
                [
                    "title" => "ايلام",
                    "slug" => "ilam",
                    "province_id" => 17
                ],
                [
                    "title" => "ايوان",
                    "slug" => "ivan",
                    "province_id" => 17
                ],
                [
                    "title" => "بابل",
                    "slug" => "babol",
                    "province_id" => 3
                ],
                [
                    "title" => "بابلسر",
                    "slug" => "babolsar",
                    "province_id" => 3
                ],
                [
                    "title" => "باشت",
                    "slug" => "basht",
                    "province_id" => 18
                ],
                [
                    "title" => "باغ ملک",
                    "slug" => "garden-property",
                    "province_id" => 7
                ],
                [
                    "title" => "بافت",
                    "slug" => "tissue",
                    "province_id" => 9
                ],
                [
                    "title" => "بافق",
                    "slug" => "bafg",
                    "province_id" => 22
                ],
                [
                    "title" => "بانه",
                    "slug" => "bane",
                    "province_id" => 13
                ],
                [
                    "title" => "باوي",
                    "slug" => "bavi",
                    "province_id" => 7
                ],
                [
                    "title" => "بجستان",
                    "slug" => "bajestan",
                    "province_id" => 10
                ],
                [
                    "title" => "بجنورد",
                    "slug" => "bojnoord",
                    "province_id" => 29
                ],
                [
                    "title" => "برخوار",
                    "slug" => "borkhar",
                    "province_id" => 11
                ],
                [
                    "title" => "بردسكن",
                    "slug" => "bardaskan",
                    "province_id" => 10
                ],
                [
                    "title" => "بردسير",
                    "slug" => "bardsir",
                    "province_id" => 9
                ],
                [
                    "title" => "بروجرد",
                    "slug" => "borujerd",
                    "province_id" => 16
                ],
                [
                    "title" => "بروجن",
                    "slug" => "borujen",
                    "province_id" => 15
                ],
                [
                    "title" => "بستان آباد",
                    "slug" => "bostanabad",
                    "province_id" => 4
                ],
                [
                    "title" => "بستك",
                    "slug" => "block",
                    "province_id" => 23
                ],
                [
                    "title" => "بم",
                    "slug" => "bass",
                    "province_id" => 9
                ],
                [
                    "title" => "بناب",
                    "slug" => "bonab",
                    "province_id" => 4
                ],
                [
                    "title" => "بندرانزلي",
                    "slug" => "bandar-anzali",
                    "province_id" => 2
                ],
                [
                    "title" => "بندرعباس",
                    "slug" => "bandar-abbas",
                    "province_id" => 23
                ],
                [
                    "title" => "بندرلنگه",
                    "slug" => "lengeh-seaport",
                    "province_id" => 23
                ],
                [
                    "title" => "بندرماهشهر",
                    "slug" => "bandar-e-mahshahr",
                    "province_id" => 7
                ],
                [
                    "title" => "بندرگز",
                    "slug" => "gaz",
                    "province_id" => 28
                ],
                [
                    "title" => "بهاباد",
                    "slug" => "bahabad",
                    "province_id" => 22
                ],
                [
                    "title" => "بهار",
                    "slug" => "spring",
                    "province_id" => 14
                ],
                [
                    "title" => "بهارستان",
                    "slug" => "baharestan",
                    "province_id" => 24
                ],
                [
                    "title" => "بهبهان",
                    "slug" => "pa",
                    "province_id" => 7
                ],
                [
                    "title" => "بهشهر",
                    "slug" => "behshahr",
                    "province_id" => 3
                ],
                [
                    "title" => "بهمئي",
                    "slug" => "bahmaie",
                    "province_id" => 18
                ],
                [
                    "title" => "بوئين زهرا",
                    "slug" => "buin-zahra",
                    "province_id" => 27
                ],
                [
                    "title" => "بوانات",
                    "slug" => "bavanat",
                    "province_id" => 8
                ],
                [
                    "title" => "بوشهر",
                    "slug" => "bushehr",
                    "province_id" => 19
                ],
                [
                    "title" => "بوكان",
                    "slug" => "bukan",
                    "province_id" => 5
                ],
                [
                    "title" => "بويراحمد",
                    "slug" => "boyer",
                    "province_id" => 18
                ],
                [
                    "title" => "بيجار",
                    "slug" => "bijar",
                    "province_id" => 13
                ],
                [
                    "title" => "بيرجند",
                    "slug" => "birjand",
                    "province_id" => 30
                ],
                [
                    "title" => "بيله سوار",
                    "slug" => "bilesavar",
                    "province_id" => 25
                ],
                [
                    "title" => "تاكستان",
                    "slug" => "the-vineyard",
                    "province_id" => 27
                ],
                [
                    "title" => "تايباد",
                    "slug" => "taybad",
                    "province_id" => 10
                ],
                [
                    "title" => "تبريز",
                    "slug" => "tabriz",
                    "province_id" => 4
                ],
                [
                    "title" => "تربت جام",
                    "slug" => "torbat-e-jam",
                    "province_id" => 10
                ],
                [
                    "title" => "تربت حيدريه",
                    "slug" => "torbat",
                    "province_id" => 10
                ],
                [
                    "title" => "تفت",
                    "slug" => "taft",
                    "province_id" => 22
                ],
                [
                    "title" => "تفرش",
                    "slug" => "tafresh",
                    "province_id" => 1
                ],
                [
                    "title" => "تكاب",
                    "slug" => "tekab",
                    "province_id" => 5
                ],
                [
                    "title" => "تنكابن",
                    "slug" => "tonkabon",
                    "province_id" => 3
                ],
                [
                    "title" => "تنگستان",
                    "slug" => "tangistan",
                    "province_id" => 19
                ],
                [
                    "title" => "تهران",
                    "slug" => "tehran",
                    "province_id" => 24
                ],
                [
                    "title" => "تويسركان",
                    "slug" => "tuyserkan",
                    "province_id" => 14
                ],
                [
                    "title" => "تيران وکرون",
                    "slug" => "tiran-vkrvn",
                    "province_id" => 11
                ],
                [
                    "title" => "ثلاث باباجاني",
                    "slug" => "salas-babajani",
                    "province_id" => 6
                ],
                [
                    "title" => "جاجرم",
                    "slug" => "jajarm",
                    "province_id" => 29
                ],
                [
                    "title" => "جاسك",
                    "slug" => "jask",
                    "province_id" => 23
                ],
                [
                    "title" => "جغتاي",
                    "slug" => "jaghatay",
                    "province_id" => 10
                ],
                [
                    "title" => "جلفا",
                    "slug" => "jolfa",
                    "province_id" => 4
                ],
                [
                    "title" => "جم",
                    "slug" => "jam",
                    "province_id" => 19
                ],
                [
                    "title" => "جهرم",
                    "slug" => "jahrom",
                    "province_id" => 8
                ],
                [
                    "title" => "جوانرود",
                    "slug" => "javanrood",
                    "province_id" => 6
                ],
                [
                    "title" => "جويبار",
                    "slug" => "juybar",
                    "province_id" => 3
                ],
                [
                    "title" => "جوين",
                    "slug" => "jovin",
                    "province_id" => 10
                ],
                [
                    "title" => "جيرفت",
                    "slug" => "jiroft",
                    "province_id" => 9
                ],
                [
                    "title" => "حاجي اباد",
                    "slug" => "hajiabadi",
                    "province_id" => 23
                ],
                [
                    "title" => "خاتم",
                    "slug" => "seal",
                    "province_id" => 22
                ],
                [
                    "title" => "خاش",
                    "slug" => "khash",
                    "province_id" => 12
                ],
                [
                    "title" => "خدابنده",
                    "slug" => "khodabande",
                    "province_id" => 20
                ],
                [
                    "title" => "خرم آباد",
                    "slug" => "khorramabad",
                    "province_id" => 16
                ],
                [
                    "title" => "خرم بيد",
                    "slug" => "khorrambid",
                    "province_id" => 8
                ],
                [
                    "title" => "خرمدره",
                    "slug" => "khoramdeh",
                    "province_id" => 20
                ],
                [
                    "title" => "خرمشهر",
                    "slug" => "khorramshahr",
                    "province_id" => 7
                ],
                [
                    "title" => "خلخال",
                    "slug" => "anklet",
                    "province_id" => 25
                ],
                [
                    "title" => "خليل آباد",
                    "slug" => "khaliabad",
                    "province_id" => 10
                ],
                [
                    "title" => "خمير",
                    "slug" => "dough",
                    "province_id" => 23
                ],
                [
                    "title" => "خمين",
                    "slug" => "khomain",
                    "province_id" => 1
                ],
                [
                    "title" => "خميني شهر",
                    "slug" => "khomeini-shahr",
                    "province_id" => 11
                ],
                [
                    "title" => "خنج",
                    "slug" => "khonj",
                    "province_id" => 8
                ],
                [
                    "title" => "خنداب",
                    "slug" => "varkaroud",
                    "province_id" => 1
                ],
                [
                    "title" => "خواف",
                    "slug" => "khaf",
                    "province_id" => 10
                ],
                [
                    "title" => "خوانسار",
                    "slug" => "khansar",
                    "province_id" => 11
                ],
                [
                    "title" => "خوسف",
                    "slug" => "khoosf",
                    "province_id" => 30
                ],
                [
                    "title" => "داراب",
                    "slug" => "darab",
                    "province_id" => 8
                ],
                [
                    "title" => "دالاهو",
                    "slug" => "dalahoo",
                    "province_id" => 6
                ],
                [
                    "title" => "دامغان",
                    "slug" => "damghan",
                    "province_id" => 21
                ],
                [
                    "title" => "داورزن",
                    "slug" => "davarzan",
                    "province_id" => 10
                ],
                [
                    "title" => "درميان",
                    "slug" => "in-the-middle-of",
                    "province_id" => 30
                ],
                [
                    "title" => "دره شهر",
                    "slug" => "valley-city",
                    "province_id" => 17
                ],
                [
                    "title" => "درگز",
                    "slug" => "dargaz",
                    "province_id" => 10
                ],
                [
                    "title" => "دزفول",
                    "slug" => "dezful",
                    "province_id" => 7
                ],
                [
                    "title" => "دشت آزادگان",
                    "slug" => "dashteazadegan",
                    "province_id" => 7
                ],
                [
                    "title" => "دشتستان",
                    "slug" => "dashtestan",
                    "province_id" => 19
                ],
                [
                    "title" => "دشتي",
                    "slug" => "dashti",
                    "province_id" => 19
                ],
                [
                    "title" => "دلفان",
                    "slug" => "delfan",
                    "province_id" => 16
                ],
                [
                    "title" => "دليجان",
                    "slug" => "delijan",
                    "province_id" => 1
                ],
                [
                    "title" => "دلگان",
                    "slug" => "dlgan",
                    "province_id" => 12
                ],
                [
                    "title" => "دماوند",
                    "slug" => "damavand",
                    "province_id" => 24
                ],
                [
                    "title" => "دنا",
                    "slug" => "dena",
                    "province_id" => 18
                ],
                [
                    "title" => "دهاقان",
                    "slug" => "dehaghan",
                    "province_id" => 11
                ],
                [
                    "title" => "دهلران",
                    "slug" => "dehloran",
                    "province_id" => 17
                ],
                [
                    "title" => "دهگلان",
                    "slug" => "dehgolan",
                    "province_id" => 13
                ],
                [
                    "title" => "دوره",
                    "slug" => "the-period",
                    "province_id" => 16
                ],
                [
                    "title" => "دورود",
                    "slug" => "dorud",
                    "province_id" => 16
                ],
                [
                    "title" => "ديلم",
                    "slug" => "daylam",
                    "province_id" => 19
                ],
                [
                    "title" => "ديواندره",
                    "slug" => "divandareh",
                    "province_id" => 13
                ],
                [
                    "title" => "رابر",
                    "slug" => "seal",
                    "province_id" => 9
                ],
                [
                    "title" => "رامسر",
                    "slug" => "ramsar",
                    "province_id" => 3
                ],
                [
                    "title" => "رامشير",
                    "slug" => "ramshir",
                    "province_id" => 7
                ],
                [
                    "title" => "رامهرمز",
                    "slug" => "rāmhormoz",
                    "province_id" => 7
                ],
                [
                    "title" => "راميان",
                    "slug" => "ramian",
                    "province_id" => 28
                ],
                [
                    "title" => "راور",
                    "slug" => "raver",
                    "province_id" => 9
                ],
                [
                    "title" => "رباطكريم",
                    "slug" => "robat-karim",
                    "province_id" => 24
                ],
                [
                    "title" => "رزن",
                    "slug" => "razan",
                    "province_id" => 14
                ],
                [
                    "title" => "رستم",
                    "slug" => "rustam",
                    "province_id" => 8
                ],
                [
                    "title" => "رشت",
                    "slug" => "rasht",
                    "province_id" => 2
                ],
                [
                    "title" => "رشتخوار",
                    "slug" => "roshtkhar",
                    "province_id" => 10
                ],
                [
                    "title" => "رضوانشهر",
                    "slug" => "rezvanshahr",
                    "province_id" => 2
                ],
                [
                    "title" => "رفسنجان",
                    "slug" => "rafsanjan",
                    "province_id" => 9
                ],
                [
                    "title" => "روانسر",
                    "slug" => "rawansar",
                    "province_id" => 6
                ],
                [
                    "title" => "رودبار",
                    "slug" => "rudbar",
                    "province_id" => 2
                ],
                [
                    "title" => "رودبارجنوب",
                    "slug" => "rvdbarjnvb",
                    "province_id" => 9
                ],
                [
                    "title" => "رودسر",
                    "slug" => "rudsar",
                    "province_id" => 2
                ],
                [
                    "title" => "رومشکان",
                    "slug" => "rvmshkan",
                    "province_id" => 16
                ],
                [
                    "title" => "ريگان",
                    "slug" => "reagan",
                    "province_id" => 9
                ],
                [
                    "title" => "زابل",
                    "slug" => "zabul",
                    "province_id" => 12
                ],
                [
                    "title" => "زاهدان",
                    "slug" => "zahedan",
                    "province_id" => 12
                ],
                [
                    "title" => "زاوه",
                    "slug" => "zavh",
                    "province_id" => 10
                ],
                [
                    "title" => "زرند",
                    "slug" => "zarand",
                    "province_id" => 9
                ],
                [
                    "title" => "زرنديه",
                    "slug" => "zarandieh",
                    "province_id" => 1
                ],
                [
                    "title" => "زرين دشت",
                    "slug" => "zarrindasht",
                    "province_id" => 8
                ],
                [
                    "title" => "زنجان",
                    "slug" => "zanjan",
                    "province_id" => 20
                ],
                [
                    "title" => "زيرکوه",
                    "slug" => "zirkouh",
                    "province_id" => 30
                ],
                [
                    "title" => "سارئ",
                    "slug" => "infectious",
                    "province_id" => 3
                ],
                [
                    "title" => "سامان",
                    "slug" => "order",
                    "province_id" => 15
                ],
                [
                    "title" => "ساوجبلاغ",
                    "slug" => "savojbolagh",
                    "province_id" => 31
                ],
                [
                    "title" => "ساوه",
                    "slug" => "saveh",
                    "province_id" => 1
                ],
                [
                    "title" => "سبزوار",
                    "slug" => "sabzevar",
                    "province_id" => 10
                ],
                [
                    "title" => "سراب",
                    "slug" => "sarab",
                    "province_id" => 4
                ],
                [
                    "title" => "سراوان",
                    "slug" => "saravan",
                    "province_id" => 12
                ],
                [
                    "title" => "سرايان",
                    "slug" => "writers",
                    "province_id" => 30
                ],
                [
                    "title" => "سرباز",
                    "slug" => "soldier",
                    "province_id" => 12
                ],
                [
                    "title" => "سربيشه",
                    "slug" => "sarbishe",
                    "province_id" => 30
                ],
                [
                    "title" => "سرخس",
                    "slug" => "fern",
                    "province_id" => 10
                ],
                [
                    "title" => "سرخه",
                    "slug" => "sorkhe",
                    "province_id" => 21
                ],
                [
                    "title" => "سردشت",
                    "slug" => "sardasht",
                    "province_id" => 5
                ],
                [
                    "title" => "سروآباد",
                    "slug" => "sarvabad",
                    "province_id" => 13
                ],
                [
                    "title" => "سروستان",
                    "slug" => "sarvestan",
                    "province_id" => 8
                ],
                [
                    "title" => "سرپل ذهاب",
                    "slug" => "sarpolzohab",
                    "province_id" => 6
                ],
                [
                    "title" => "سقز",
                    "slug" => "turpentine",
                    "province_id" => 13
                ],
                [
                    "title" => "سلسله",
                    "slug" => "series",
                    "province_id" => 16
                ],
                [
                    "title" => "سلماس",
                    "slug" => "salmas",
                    "province_id" => 5
                ],
                [
                    "title" => "سمنان",
                    "slug" => "semnan",
                    "province_id" => 21
                ],
                [
                    "title" => "سميرم",
                    "slug" => "semirom",
                    "province_id" => 11
                ],
                [
                    "title" => "سنقر",
                    "slug" => "falcon",
                    "province_id" => 6
                ],
                [
                    "title" => "سنندج",
                    "slug" => "sanandaj",
                    "province_id" => 13
                ],
                [
                    "title" => "سوادكوه",
                    "slug" => "savadkooh",
                    "province_id" => 3
                ],
                [
                    "title" => "سيرجان",
                    "slug" => "sirjan",
                    "province_id" => 9
                ],
                [
                    "title" => "سيروان",
                    "slug" => "sirvan",
                    "province_id" => 17
                ],
                [
                    "title" => "سپيدان",
                    "slug" => "sepidan",
                    "province_id" => 8
                ],
                [
                    "title" => "شادگان",
                    "slug" => "shadegan",
                    "province_id" => 7
                ],
                [
                    "title" => "شازند",
                    "slug" => "shazand",
                    "province_id" => 1
                ],
                [
                    "title" => "شاهرود",
                    "slug" => "anymore",
                    "province_id" => 21
                ],
                [
                    "title" => "شاهين دژ",
                    "slug" => "shahindezh",
                    "province_id" => 5
                ],
                [
                    "title" => "شاهين شهروميمه",
                    "slug" => "shahin-shhrvmymh",
                    "province_id" => 11
                ],
                [
                    "title" => "شبستر",
                    "slug" => "shabestar",
                    "province_id" => 4
                ],
                [
                    "title" => "شفت",
                    "slug" => "shafts",
                    "province_id" => 2
                ],
                [
                    "title" => "شميرانات",
                    "slug" => "shemiranat",
                    "province_id" => 24
                ],
                [
                    "title" => "شهربابك",
                    "slug" => "shahrbabak",
                    "province_id" => 9
                ],
                [
                    "title" => "شهرضا",
                    "slug" => "branch",
                    "province_id" => 11
                ],
                [
                    "title" => "شهركرد",
                    "slug" => "kord",
                    "province_id" => 15
                ],
                [
                    "title" => "شهريار",
                    "slug" => "sh.",
                    "province_id" => 24
                ],
                [
                    "title" => "شوش",
                    "slug" => "susa",
                    "province_id" => 7
                ],
                [
                    "title" => "شوشتر",
                    "slug" => "shushtar",
                    "province_id" => 7
                ],
                [
                    "title" => "شوط",
                    "slug" => "round",
                    "province_id" => 5
                ],
                [
                    "title" => "شيراز",
                    "slug" => "shiraz",
                    "province_id" => 8
                ],
                [
                    "title" => "شيروان",
                    "slug" => "shirvan",
                    "province_id" => 29
                ],
                [
                    "title" => "صحنه",
                    "slug" => "scene",
                    "province_id" => 6
                ],
                [
                    "title" => "صومعه سرا",
                    "slug" => "somesara",
                    "province_id" => 2
                ],
                [
                    "title" => "طارم",
                    "slug" => "tarom",
                    "province_id" => 20
                ],
                [
                    "title" => "طالقان",
                    "slug" => "taleghan",
                    "province_id" => 31
                ],
                [
                    "title" => "طبس",
                    "slug" => "peaks",
                    "province_id" => 30
                ],
                [
                    "title" => "طوالش",
                    "slug" => "tvalsh",
                    "province_id" => 2
                ],
                [
                    "title" => "عباس آباد",
                    "slug" => "abbas-abad",
                    "province_id" => 3
                ],
                [
                    "title" => "عجب شير",
                    "slug" => "ajabshir",
                    "province_id" => 4
                ],
                [
                    "title" => "علي آباد",
                    "slug" => "ali-abad",
                    "province_id" => 28
                ],
                [
                    "title" => "عنبرآباد",
                    "slug" => "anbarabad",
                    "province_id" => 9
                ],
                [
                    "title" => "فارسان",
                    "slug" => "farsan",
                    "province_id" => 15
                ],
                [
                    "title" => "فاروج",
                    "slug" => "faruj",
                    "province_id" => 29
                ],
                [
                    "title" => "فراشبند",
                    "slug" => "farashband",
                    "province_id" => 8
                ],
                [
                    "title" => "فراهان",
                    "slug" => "farahan",
                    "province_id" => 1
                ],
                [
                    "title" => "فردوس",
                    "slug" => "paradise",
                    "province_id" => 30
                ],
                [
                    "title" => "فرديس",
                    "slug" => "fardis",
                    "province_id" => 31
                ],
                [
                    "title" => "فريدن",
                    "slug" => "frieden",
                    "province_id" => 11
                ],
                [
                    "title" => "فريدونشهر",
                    "slug" => "fereidunshahr",
                    "province_id" => 11
                ],
                [
                    "title" => "فريدونكنار",
                    "slug" => "fereidoon'kenar",
                    "province_id" => 3
                ],
                [
                    "title" => "فريمان",
                    "slug" => "fariman",
                    "province_id" => 10
                ],
                [
                    "title" => "فسا",
                    "slug" => "fasa",
                    "province_id" => 8
                ],
                [
                    "title" => "فلاورجان",
                    "slug" => "falavarjan",
                    "province_id" => 11
                ],
                [
                    "title" => "فنوج",
                    "slug" => "fenouj",
                    "province_id" => 12
                ],
                [
                    "title" => "فومن",
                    "slug" => "fooman",
                    "province_id" => 2
                ],
                [
                    "title" => "فيروزآباد",
                    "slug" => "firozabad",
                    "province_id" => 8
                ],
                [
                    "title" => "فيروزكوه",
                    "slug" => "firouzkouh",
                    "province_id" => 24
                ],
                [
                    "title" => "قائم شهر",
                    "slug" => "qaemshahr",
                    "province_id" => 3
                ],
                [
                    "title" => "قائنات",
                    "slug" => "ghaenat",
                    "province_id" => 30
                ],
                [
                    "title" => "قروه",
                    "slug" => "qorveh",
                    "province_id" => 13
                ],
                [
                    "title" => "قزوين",
                    "slug" => "qazvin",
                    "province_id" => 27
                ],
                [
                    "title" => "قشم",
                    "slug" => "qeshm",
                    "province_id" => 23
                ],
                [
                    "title" => "قصرشيرين",
                    "slug" => "qasr-e-shirin",
                    "province_id" => 6
                ],
                [
                    "title" => "قلعه گنج",
                    "slug" => "castle-treasure",
                    "province_id" => 9
                ],
                [
                    "title" => "قم",
                    "slug" => "qom",
                    "province_id" => 26
                ],
                [
                    "title" => "قوچان",
                    "slug" => "ghoochan",
                    "province_id" => 10
                ],
                [
                    "title" => "قيروکارزين",
                    "slug" => "qyrvkarzyn",
                    "province_id" => 8
                ],
                [
                    "title" => "كاشمر",
                    "slug" => "kashmar",
                    "province_id" => 10
                ],
                [
                    "title" => "كامياران",
                    "slug" => "kamyaran",
                    "province_id" => 13
                ],
                [
                    "title" => "كبودرآهنگ",
                    "slug" => "kaboudarahang",
                    "province_id" => 14
                ],
                [
                    "title" => "كرمان",
                    "slug" => "kerman",
                    "province_id" => 9
                ],
                [
                    "title" => "كلات",
                    "slug" => "kalat",
                    "province_id" => 10
                ],
                [
                    "title" => "كلاله",
                    "slug" => "stigma",
                    "province_id" => 28
                ],
                [
                    "title" => "كنگان",
                    "slug" => "kangan",
                    "province_id" => 19
                ],
                [
                    "title" => "كهنوج",
                    "slug" => "kahnooj",
                    "province_id" => 9
                ],
                [
                    "title" => "كوثر",
                    "slug" => "kosar",
                    "province_id" => 25
                ],
                [
                    "title" => "كوهبنان",
                    "slug" => "kuhbanan",
                    "province_id" => 9
                ],
                [
                    "title" => "كوهرنگ",
                    "slug" => "kouhrang",
                    "province_id" => 15
                ],
                [
                    "title" => "لارستان",
                    "slug" => "larestan",
                    "province_id" => 8
                ],
                [
                    "title" => "لالي",
                    "slug" => "lali",
                    "province_id" => 7
                ],
                [
                    "title" => "لامرد",
                    "slug" => "lamerd",
                    "province_id" => 8
                ],
                [
                    "title" => "لاهيجان",
                    "slug" => "lahijan",
                    "province_id" => 2
                ],
                [
                    "title" => "لردگان",
                    "slug" => "lordegan",
                    "province_id" => 15
                ],
                [
                    "title" => "لنجان",
                    "slug" => "lenjan",
                    "province_id" => 11
                ],
                [
                    "title" => "لنده",
                    "slug" => "landhi",
                    "province_id" => 18
                ],
                [
                    "title" => "لنگرود",
                    "slug" => "langerud",
                    "province_id" => 2
                ],
                [
                    "title" => "ماسال",
                    "slug" => "masal",
                    "province_id" => 2
                ],
                [
                    "title" => "ماكو",
                    "slug" => "maku",
                    "province_id" => 5
                ],
                [
                    "title" => "مانه وسملقان",
                    "slug" => "manet-vsmlqan",
                    "province_id" => 29
                ],
                [
                    "title" => "ماهنشان",
                    "slug" => "mahneshan",
                    "province_id" => 20
                ],
                [
                    "title" => "مبارکه",
                    "slug" => "mobarakeh",
                    "province_id" => 11
                ],
                [
                    "title" => "محلات",
                    "slug" => "mahalat",
                    "province_id" => 1
                ],
                [
                    "title" => "محمودآباد",
                    "slug" => "mahmudabad",
                    "province_id" => 3
                ],
                [
                    "title" => "مراغه",
                    "slug" => "maragheh",
                    "province_id" => 4
                ],
                [
                    "title" => "مرند",
                    "slug" => "marand",
                    "province_id" => 4
                ],
                [
                    "title" => "مرودشت",
                    "slug" => "marvdasht",
                    "province_id" => 8
                ],
                [
                    "title" => "مريوان",
                    "slug" => "marivan",
                    "province_id" => 13
                ],
                [
                    "title" => "مسجدسليمان",
                    "slug" => "masjed-soleiman",
                    "province_id" => 7
                ],
                [
                    "title" => "مشهد",
                    "slug" => "mashhad",
                    "province_id" => 10
                ],
                [
                    "title" => "مشگين شهر",
                    "slug" => "meshkinshar",
                    "province_id" => 25
                ],
                [
                    "title" => "ملارد",
                    "slug" => "mallard",
                    "province_id" => 24
                ],
                [
                    "title" => "ملاير",
                    "slug" => "malayer",
                    "province_id" => 14
                ],
                [
                    "title" => "ملکان",
                    "slug" => "malakan",
                    "province_id" => 4
                ],
                [
                    "title" => "ممسني",
                    "slug" => "mamasani",
                    "province_id" => 8
                ],
                [
                    "title" => "منوجان",
                    "slug" => "manoujan",
                    "province_id" => 9
                ],
                [
                    "title" => "مه ولات",
                    "slug" => "mahvelat",
                    "province_id" => 10
                ],
                [
                    "title" => "مهاباد",
                    "slug" => "mahabad",
                    "province_id" => 5
                ],
                [
                    "title" => "مهدئ شهر",
                    "slug" => "mehdi-city",
                    "province_id" => 21
                ],
                [
                    "title" => "مهر",
                    "slug" => "stamp",
                    "province_id" => 8
                ],
                [
                    "title" => "مهران",
                    "slug" => "mehran",
                    "province_id" => 17
                ],
                [
                    "title" => "مهرستان",
                    "slug" => "your-spouse",
                    "province_id" => 12
                ],
                [
                    "title" => "مهريز",
                    "slug" => "mehriz",
                    "province_id" => 22
                ],
                [
                    "title" => "مياندوآب",
                    "slug" => "miandoab",
                    "province_id" => 5
                ],
                [
                    "title" => "ميانه",
                    "slug" => "mianeh",
                    "province_id" => 4
                ],
                [
                    "title" => "ميبد",
                    "slug" => "meibod",
                    "province_id" => 22
                ],
                [
                    "title" => "ميناب",
                    "slug" => "minab",
                    "province_id" => 23
                ],
                [
                    "title" => "مينودشت",
                    "slug" => "minoodasht",
                    "province_id" => 28
                ],
                [
                    "title" => "نجف آباد",
                    "slug" => "najaf-abad",
                    "province_id" => 11
                ],
                [
                    "title" => "نرماشير",
                    "slug" => "narmashir",
                    "province_id" => 9
                ],
                [
                    "title" => "نطنز",
                    "slug" => "natanz",
                    "province_id" => 11
                ],
                [
                    "title" => "نظرآباد",
                    "slug" => "nazarabad",
                    "province_id" => 31
                ],
                [
                    "title" => "نقده",
                    "slug" => "tinsel",
                    "province_id" => 5
                ],
                [
                    "title" => "نمين",
                    "slug" => "namin",
                    "province_id" => 25
                ],
                [
                    "title" => "نهاوند",
                    "slug" => "skinheads",
                    "province_id" => 14
                ],
                [
                    "title" => "نهبندان",
                    "slug" => "nehbandan",
                    "province_id" => 30
                ],
                [
                    "title" => "نور",
                    "slug" => "nur",
                    "province_id" => 3
                ],
                [
                    "title" => "نوشهر",
                    "slug" => "noshahr",
                    "province_id" => 3
                ],
                [
                    "title" => "نير",
                    "slug" => "nir",
                    "province_id" => 25
                ],
                [
                    "title" => "نيشابور",
                    "slug" => "neyshabur",
                    "province_id" => 10
                ],
                [
                    "title" => "نيك شهر",
                    "slug" => "nikshahr",
                    "province_id" => 12
                ],
                [
                    "title" => "هرسين",
                    "slug" => "harsin",
                    "province_id" => 6
                ],
                [
                    "title" => "هريس",
                    "slug" => "harris",
                    "province_id" => 4
                ],
                [
                    "title" => "هشترود",
                    "slug" => "hashtrood",
                    "province_id" => 4
                ],
                [
                    "title" => "همدان",
                    "slug" => "hamedan",
                    "province_id" => 14
                ],
                [
                    "title" => "هنديجان",
                    "slug" => "hendijan",
                    "province_id" => 7
                ],
                [
                    "title" => "ورامين",
                    "slug" => "varamin",
                    "province_id" => 24
                ],
                [
                    "title" => "ورزقان",
                    "slug" => "varzeghan",
                    "province_id" => 4
                ],
                [
                    "title" => "پارس آباد",
                    "slug" => "pars-abad",
                    "province_id" => 25
                ],
                [
                    "title" => "پارسيان",
                    "slug" => "parsian",
                    "province_id" => 23
                ],
                [
                    "title" => "پاسارگاد",
                    "slug" => "pasargad",
                    "province_id" => 8
                ],
                [
                    "title" => "پاكدشت",
                    "slug" => "pakdasht",
                    "province_id" => 24
                ],
                [
                    "title" => "پاوه",
                    "slug" => "pave",
                    "province_id" => 6
                ],
                [
                    "title" => "پرديس",
                    "slug" => "college",
                    "province_id" => 24
                ],
                [
                    "title" => "پلدختر",
                    "slug" => "poldokhtar",
                    "province_id" => 16
                ],
                [
                    "title" => "پلدشت",
                    "slug" => "demands",
                    "province_id" => 5
                ],
                [
                    "title" => "پيرانشهر",
                    "slug" => "piranshar",
                    "province_id" => 5
                ],
                [
                    "title" => "چادگان",
                    "slug" => "chadegan",
                    "province_id" => 11
                ],
                [
                    "title" => "چاراويماق",
                    "slug" => "charoymagh",
                    "province_id" => 4
                ],
                [
                    "title" => "چالدران",
                    "slug" => "chalderan",
                    "province_id" => 5
                ],
                [
                    "title" => "چالوس",
                    "slug" => "chalus",
                    "province_id" => 3
                ],
                [
                    "title" => "چابهار",
                    "slug" => "chabahar",
                    "province_id" => 12
                ],
                [
                    "title" => "چناران",
                    "slug" => "chenaran",
                    "province_id" => 10
                ],
                [
                    "title" => "کارون",
                    "slug" => "karun",
                    "province_id" => 7
                ],
                [
                    "title" => "کازرون",
                    "slug" => "kazeroon",
                    "province_id" => 8
                ],
                [
                    "title" => "کاشان",
                    "slug" => "kashan",
                    "province_id" => 11
                ],
                [
                    "title" => "کرج",
                    "slug" => "karaj",
                    "province_id" => 31
                ],
                [
                    "title" => "کرمانشاه",
                    "slug" => "kermanshah",
                    "province_id" => 6
                ],
                [
                    "title" => "کلاردشت",
                    "slug" => "kelardasht",
                    "province_id" => 3
                ],
                [
                    "title" => "کليبر",
                    "slug" => "kalibar",
                    "province_id" => 4
                ],
                [
                    "title" => "کميجان",
                    "slug" => "komijan",
                    "province_id" => 1
                ],
                [
                    "title" => "کنگاور",
                    "slug" => "kangavar",
                    "province_id" => 6
                ],
                [
                    "title" => "کوار",
                    "slug" => "kovar",
                    "province_id" => 8
                ],
                [
                    "title" => "کوهدشت",
                    "slug" => "kuhdasht",
                    "province_id" => 16
                ],
                [
                    "title" => "گتوند",
                    "slug" => "scroll-down",
                    "province_id" => 7
                ],
                [
                    "title" => "گرمسار",
                    "slug" => "garmsar",
                    "province_id" => 21
                ],
                [
                    "title" => "گرمه",
                    "slug" => "garme",
                    "province_id" => 29
                ],
                [
                    "title" => "گرمي",
                    "slug" => "geramee",
                    "province_id" => 25
                ],
                [
                    "title" => "گرگان",
                    "slug" => "gorgan",
                    "province_id" => 28
                ],
                [
                    "title" => "گلوگاه",
                    "slug" => "galugah",
                    "province_id" => 3
                ],
                [
                    "title" => "گلپايگان",
                    "slug" => "golpaygan",
                    "province_id" => 11
                ],
                [
                    "title" => "گناباد",
                    "slug" => "gonabad",
                    "province_id" => 10
                ],
                [
                    "title" => "گناوه",
                    "slug" => "ganaveh",
                    "province_id" => 19
                ],
                [
                    "title" => "گنبدكاووس",
                    "slug" => "gonbad",
                    "province_id" => 28
                ],
                [
                    "title" => "گيلانغرب",
                    "slug" => "gilangharb",
                    "province_id" => 6
                ],
                [
                    "title" => "گچساران",
                    "slug" => "gachsaran",
                    "province_id" => 18
                ]
            ]
        );
    }
}
