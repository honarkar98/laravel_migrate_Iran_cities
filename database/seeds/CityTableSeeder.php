<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('city')->delete();
        
        \DB::table('city')->insert(array (
            0 => 
            array (
                'county_id' => 1,
                'id' => 1,
                'name' => 'آذرشهر',
                'province_id' => 1,
            ),
            1 => 
            array (
                'county_id' => 1,
                'id' => 2,
                'name' => 'تیمورلو',
                'province_id' => 1,
            ),
            2 => 
            array (
                'county_id' => 1,
                'id' => 3,
                'name' => 'گوگان',
                'province_id' => 1,
            ),
            3 => 
            array (
                'county_id' => 1,
                'id' => 4,
                'name' => 'ممقان',
                'province_id' => 1,
            ),
            4 => 
            array (
                'county_id' => 2,
                'id' => 5,
                'name' => 'اسکو',
                'province_id' => 1,
            ),
            5 => 
            array (
                'county_id' => 2,
                'id' => 6,
                'name' => 'ایلخچی',
                'province_id' => 1,
            ),
            6 => 
            array (
                'county_id' => 2,
                'id' => 7,
                'name' => 'سهند',
                'province_id' => 1,
            ),
            7 => 
            array (
                'county_id' => 3,
                'id' => 8,
                'name' => 'اهر',
                'province_id' => 1,
            ),
            8 => 
            array (
                'county_id' => 3,
                'id' => 9,
                'name' => 'هوراند',
                'province_id' => 1,
            ),
            9 => 
            array (
                'county_id' => 4,
                'id' => 10,
                'name' => 'بستان آباد',
                'province_id' => 1,
            ),
            10 => 
            array (
                'county_id' => 4,
                'id' => 11,
                'name' => 'تیکمه داش',
                'province_id' => 1,
            ),
            11 => 
            array (
                'county_id' => 5,
                'id' => 12,
                'name' => 'بناب',
                'province_id' => 1,
            ),
            12 => 
            array (
                'county_id' => 6,
                'id' => 13,
                'name' => 'باسمنج',
                'province_id' => 1,
            ),
            13 => 
            array (
                'county_id' => 6,
                'id' => 14,
                'name' => 'تبریز',
                'province_id' => 1,
            ),
            14 => 
            array (
                'county_id' => 6,
                'id' => 15,
                'name' => 'خسروشاه',
                'province_id' => 1,
            ),
            15 => 
            array (
                'county_id' => 6,
                'id' => 16,
                'name' => 'سردرود',
                'province_id' => 1,
            ),
            16 => 
            array (
                'county_id' => 7,
                'id' => 17,
                'name' => 'جلفا',
                'province_id' => 1,
            ),
            17 => 
            array (
                'county_id' => 7,
                'id' => 18,
                'name' => 'سیه رود',
                'province_id' => 1,
            ),
            18 => 
            array (
                'county_id' => 7,
                'id' => 19,
                'name' => 'هادیشهر',
                'province_id' => 1,
            ),
            19 => 
            array (
                'county_id' => 8,
                'id' => 20,
                'name' => 'قره آغاج',
                'province_id' => 1,
            ),
            20 => 
            array (
                'county_id' => 9,
                'id' => 21,
                'name' => 'خمارلو',
                'province_id' => 1,
            ),
            21 => 
            array (
                'county_id' => 10,
                'id' => 22,
                'name' => 'دوزدوزان',
                'province_id' => 1,
            ),
            22 => 
            array (
                'county_id' => 10,
                'id' => 23,
                'name' => 'سراب',
                'province_id' => 1,
            ),
            23 => 
            array (
                'county_id' => 10,
                'id' => 24,
                'name' => 'شربیان',
                'province_id' => 1,
            ),
            24 => 
            array (
                'county_id' => 10,
                'id' => 25,
                'name' => 'مهربان',
                'province_id' => 1,
            ),
            25 => 
            array (
                'county_id' => 11,
                'id' => 26,
                'name' => 'تسوج',
                'province_id' => 1,
            ),
            26 => 
            array (
                'county_id' => 11,
                'id' => 27,
                'name' => 'خامنه',
                'province_id' => 1,
            ),
            27 => 
            array (
                'county_id' => 11,
                'id' => 28,
                'name' => 'سیس',
                'province_id' => 1,
            ),
            28 => 
            array (
                'county_id' => 11,
                'id' => 29,
                'name' => 'شبستر',
                'province_id' => 1,
            ),
            29 => 
            array (
                'county_id' => 11,
                'id' => 30,
                'name' => 'شرفخانه',
                'province_id' => 1,
            ),
            30 => 
            array (
                'county_id' => 11,
                'id' => 31,
                'name' => 'شندآباد',
                'province_id' => 1,
            ),
            31 => 
            array (
                'county_id' => 11,
                'id' => 32,
                'name' => 'صوفیان',
                'province_id' => 1,
            ),
            32 => 
            array (
                'county_id' => 11,
                'id' => 33,
                'name' => 'کوزه کنان',
                'province_id' => 1,
            ),
            33 => 
            array (
                'county_id' => 11,
                'id' => 34,
                'name' => 'وایقان',
                'province_id' => 1,
            ),
            34 => 
            array (
                'county_id' => 12,
                'id' => 35,
                'name' => 'جوان قلعه',
                'province_id' => 1,
            ),
            35 => 
            array (
                'county_id' => 12,
                'id' => 36,
                'name' => 'عجب شیر',
                'province_id' => 1,
            ),
            36 => 
            array (
                'county_id' => 13,
                'id' => 37,
                'name' => 'آبش احمد',
                'province_id' => 1,
            ),
            37 => 
            array (
                'county_id' => 13,
                'id' => 38,
                'name' => 'کلیبر',
                'province_id' => 1,
            ),
            38 => 
            array (
                'county_id' => 14,
                'id' => 39,
            'name' => 'خداجو(خراجو)',
                'province_id' => 1,
            ),
            39 => 
            array (
                'county_id' => 14,
                'id' => 40,
                'name' => 'مراغه',
                'province_id' => 1,
            ),
            40 => 
            array (
                'county_id' => 15,
                'id' => 41,
                'name' => 'بناب مرند',
                'province_id' => 1,
            ),
            41 => 
            array (
                'county_id' => 15,
                'id' => 42,
                'name' => 'زنوز',
                'province_id' => 1,
            ),
            42 => 
            array (
                'county_id' => 15,
                'id' => 43,
                'name' => 'کشکسرای',
                'province_id' => 1,
            ),
            43 => 
            array (
                'county_id' => 15,
                'id' => 44,
                'name' => 'مرند',
                'province_id' => 1,
            ),
            44 => 
            array (
                'county_id' => 15,
                'id' => 45,
                'name' => 'یامچی',
                'province_id' => 1,
            ),
            45 => 
            array (
                'county_id' => 16,
                'id' => 46,
                'name' => 'لیلان',
                'province_id' => 1,
            ),
            46 => 
            array (
                'county_id' => 16,
                'id' => 47,
                'name' => 'مبارک شهر',
                'province_id' => 1,
            ),
            47 => 
            array (
                'county_id' => 16,
                'id' => 48,
                'name' => 'ملکان',
                'province_id' => 1,
            ),
            48 => 
            array (
                'county_id' => 17,
                'id' => 49,
                'name' => 'آقکند',
                'province_id' => 1,
            ),
            49 => 
            array (
                'county_id' => 17,
                'id' => 50,
                'name' => 'اچاچی',
                'province_id' => 1,
            ),
            50 => 
            array (
                'county_id' => 17,
                'id' => 51,
                'name' => 'ترک',
                'province_id' => 1,
            ),
            51 => 
            array (
                'county_id' => 17,
                'id' => 52,
                'name' => 'ترکمانچای',
                'province_id' => 1,
            ),
            52 => 
            array (
                'county_id' => 17,
                'id' => 53,
                'name' => 'میانه',
                'province_id' => 1,
            ),
            53 => 
            array (
                'county_id' => 18,
                'id' => 54,
                'name' => 'خاروانا',
                'province_id' => 1,
            ),
            54 => 
            array (
                'county_id' => 18,
                'id' => 55,
                'name' => 'ورزقان',
                'province_id' => 1,
            ),
            55 => 
            array (
                'county_id' => 19,
                'id' => 56,
                'name' => 'بخشایش',
                'province_id' => 1,
            ),
            56 => 
            array (
                'county_id' => 19,
                'id' => 57,
                'name' => 'خواجه',
                'province_id' => 1,
            ),
            57 => 
            array (
                'county_id' => 19,
                'id' => 58,
                'name' => 'زرنق',
                'province_id' => 1,
            ),
            58 => 
            array (
                'county_id' => 19,
                'id' => 59,
                'name' => 'کلوانق',
                'province_id' => 1,
            ),
            59 => 
            array (
                'county_id' => 19,
                'id' => 60,
                'name' => 'هریس',
                'province_id' => 1,
            ),
            60 => 
            array (
                'county_id' => 20,
                'id' => 61,
                'name' => 'نظرکهریزی',
                'province_id' => 1,
            ),
            61 => 
            array (
                'county_id' => 20,
                'id' => 62,
                'name' => 'هشترود',
                'province_id' => 1,
            ),
            62 => 
            array (
                'county_id' => 21,
                'id' => 63,
                'name' => 'ارومیه',
                'province_id' => 2,
            ),
            63 => 
            array (
                'county_id' => 21,
                'id' => 64,
                'name' => 'سرو',
                'province_id' => 2,
            ),
            64 => 
            array (
                'county_id' => 21,
                'id' => 65,
                'name' => 'سیلوانه',
                'province_id' => 2,
            ),
            65 => 
            array (
                'county_id' => 21,
                'id' => 66,
                'name' => 'قوشچی',
                'province_id' => 2,
            ),
            66 => 
            array (
                'county_id' => 21,
                'id' => 67,
                'name' => 'نوشین',
                'province_id' => 2,
            ),
            67 => 
            array (
                'county_id' => 22,
                'id' => 68,
                'name' => 'اشنویه',
                'province_id' => 2,
            ),
            68 => 
            array (
                'county_id' => 22,
                'id' => 69,
                'name' => 'نالوس',
                'province_id' => 2,
            ),
            69 => 
            array (
                'county_id' => 23,
                'id' => 70,
                'name' => 'بوکان',
                'province_id' => 2,
            ),
            70 => 
            array (
                'county_id' => 23,
                'id' => 71,
                'name' => 'سیمینه',
                'province_id' => 2,
            ),
            71 => 
            array (
                'county_id' => 24,
                'id' => 72,
                'name' => 'پلدشت',
                'province_id' => 2,
            ),
            72 => 
            array (
                'county_id' => 24,
                'id' => 73,
                'name' => 'نازک علیا',
                'province_id' => 2,
            ),
            73 => 
            array (
                'county_id' => 25,
                'id' => 74,
                'name' => 'پیرانشهر',
                'province_id' => 2,
            ),
            74 => 
            array (
                'county_id' => 25,
                'id' => 75,
                'name' => 'گردکشانه',
                'province_id' => 2,
            ),
            75 => 
            array (
                'county_id' => 26,
                'id' => 76,
                'name' => 'تکاب',
                'province_id' => 2,
            ),
            76 => 
            array (
                'county_id' => 27,
                'id' => 77,
                'name' => 'آواجیق',
                'province_id' => 2,
            ),
            77 => 
            array (
                'county_id' => 27,
                'id' => 78,
                'name' => 'سیه چشمه',
                'province_id' => 2,
            ),
            78 => 
            array (
                'county_id' => 28,
                'id' => 79,
                'name' => 'قره ضیاءالدین',
                'province_id' => 2,
            ),
            79 => 
            array (
                'county_id' => 29,
                'id' => 80,
                'name' => 'ایواوغلی',
                'province_id' => 2,
            ),
            80 => 
            array (
                'county_id' => 29,
                'id' => 81,
                'name' => 'خوی',
                'province_id' => 2,
            ),
            81 => 
            array (
                'county_id' => 29,
                'id' => 82,
                'name' => 'دیزج دیز',
                'province_id' => 2,
            ),
            82 => 
            array (
                'county_id' => 29,
                'id' => 83,
                'name' => 'زرآباد',
                'province_id' => 2,
            ),
            83 => 
            array (
                'county_id' => 29,
                'id' => 84,
                'name' => 'فیرورق',
                'province_id' => 2,
            ),
            84 => 
            array (
                'county_id' => 29,
                'id' => 85,
                'name' => 'قطور',
                'province_id' => 2,
            ),
            85 => 
            array (
                'county_id' => 30,
                'id' => 86,
                'name' => 'ربط',
                'province_id' => 2,
            ),
            86 => 
            array (
                'county_id' => 30,
                'id' => 87,
                'name' => 'سردشت',
                'province_id' => 2,
            ),
            87 => 
            array (
                'county_id' => 30,
                'id' => 88,
                'name' => 'میرآباد',
                'province_id' => 2,
            ),
            88 => 
            array (
                'county_id' => 31,
                'id' => 89,
                'name' => 'تازه شهر',
                'province_id' => 2,
            ),
            89 => 
            array (
                'county_id' => 31,
                'id' => 90,
                'name' => 'سلماس',
                'province_id' => 2,
            ),
            90 => 
            array (
                'county_id' => 32,
                'id' => 91,
                'name' => 'شاهین دژ',
                'province_id' => 2,
            ),
            91 => 
            array (
                'county_id' => 32,
                'id' => 92,
                'name' => 'کشاورز',
                'province_id' => 2,
            ),
            92 => 
            array (
                'county_id' => 32,
                'id' => 93,
                'name' => 'محمودآباد',
                'province_id' => 2,
            ),
            93 => 
            array (
                'county_id' => 33,
                'id' => 94,
                'name' => 'شوط',
                'province_id' => 2,
            ),
            94 => 
            array (
                'county_id' => 33,
                'id' => 95,
                'name' => 'مرگنلر',
                'province_id' => 2,
            ),
            95 => 
            array (
                'county_id' => 34,
                'id' => 96,
                'name' => 'بازرگان',
                'province_id' => 2,
            ),
            96 => 
            array (
                'county_id' => 34,
                'id' => 97,
                'name' => 'ماکو',
                'province_id' => 2,
            ),
            97 => 
            array (
                'county_id' => 35,
                'id' => 98,
                'name' => 'خلیفان',
                'province_id' => 2,
            ),
            98 => 
            array (
                'county_id' => 35,
                'id' => 99,
                'name' => 'مهاباد',
                'province_id' => 2,
            ),
            99 => 
            array (
                'county_id' => 36,
                'id' => 100,
                'name' => 'باروق',
                'province_id' => 2,
            ),
            100 => 
            array (
                'county_id' => 36,
                'id' => 101,
                'name' => 'چهاربرج',
                'province_id' => 2,
            ),
            101 => 
            array (
                'county_id' => 36,
                'id' => 102,
                'name' => 'میاندوآب',
                'province_id' => 2,
            ),
            102 => 
            array (
                'county_id' => 37,
                'id' => 103,
                'name' => 'محمدیار',
                'province_id' => 2,
            ),
            103 => 
            array (
                'county_id' => 37,
                'id' => 104,
                'name' => 'نقده',
                'province_id' => 2,
            ),
            104 => 
            array (
                'county_id' => 38,
                'id' => 105,
                'name' => 'اردبیل',
                'province_id' => 3,
            ),
            105 => 
            array (
                'county_id' => 38,
                'id' => 106,
                'name' => 'هیر',
                'province_id' => 3,
            ),
            106 => 
            array (
                'county_id' => 39,
                'id' => 107,
                'name' => 'بیله سوار',
                'province_id' => 3,
            ),
            107 => 
            array (
                'county_id' => 39,
                'id' => 108,
                'name' => 'جعفرآباد',
                'province_id' => 3,
            ),
            108 => 
            array (
                'county_id' => 40,
                'id' => 109,
                'name' => 'اسلام اباد',
                'province_id' => 3,
            ),
            109 => 
            array (
                'county_id' => 40,
                'id' => 110,
                'name' => 'اصلاندوز',
                'province_id' => 3,
            ),
            110 => 
            array (
                'county_id' => 40,
                'id' => 111,
                'name' => 'پارس آباد',
                'province_id' => 3,
            ),
            111 => 
            array (
                'county_id' => 40,
                'id' => 112,
                'name' => 'تازه کند',
                'province_id' => 3,
            ),
            112 => 
            array (
                'county_id' => 41,
                'id' => 113,
                'name' => 'خلخال',
                'province_id' => 3,
            ),
            113 => 
            array (
                'county_id' => 41,
                'id' => 114,
                'name' => 'کلور',
                'province_id' => 3,
            ),
            114 => 
            array (
                'county_id' => 41,
                'id' => 115,
                'name' => 'هشتجین',
                'province_id' => 3,
            ),
            115 => 
            array (
                'county_id' => 42,
                'id' => 116,
                'name' => 'سرعین',
                'province_id' => 3,
            ),
            116 => 
            array (
                'county_id' => 43,
                'id' => 117,
                'name' => 'گیوی',
                'province_id' => 3,
            ),
            117 => 
            array (
                'county_id' => 44,
                'id' => 118,
                'name' => 'تازه کندانگوت',
                'province_id' => 3,
            ),
            118 => 
            array (
                'county_id' => 44,
                'id' => 119,
                'name' => 'گرمی',
                'province_id' => 3,
            ),
            119 => 
            array (
                'county_id' => 45,
                'id' => 120,
                'name' => 'رضی',
                'province_id' => 3,
            ),
            120 => 
            array (
                'county_id' => 45,
                'id' => 121,
                'name' => 'فخراباد',
                'province_id' => 3,
            ),
            121 => 
            array (
                'county_id' => 45,
                'id' => 122,
                'name' => 'قصابه',
                'province_id' => 3,
            ),
            122 => 
            array (
                'county_id' => 45,
                'id' => 123,
                'name' => 'لاهرود',
                'province_id' => 3,
            ),
            123 => 
            array (
                'county_id' => 45,
                'id' => 124,
                'name' => 'مرادلو',
                'province_id' => 3,
            ),
            124 => 
            array (
                'county_id' => 45,
                'id' => 125,
                'name' => 'مشگین شهر',
                'province_id' => 3,
            ),
            125 => 
            array (
                'county_id' => 46,
                'id' => 126,
                'name' => 'آبی بیگلو',
                'province_id' => 3,
            ),
            126 => 
            array (
                'county_id' => 46,
                'id' => 127,
                'name' => 'عنبران',
                'province_id' => 3,
            ),
            127 => 
            array (
                'county_id' => 46,
                'id' => 128,
                'name' => 'نمین',
                'province_id' => 3,
            ),
            128 => 
            array (
                'county_id' => 47,
                'id' => 129,
                'name' => 'کوراییم',
                'province_id' => 3,
            ),
            129 => 
            array (
                'county_id' => 47,
                'id' => 130,
                'name' => 'نیر',
                'province_id' => 3,
            ),
            130 => 
            array (
                'county_id' => 48,
                'id' => 131,
                'name' => 'آران وبیدگل',
                'province_id' => 4,
            ),
            131 => 
            array (
                'county_id' => 48,
                'id' => 132,
                'name' => 'ابوزیدآباد',
                'province_id' => 4,
            ),
            132 => 
            array (
                'county_id' => 48,
                'id' => 133,
                'name' => 'سفیدشهر',
                'province_id' => 4,
            ),
            133 => 
            array (
                'county_id' => 48,
                'id' => 134,
                'name' => 'نوش آباد',
                'province_id' => 4,
            ),
            134 => 
            array (
                'county_id' => 49,
                'id' => 135,
                'name' => 'اردستان',
                'province_id' => 4,
            ),
            135 => 
            array (
                'county_id' => 49,
                'id' => 136,
                'name' => 'زواره',
                'province_id' => 4,
            ),
            136 => 
            array (
                'county_id' => 49,
                'id' => 137,
                'name' => 'مهاباد',
                'province_id' => 4,
            ),
            137 => 
            array (
                'county_id' => 50,
                'id' => 138,
                'name' => 'اژیه',
                'province_id' => 4,
            ),
            138 => 
            array (
                'county_id' => 50,
                'id' => 139,
                'name' => 'اصفهان',
                'province_id' => 4,
            ),
            139 => 
            array (
                'county_id' => 50,
                'id' => 140,
                'name' => 'بهارستان',
                'province_id' => 4,
            ),
            140 => 
            array (
                'county_id' => 50,
                'id' => 141,
                'name' => 'تودشک',
                'province_id' => 4,
            ),
            141 => 
            array (
                'county_id' => 50,
                'id' => 142,
                'name' => 'حسن اباد',
                'province_id' => 4,
            ),
            142 => 
            array (
                'county_id' => 50,
                'id' => 143,
                'name' => 'زیار',
                'province_id' => 4,
            ),
            143 => 
            array (
                'county_id' => 50,
                'id' => 144,
                'name' => 'سجزی',
                'province_id' => 4,
            ),
            144 => 
            array (
                'county_id' => 50,
                'id' => 145,
                'name' => 'قهجاورستان',
                'province_id' => 4,
            ),
            145 => 
            array (
                'county_id' => 50,
                'id' => 146,
                'name' => 'کوهپایه',
                'province_id' => 4,
            ),
            146 => 
            array (
                'county_id' => 50,
                'id' => 147,
                'name' => 'محمدآباد',
                'province_id' => 4,
            ),
            147 => 
            array (
                'county_id' => 50,
                'id' => 148,
                'name' => 'نصرآباد',
                'province_id' => 4,
            ),
            148 => 
            array (
                'county_id' => 50,
                'id' => 149,
                'name' => 'نیک آباد',
                'province_id' => 4,
            ),
            149 => 
            array (
                'county_id' => 50,
                'id' => 150,
                'name' => 'ورزنه',
                'province_id' => 4,
            ),
            150 => 
            array (
                'county_id' => 50,
                'id' => 151,
                'name' => 'هرند',
                'province_id' => 4,
            ),
            151 => 
            array (
                'county_id' => 51,
                'id' => 152,
                'name' => 'حبیب آباد',
                'province_id' => 4,
            ),
            152 => 
            array (
                'county_id' => 51,
                'id' => 153,
                'name' => 'خورزوق',
                'province_id' => 4,
            ),
            153 => 
            array (
                'county_id' => 51,
                'id' => 154,
                'name' => 'دستگرد',
                'province_id' => 4,
            ),
            154 => 
            array (
                'county_id' => 51,
                'id' => 155,
                'name' => 'دولت آباد',
                'province_id' => 4,
            ),
            155 => 
            array (
                'county_id' => 51,
                'id' => 156,
                'name' => 'سین',
                'province_id' => 4,
            ),
            156 => 
            array (
                'county_id' => 51,
                'id' => 157,
                'name' => 'شاپورآباد',
                'province_id' => 4,
            ),
            157 => 
            array (
                'county_id' => 51,
                'id' => 158,
                'name' => 'کمشچه',
                'province_id' => 4,
            ),
            158 => 
            array (
                'county_id' => 52,
                'id' => 159,
                'name' => 'افوس',
                'province_id' => 4,
            ),
            159 => 
            array (
                'county_id' => 52,
                'id' => 160,
                'name' => 'بویین ومیاندشت',
                'province_id' => 4,
            ),
            160 => 
            array (
                'county_id' => 53,
                'id' => 161,
                'name' => 'تیران',
                'province_id' => 4,
            ),
            161 => 
            array (
                'county_id' => 53,
                'id' => 162,
                'name' => 'رضوانشهر',
                'province_id' => 4,
            ),
            162 => 
            array (
                'county_id' => 53,
                'id' => 163,
                'name' => 'عسگران',
                'province_id' => 4,
            ),
            163 => 
            array (
                'county_id' => 54,
                'id' => 164,
                'name' => 'چادگان',
                'province_id' => 4,
            ),
            164 => 
            array (
                'county_id' => 54,
                'id' => 165,
                'name' => 'رزوه',
                'province_id' => 4,
            ),
            165 => 
            array (
                'county_id' => 55,
                'id' => 166,
                'name' => 'اصغرآباد',
                'province_id' => 4,
            ),
            166 => 
            array (
                'county_id' => 55,
                'id' => 167,
                'name' => 'خمینی شهر',
                'province_id' => 4,
            ),
            167 => 
            array (
                'county_id' => 55,
                'id' => 168,
                'name' => 'درچه',
                'province_id' => 4,
            ),
            168 => 
            array (
                'county_id' => 55,
                'id' => 169,
                'name' => 'کوشک',
                'province_id' => 4,
            ),
            169 => 
            array (
                'county_id' => 56,
                'id' => 170,
                'name' => 'خوانسار',
                'province_id' => 4,
            ),
            170 => 
            array (
                'county_id' => 57,
                'id' => 171,
                'name' => 'جندق',
                'province_id' => 4,
            ),
            171 => 
            array (
                'county_id' => 57,
                'id' => 172,
                'name' => 'خور',
                'province_id' => 4,
            ),
            172 => 
            array (
                'county_id' => 57,
                'id' => 173,
                'name' => 'فرخی',
                'province_id' => 4,
            ),
            173 => 
            array (
                'county_id' => 58,
                'id' => 174,
                'name' => 'دهاقان',
                'province_id' => 4,
            ),
            174 => 
            array (
                'county_id' => 58,
                'id' => 175,
                'name' => 'گلشن',
                'province_id' => 4,
            ),
            175 => 
            array (
                'county_id' => 59,
                'id' => 176,
                'name' => 'حنا',
                'province_id' => 4,
            ),
            176 => 
            array (
                'county_id' => 59,
                'id' => 177,
                'name' => 'سمیرم',
                'province_id' => 4,
            ),
            177 => 
            array (
                'county_id' => 59,
                'id' => 178,
                'name' => 'کمه',
                'province_id' => 4,
            ),
            178 => 
            array (
                'county_id' => 59,
                'id' => 179,
                'name' => 'ونک',
                'province_id' => 4,
            ),
            179 => 
            array (
                'county_id' => 60,
                'id' => 180,
                'name' => 'شاهین شهر',
                'province_id' => 4,
            ),
            180 => 
            array (
                'county_id' => 60,
                'id' => 181,
                'name' => 'گرگاب',
                'province_id' => 4,
            ),
            181 => 
            array (
                'county_id' => 60,
                'id' => 182,
                'name' => 'گزبرخوار',
                'province_id' => 4,
            ),
            182 => 
            array (
                'county_id' => 60,
                'id' => 183,
                'name' => 'لای بید',
                'province_id' => 4,
            ),
            183 => 
            array (
                'county_id' => 60,
                'id' => 184,
                'name' => 'میمه',
                'province_id' => 4,
            ),
            184 => 
            array (
                'county_id' => 60,
                'id' => 185,
                'name' => 'وزوان',
                'province_id' => 4,
            ),
            185 => 
            array (
                'county_id' => 61,
                'id' => 186,
                'name' => 'شهرضا',
                'province_id' => 4,
            ),
            186 => 
            array (
                'county_id' => 61,
                'id' => 187,
                'name' => 'منظریه',
                'province_id' => 4,
            ),
            187 => 
            array (
                'county_id' => 62,
                'id' => 188,
                'name' => 'داران',
                'province_id' => 4,
            ),
            188 => 
            array (
                'county_id' => 62,
                'id' => 189,
                'name' => 'دامنه',
                'province_id' => 4,
            ),
            189 => 
            array (
                'county_id' => 63,
                'id' => 190,
                'name' => 'برف انبار',
                'province_id' => 4,
            ),
            190 => 
            array (
                'county_id' => 63,
                'id' => 191,
                'name' => 'فریدونشهر',
                'province_id' => 4,
            ),
            191 => 
            array (
                'county_id' => 64,
                'id' => 192,
                'name' => 'ابریشم',
                'province_id' => 4,
            ),
            192 => 
            array (
                'county_id' => 64,
                'id' => 193,
                'name' => 'ایمانشهر',
                'province_id' => 4,
            ),
            193 => 
            array (
                'county_id' => 64,
                'id' => 194,
                'name' => 'بهاران شهر',
                'province_id' => 4,
            ),
            194 => 
            array (
                'county_id' => 64,
                'id' => 195,
                'name' => 'پیربکران',
                'province_id' => 4,
            ),
            195 => 
            array (
                'county_id' => 64,
                'id' => 196,
                'name' => 'زازران',
                'province_id' => 4,
            ),
            196 => 
            array (
                'county_id' => 64,
                'id' => 197,
                'name' => 'فلاورجان',
                'province_id' => 4,
            ),
            197 => 
            array (
                'county_id' => 64,
                'id' => 198,
                'name' => 'قهدریجان',
                'province_id' => 4,
            ),
            198 => 
            array (
                'county_id' => 64,
                'id' => 199,
                'name' => 'کلیشادوسودرجان',
                'province_id' => 4,
            ),
            199 => 
            array (
                'county_id' => 65,
                'id' => 200,
                'name' => 'برزک',
                'province_id' => 4,
            ),
            200 => 
            array (
                'county_id' => 65,
                'id' => 201,
                'name' => 'جوشقان قالی',
                'province_id' => 4,
            ),
            201 => 
            array (
                'county_id' => 65,
                'id' => 202,
                'name' => 'قمصر',
                'province_id' => 4,
            ),
            202 => 
            array (
                'county_id' => 65,
                'id' => 203,
                'name' => 'کاشان',
                'province_id' => 4,
            ),
            203 => 
            array (
                'county_id' => 65,
                'id' => 204,
                'name' => 'کامو و چوگان',
                'province_id' => 4,
            ),
            204 => 
            array (
                'county_id' => 65,
                'id' => 205,
                'name' => 'مشکات',
                'province_id' => 4,
            ),
            205 => 
            array (
                'county_id' => 65,
                'id' => 206,
                'name' => 'نیاسر',
                'province_id' => 4,
            ),
            206 => 
            array (
                'county_id' => 66,
                'id' => 207,
                'name' => 'گلپایگان',
                'province_id' => 4,
            ),
            207 => 
            array (
                'county_id' => 66,
                'id' => 208,
                'name' => 'گلشهر',
                'province_id' => 4,
            ),
            208 => 
            array (
                'county_id' => 66,
                'id' => 209,
                'name' => 'گوگد',
                'province_id' => 4,
            ),
            209 => 
            array (
                'county_id' => 67,
                'id' => 210,
                'name' => 'باغ بهادران',
                'province_id' => 4,
            ),
            210 => 
            array (
                'county_id' => 67,
                'id' => 211,
                'name' => 'باغشاد',
                'province_id' => 4,
            ),
            211 => 
            array (
                'county_id' => 67,
                'id' => 212,
                'name' => 'چرمهین',
                'province_id' => 4,
            ),
            212 => 
            array (
                'county_id' => 67,
                'id' => 213,
                'name' => 'چمگردان',
                'province_id' => 4,
            ),
            213 => 
            array (
                'county_id' => 67,
                'id' => 214,
                'name' => 'زاینده رود',
                'province_id' => 4,
            ),
            214 => 
            array (
                'county_id' => 67,
                'id' => 215,
                'name' => 'زرین شهر',
                'province_id' => 4,
            ),
            215 => 
            array (
                'county_id' => 67,
                'id' => 216,
                'name' => 'سده لنجان',
                'province_id' => 4,
            ),
            216 => 
            array (
                'county_id' => 67,
                'id' => 217,
                'name' => 'فولادشهر',
                'province_id' => 4,
            ),
            217 => 
            array (
                'county_id' => 67,
                'id' => 218,
                'name' => 'ورنامخواست',
                'province_id' => 4,
            ),
            218 => 
            array (
                'county_id' => 68,
                'id' => 219,
                'name' => 'دیزیچه',
                'province_id' => 4,
            ),
            219 => 
            array (
                'county_id' => 68,
                'id' => 220,
                'name' => 'زیباشهر',
                'province_id' => 4,
            ),
            220 => 
            array (
                'county_id' => 68,
                'id' => 221,
                'name' => 'طالخونچه',
                'province_id' => 4,
            ),
            221 => 
            array (
                'county_id' => 68,
                'id' => 222,
                'name' => 'کرکوند',
                'province_id' => 4,
            ),
            222 => 
            array (
                'county_id' => 68,
                'id' => 223,
                'name' => 'مبارکه',
                'province_id' => 4,
            ),
            223 => 
            array (
                'county_id' => 68,
                'id' => 224,
                'name' => 'مجلسی',
                'province_id' => 4,
            ),
            224 => 
            array (
                'county_id' => 69,
                'id' => 225,
                'name' => 'انارک',
                'province_id' => 4,
            ),
            225 => 
            array (
                'county_id' => 69,
                'id' => 226,
                'name' => 'بافران',
                'province_id' => 4,
            ),
            226 => 
            array (
                'county_id' => 69,
                'id' => 227,
                'name' => 'نایین',
                'province_id' => 4,
            ),
            227 => 
            array (
                'county_id' => 70,
                'id' => 228,
                'name' => 'جوزدان',
                'province_id' => 4,
            ),
            228 => 
            array (
                'county_id' => 70,
                'id' => 229,
                'name' => 'دهق',
                'province_id' => 4,
            ),
            229 => 
            array (
                'county_id' => 70,
                'id' => 230,
                'name' => 'علویجه',
                'province_id' => 4,
            ),
            230 => 
            array (
                'county_id' => 70,
                'id' => 231,
                'name' => 'کهریزسنگ',
                'province_id' => 4,
            ),
            231 => 
            array (
                'county_id' => 70,
                'id' => 232,
                'name' => 'گلدشت',
                'province_id' => 4,
            ),
            232 => 
            array (
                'county_id' => 70,
                'id' => 233,
                'name' => 'نجف آباد',
                'province_id' => 4,
            ),
            233 => 
            array (
                'county_id' => 71,
                'id' => 234,
                'name' => 'بادرود',
                'province_id' => 4,
            ),
            234 => 
            array (
                'county_id' => 71,
                'id' => 235,
                'name' => 'خالدآباد',
                'province_id' => 4,
            ),
            235 => 
            array (
                'county_id' => 71,
                'id' => 236,
                'name' => 'طرق رود',
                'province_id' => 4,
            ),
            236 => 
            array (
                'county_id' => 71,
                'id' => 237,
                'name' => 'نطنز',
                'province_id' => 4,
            ),
            237 => 
            array (
                'county_id' => 72,
                'id' => 238,
                'name' => 'اشتهارد',
                'province_id' => 5,
            ),
            238 => 
            array (
                'county_id' => 73,
                'id' => 239,
                'name' => 'چهارباغ',
                'province_id' => 5,
            ),
            239 => 
            array (
                'county_id' => 73,
                'id' => 240,
                'name' => 'شهرجدیدهشتگرد',
                'province_id' => 5,
            ),
            240 => 
            array (
                'county_id' => 73,
                'id' => 241,
                'name' => 'کوهسار',
                'province_id' => 5,
            ),
            241 => 
            array (
                'county_id' => 73,
                'id' => 242,
                'name' => 'گلسار',
                'province_id' => 5,
            ),
            242 => 
            array (
                'county_id' => 73,
                'id' => 243,
                'name' => 'هشتگرد',
                'province_id' => 5,
            ),
            243 => 
            array (
                'county_id' => 74,
                'id' => 244,
                'name' => 'طالقان',
                'province_id' => 5,
            ),
            244 => 
            array (
                'county_id' => 75,
                'id' => 245,
                'name' => 'فردیس',
                'province_id' => 5,
            ),
            245 => 
            array (
                'county_id' => 75,
                'id' => 246,
                'name' => 'مشکین دشت',
                'province_id' => 5,
            ),
            246 => 
            array (
                'county_id' => 76,
                'id' => 247,
                'name' => 'آسارا',
                'province_id' => 5,
            ),
            247 => 
            array (
                'county_id' => 76,
                'id' => 248,
                'name' => 'کرج',
                'province_id' => 5,
            ),
            248 => 
            array (
                'county_id' => 76,
                'id' => 249,
                'name' => 'کمال شهر',
                'province_id' => 5,
            ),
            249 => 
            array (
                'county_id' => 76,
                'id' => 250,
                'name' => 'گرمدره',
                'province_id' => 5,
            ),
            250 => 
            array (
                'county_id' => 76,
                'id' => 251,
                'name' => 'ماهدشت',
                'province_id' => 5,
            ),
            251 => 
            array (
                'county_id' => 76,
                'id' => 252,
                'name' => 'محمدشهر',
                'province_id' => 5,
            ),
            252 => 
            array (
                'county_id' => 77,
                'id' => 253,
                'name' => 'تنکمان',
                'province_id' => 5,
            ),
            253 => 
            array (
                'county_id' => 77,
                'id' => 254,
                'name' => 'نظرآباد',
                'province_id' => 5,
            ),
            254 => 
            array (
                'county_id' => 78,
                'id' => 255,
                'name' => 'آبدانان',
                'province_id' => 6,
            ),
            255 => 
            array (
                'county_id' => 78,
                'id' => 256,
                'name' => 'سراب باغ',
                'province_id' => 6,
            ),
            256 => 
            array (
                'county_id' => 78,
                'id' => 257,
                'name' => 'مورموری',
                'province_id' => 6,
            ),
            257 => 
            array (
                'county_id' => 79,
                'id' => 258,
                'name' => 'ایلام',
                'province_id' => 6,
            ),
            258 => 
            array (
                'county_id' => 79,
                'id' => 259,
                'name' => 'چوار',
                'province_id' => 6,
            ),
            259 => 
            array (
                'county_id' => 80,
                'id' => 260,
                'name' => 'ایوان',
                'province_id' => 6,
            ),
            260 => 
            array (
                'county_id' => 80,
                'id' => 261,
                'name' => 'زرنه',
                'province_id' => 6,
            ),
            261 => 
            array (
                'county_id' => 81,
                'id' => 262,
                'name' => 'بدره',
                'province_id' => 6,
            ),
            262 => 
            array (
                'county_id' => 82,
                'id' => 263,
                'name' => 'آسمان آباد',
                'province_id' => 6,
            ),
            263 => 
            array (
                'county_id' => 82,
                'id' => 264,
                'name' => 'بلاوه',
                'province_id' => 6,
            ),
            264 => 
            array (
                'county_id' => 82,
                'id' => 265,
                'name' => 'توحید',
                'province_id' => 6,
            ),
            265 => 
            array (
                'county_id' => 82,
                'id' => 266,
                'name' => 'سرابله',
                'province_id' => 6,
            ),
            266 => 
            array (
                'county_id' => 82,
                'id' => 267,
                'name' => 'شباب',
                'province_id' => 6,
            ),
            267 => 
            array (
                'county_id' => 83,
                'id' => 268,
                'name' => 'دره شهر',
                'province_id' => 6,
            ),
            268 => 
            array (
                'county_id' => 83,
                'id' => 269,
                'name' => 'ماژین',
                'province_id' => 6,
            ),
            269 => 
            array (
                'county_id' => 84,
                'id' => 270,
                'name' => 'پهله',
                'province_id' => 6,
            ),
            270 => 
            array (
                'county_id' => 84,
                'id' => 271,
                'name' => 'دهلران',
                'province_id' => 6,
            ),
            271 => 
            array (
                'county_id' => 84,
                'id' => 272,
                'name' => 'موسیان',
                'province_id' => 6,
            ),
            272 => 
            array (
                'county_id' => 84,
                'id' => 273,
                'name' => 'میمه',
                'province_id' => 6,
            ),
            273 => 
            array (
                'county_id' => 85,
                'id' => 274,
                'name' => 'لومار',
                'province_id' => 6,
            ),
            274 => 
            array (
                'county_id' => 86,
                'id' => 275,
                'name' => 'ارکواز',
                'province_id' => 6,
            ),
            275 => 
            array (
                'county_id' => 86,
                'id' => 276,
                'name' => 'دلگشا',
                'province_id' => 6,
            ),
            276 => 
            array (
                'county_id' => 86,
                'id' => 277,
                'name' => 'مهر',
                'province_id' => 6,
            ),
            277 => 
            array (
                'county_id' => 87,
                'id' => 278,
                'name' => 'صالح آباد',
                'province_id' => 6,
            ),
            278 => 
            array (
                'county_id' => 87,
                'id' => 279,
                'name' => 'مهران',
                'province_id' => 6,
            ),
            279 => 
            array (
                'county_id' => 88,
                'id' => 280,
                'name' => 'بوشهر',
                'province_id' => 7,
            ),
            280 => 
            array (
                'county_id' => 88,
                'id' => 281,
                'name' => 'چغادک',
                'province_id' => 7,
            ),
            281 => 
            array (
                'county_id' => 88,
                'id' => 282,
                'name' => 'خارک',
                'province_id' => 7,
            ),
            282 => 
            array (
                'county_id' => 88,
                'id' => 283,
                'name' => 'عالی شهر',
                'province_id' => 7,
            ),
            283 => 
            array (
                'county_id' => 89,
                'id' => 284,
                'name' => 'آباد',
                'province_id' => 7,
            ),
            284 => 
            array (
                'county_id' => 89,
                'id' => 285,
                'name' => 'اهرم',
                'province_id' => 7,
            ),
            285 => 
            array (
                'county_id' => 89,
                'id' => 286,
                'name' => 'دلوار',
                'province_id' => 7,
            ),
            286 => 
            array (
                'county_id' => 90,
                'id' => 287,
                'name' => 'انارستان',
                'province_id' => 7,
            ),
            287 => 
            array (
                'county_id' => 90,
                'id' => 288,
                'name' => 'جم',
                'province_id' => 7,
            ),
            288 => 
            array (
                'county_id' => 90,
                'id' => 289,
                'name' => 'ریز',
                'province_id' => 7,
            ),
            289 => 
            array (
                'county_id' => 91,
                'id' => 290,
                'name' => 'آب پخش',
                'province_id' => 7,
            ),
            290 => 
            array (
                'county_id' => 91,
                'id' => 291,
                'name' => 'برازجان',
                'province_id' => 7,
            ),
            291 => 
            array (
                'county_id' => 91,
                'id' => 292,
                'name' => 'بوشکان',
                'province_id' => 7,
            ),
            292 => 
            array (
                'county_id' => 91,
                'id' => 293,
                'name' => 'تنگ ارم',
                'province_id' => 7,
            ),
            293 => 
            array (
                'county_id' => 91,
                'id' => 294,
                'name' => 'دالکی',
                'province_id' => 7,
            ),
            294 => 
            array (
                'county_id' => 91,
                'id' => 295,
                'name' => 'سعد آباد',
                'province_id' => 7,
            ),
            295 => 
            array (
                'county_id' => 91,
                'id' => 296,
                'name' => 'شبانکاره',
                'province_id' => 7,
            ),
            296 => 
            array (
                'county_id' => 91,
                'id' => 297,
                'name' => 'کلمه',
                'province_id' => 7,
            ),
            297 => 
            array (
                'county_id' => 91,
                'id' => 298,
                'name' => 'وحدتیه',
                'province_id' => 7,
            ),
            298 => 
            array (
                'county_id' => 92,
                'id' => 299,
                'name' => 'بادوله',
                'province_id' => 7,
            ),
            299 => 
            array (
                'county_id' => 92,
                'id' => 300,
                'name' => 'خورموج',
                'province_id' => 7,
            ),
            300 => 
            array (
                'county_id' => 92,
                'id' => 301,
                'name' => 'شنبه',
                'province_id' => 7,
            ),
            301 => 
            array (
                'county_id' => 92,
                'id' => 302,
                'name' => 'کاکی',
                'province_id' => 7,
            ),
            302 => 
            array (
                'county_id' => 93,
                'id' => 303,
                'name' => 'آبدان',
                'province_id' => 7,
            ),
            303 => 
            array (
                'county_id' => 93,
                'id' => 304,
                'name' => 'بردخون',
                'province_id' => 7,
            ),
            304 => 
            array (
                'county_id' => 93,
                'id' => 305,
                'name' => 'بردستان',
                'province_id' => 7,
            ),
            305 => 
            array (
                'county_id' => 93,
                'id' => 306,
                'name' => 'بندردیر',
                'province_id' => 7,
            ),
            306 => 
            array (
                'county_id' => 93,
                'id' => 307,
                'name' => 'دوراهک',
                'province_id' => 7,
            ),
            307 => 
            array (
                'county_id' => 94,
                'id' => 308,
                'name' => 'امام حسن',
                'province_id' => 7,
            ),
            308 => 
            array (
                'county_id' => 94,
                'id' => 309,
                'name' => 'بندردیلم',
                'province_id' => 7,
            ),
            309 => 
            array (
                'county_id' => 95,
                'id' => 310,
                'name' => 'عسلویه',
                'province_id' => 7,
            ),
            310 => 
            array (
                'county_id' => 95,
                'id' => 311,
                'name' => 'نخل تقی',
                'province_id' => 7,
            ),
            311 => 
            array (
                'county_id' => 96,
                'id' => 312,
                'name' => 'بندرکنگان',
                'province_id' => 7,
            ),
            312 => 
            array (
                'county_id' => 96,
                'id' => 313,
                'name' => 'بنک',
                'province_id' => 7,
            ),
            313 => 
            array (
                'county_id' => 96,
                'id' => 314,
                'name' => 'سیراف',
                'province_id' => 7,
            ),
            314 => 
            array (
                'county_id' => 97,
                'id' => 315,
                'name' => 'بندرریگ',
                'province_id' => 7,
            ),
            315 => 
            array (
                'county_id' => 97,
                'id' => 316,
                'name' => 'بندرگناوه',
                'province_id' => 7,
            ),
            316 => 
            array (
                'county_id' => 98,
                'id' => 317,
                'name' => 'احمد آباد مستوفی',
                'province_id' => 8,
            ),
            317 => 
            array (
                'county_id' => 98,
                'id' => 318,
                'name' => 'اسلامشهر',
                'province_id' => 8,
            ),
            318 => 
            array (
                'county_id' => 98,
                'id' => 319,
                'name' => 'چهاردانگه',
                'province_id' => 8,
            ),
            319 => 
            array (
                'county_id' => 99,
                'id' => 320,
                'name' => 'صالحیه',
                'province_id' => 8,
            ),
            320 => 
            array (
                'county_id' => 99,
                'id' => 321,
                'name' => 'گلستان',
                'province_id' => 8,
            ),
            321 => 
            array (
                'county_id' => 99,
                'id' => 322,
                'name' => 'نسیم شهر',
                'province_id' => 8,
            ),
            322 => 
            array (
                'county_id' => 100,
                'id' => 323,
                'name' => 'پاکدشت',
                'province_id' => 8,
            ),
            323 => 
            array (
                'county_id' => 100,
                'id' => 324,
                'name' => 'شریف آباد',
                'province_id' => 8,
            ),
            324 => 
            array (
                'county_id' => 100,
                'id' => 325,
                'name' => 'فرون اباد',
                'province_id' => 8,
            ),
            325 => 
            array (
                'county_id' => 101,
                'id' => 326,
                'name' => 'بومهن',
                'province_id' => 8,
            ),
            326 => 
            array (
                'county_id' => 101,
                'id' => 327,
                'name' => 'پردیس',
                'province_id' => 8,
            ),
            327 => 
            array (
                'county_id' => 102,
                'id' => 328,
                'name' => 'پیشوا',
                'province_id' => 8,
            ),
            328 => 
            array (
                'county_id' => 103,
                'id' => 329,
                'name' => 'تهران',
                'province_id' => 8,
            ),
            329 => 
            array (
                'county_id' => 104,
                'id' => 330,
                'name' => 'آبسرد',
                'province_id' => 8,
            ),
            330 => 
            array (
                'county_id' => 104,
                'id' => 331,
                'name' => 'آبعلی',
                'province_id' => 8,
            ),
            331 => 
            array (
                'county_id' => 104,
                'id' => 332,
                'name' => 'دماوند',
                'province_id' => 8,
            ),
            332 => 
            array (
                'county_id' => 104,
                'id' => 333,
                'name' => 'رودهن',
                'province_id' => 8,
            ),
            333 => 
            array (
                'county_id' => 104,
                'id' => 334,
                'name' => 'کیلان',
                'province_id' => 8,
            ),
            334 => 
            array (
                'county_id' => 105,
                'id' => 335,
                'name' => 'پرند',
                'province_id' => 8,
            ),
            335 => 
            array (
                'county_id' => 105,
                'id' => 336,
                'name' => 'رباطکریم',
                'province_id' => 8,
            ),
            336 => 
            array (
                'county_id' => 105,
                'id' => 337,
                'name' => 'نصیرشهر',
                'province_id' => 8,
            ),
            337 => 
            array (
                'county_id' => 106,
                'id' => 338,
                'name' => 'باقرشهر',
                'province_id' => 8,
            ),
            338 => 
            array (
                'county_id' => 106,
                'id' => 339,
                'name' => 'حسن آباد',
                'province_id' => 8,
            ),
            339 => 
            array (
                'county_id' => 106,
                'id' => 340,
                'name' => 'ری',
                'province_id' => 8,
            ),
            340 => 
            array (
                'county_id' => 106,
                'id' => 341,
                'name' => 'کهریزک',
                'province_id' => 8,
            ),
            341 => 
            array (
                'county_id' => 107,
                'id' => 342,
                'name' => 'تجریش',
                'province_id' => 8,
            ),
            342 => 
            array (
                'county_id' => 107,
                'id' => 343,
                'name' => 'شمشک',
                'province_id' => 8,
            ),
            343 => 
            array (
                'county_id' => 107,
                'id' => 344,
                'name' => 'فشم',
                'province_id' => 8,
            ),
            344 => 
            array (
                'county_id' => 107,
                'id' => 345,
                'name' => 'لواسان',
                'province_id' => 8,
            ),
            345 => 
            array (
                'county_id' => 108,
                'id' => 346,
                'name' => 'اندیشه',
                'province_id' => 8,
            ),
            346 => 
            array (
                'county_id' => 108,
                'id' => 347,
                'name' => 'باغستان',
                'province_id' => 8,
            ),
            347 => 
            array (
                'county_id' => 108,
                'id' => 348,
                'name' => 'شاهدشهر',
                'province_id' => 8,
            ),
            348 => 
            array (
                'county_id' => 108,
                'id' => 349,
                'name' => 'شهریار',
                'province_id' => 8,
            ),
            349 => 
            array (
                'county_id' => 108,
                'id' => 350,
                'name' => 'صباشهر',
                'province_id' => 8,
            ),
            350 => 
            array (
                'county_id' => 108,
                'id' => 351,
                'name' => 'فردوسیه',
                'province_id' => 8,
            ),
            351 => 
            array (
                'county_id' => 108,
                'id' => 352,
                'name' => 'وحیدیه',
                'province_id' => 8,
            ),
            352 => 
            array (
                'county_id' => 109,
                'id' => 353,
                'name' => 'ارجمند',
                'province_id' => 8,
            ),
            353 => 
            array (
                'county_id' => 109,
                'id' => 354,
                'name' => 'فیروزکوه',
                'province_id' => 8,
            ),
            354 => 
            array (
                'county_id' => 110,
                'id' => 355,
                'name' => 'قدس',
                'province_id' => 8,
            ),
            355 => 
            array (
                'county_id' => 111,
                'id' => 356,
                'name' => 'قرچک',
                'province_id' => 8,
            ),
            356 => 
            array (
                'county_id' => 112,
                'id' => 357,
                'name' => 'صفادشت',
                'province_id' => 8,
            ),
            357 => 
            array (
                'county_id' => 112,
                'id' => 358,
                'name' => 'ملارد',
                'province_id' => 8,
            ),
            358 => 
            array (
                'county_id' => 113,
                'id' => 359,
                'name' => 'جوادآباد',
                'province_id' => 8,
            ),
            359 => 
            array (
                'county_id' => 113,
                'id' => 360,
                'name' => 'ورامین',
                'province_id' => 8,
            ),
            360 => 
            array (
                'county_id' => 114,
                'id' => 361,
                'name' => 'اردل',
                'province_id' => 9,
            ),
            361 => 
            array (
                'county_id' => 114,
                'id' => 362,
                'name' => 'دشتک',
                'province_id' => 9,
            ),
            362 => 
            array (
                'county_id' => 114,
                'id' => 363,
                'name' => 'سرخون',
                'province_id' => 9,
            ),
            363 => 
            array (
                'county_id' => 114,
                'id' => 364,
                'name' => 'کاج',
                'province_id' => 9,
            ),
            364 => 
            array (
                'county_id' => 115,
                'id' => 365,
                'name' => 'بروجن',
                'province_id' => 9,
            ),
            365 => 
            array (
                'county_id' => 115,
                'id' => 366,
                'name' => 'بلداجی',
                'province_id' => 9,
            ),
            366 => 
            array (
                'county_id' => 115,
                'id' => 367,
                'name' => 'سفیددشت',
                'province_id' => 9,
            ),
            367 => 
            array (
                'county_id' => 115,
                'id' => 368,
                'name' => 'فرادبنه',
                'province_id' => 9,
            ),
            368 => 
            array (
                'county_id' => 115,
                'id' => 369,
                'name' => 'گندمان',
                'province_id' => 9,
            ),
            369 => 
            array (
                'county_id' => 115,
                'id' => 370,
                'name' => 'نقنه',
                'province_id' => 9,
            ),
            370 => 
            array (
                'county_id' => 116,
                'id' => 371,
                'name' => 'بن',
                'province_id' => 9,
            ),
            371 => 
            array (
                'county_id' => 116,
                'id' => 372,
                'name' => 'وردنجان',
                'province_id' => 9,
            ),
            372 => 
            array (
                'county_id' => 117,
                'id' => 373,
                'name' => 'سامان',
                'province_id' => 9,
            ),
            373 => 
            array (
                'county_id' => 118,
                'id' => 374,
                'name' => 'سودجان',
                'province_id' => 9,
            ),
            374 => 
            array (
                'county_id' => 118,
                'id' => 375,
                'name' => 'سورشجان',
                'province_id' => 9,
            ),
            375 => 
            array (
                'county_id' => 118,
                'id' => 376,
                'name' => 'شهرکرد',
                'province_id' => 9,
            ),
            376 => 
            array (
                'county_id' => 118,
                'id' => 377,
                'name' => 'طاقانک',
                'province_id' => 9,
            ),
            377 => 
            array (
                'county_id' => 118,
                'id' => 378,
                'name' => 'فرخ شهر',
                'province_id' => 9,
            ),
            378 => 
            array (
                'county_id' => 118,
                'id' => 379,
                'name' => 'کیان',
                'province_id' => 9,
            ),
            379 => 
            array (
                'county_id' => 118,
                'id' => 380,
                'name' => 'نافچ',
                'province_id' => 9,
            ),
            380 => 
            array (
                'county_id' => 118,
                'id' => 381,
                'name' => 'هارونی',
                'province_id' => 9,
            ),
            381 => 
            array (
                'county_id' => 118,
                'id' => 382,
                'name' => 'هفشجان',
                'province_id' => 9,
            ),
            382 => 
            array (
                'county_id' => 119,
                'id' => 383,
                'name' => 'باباحیدر',
                'province_id' => 9,
            ),
            383 => 
            array (
                'county_id' => 119,
                'id' => 384,
                'name' => 'پردنجان',
                'province_id' => 9,
            ),
            384 => 
            array (
                'county_id' => 119,
                'id' => 385,
                'name' => 'جونقان',
                'province_id' => 9,
            ),
            385 => 
            array (
                'county_id' => 119,
                'id' => 386,
                'name' => 'چلیچه',
                'province_id' => 9,
            ),
            386 => 
            array (
                'county_id' => 119,
                'id' => 387,
                'name' => 'فارسان',
                'province_id' => 9,
            ),
            387 => 
            array (
                'county_id' => 119,
                'id' => 388,
                'name' => 'گوجان',
                'province_id' => 9,
            ),
            388 => 
            array (
                'county_id' => 120,
                'id' => 389,
                'name' => 'بازفت',
                'province_id' => 9,
            ),
            389 => 
            array (
                'county_id' => 120,
                'id' => 390,
                'name' => 'چلگرد',
                'province_id' => 9,
            ),
            390 => 
            array (
                'county_id' => 120,
                'id' => 391,
                'name' => 'صمصامی',
                'province_id' => 9,
            ),
            391 => 
            array (
                'county_id' => 121,
                'id' => 392,
                'name' => 'دستنا',
                'province_id' => 9,
            ),
            392 => 
            array (
                'county_id' => 121,
                'id' => 393,
                'name' => 'شلمزار',
                'province_id' => 9,
            ),
            393 => 
            array (
                'county_id' => 121,
                'id' => 394,
                'name' => 'گهرو',
                'province_id' => 9,
            ),
            394 => 
            array (
                'county_id' => 121,
                'id' => 395,
                'name' => 'ناغان',
                'province_id' => 9,
            ),
            395 => 
            array (
                'county_id' => 122,
                'id' => 396,
                'name' => 'آلونی',
                'province_id' => 9,
            ),
            396 => 
            array (
                'county_id' => 122,
                'id' => 397,
                'name' => 'سردشت',
                'province_id' => 9,
            ),
            397 => 
            array (
                'county_id' => 122,
                'id' => 398,
                'name' => 'لردگان',
                'province_id' => 9,
            ),
            398 => 
            array (
                'county_id' => 122,
                'id' => 399,
                'name' => 'مال خلیفه',
                'province_id' => 9,
            ),
            399 => 
            array (
                'county_id' => 122,
                'id' => 400,
                'name' => 'منج',
                'province_id' => 9,
            ),
            400 => 
            array (
                'county_id' => 123,
                'id' => 401,
                'name' => 'ارسک',
                'province_id' => 10,
            ),
            401 => 
            array (
                'county_id' => 123,
                'id' => 402,
                'name' => 'بشرویه',
                'province_id' => 10,
            ),
            402 => 
            array (
                'county_id' => 124,
                'id' => 403,
                'name' => 'بیرجند',
                'province_id' => 10,
            ),
            403 => 
            array (
                'county_id' => 125,
                'id' => 404,
                'name' => 'خوسف',
                'province_id' => 10,
            ),
            404 => 
            array (
                'county_id' => 125,
                'id' => 405,
                'name' => 'محمدشهر',
                'province_id' => 10,
            ),
            405 => 
            array (
                'county_id' => 126,
                'id' => 406,
                'name' => 'اسدیه',
                'province_id' => 10,
            ),
            406 => 
            array (
                'county_id' => 126,
                'id' => 407,
                'name' => 'طبس مسینا',
                'province_id' => 10,
            ),
            407 => 
            array (
                'county_id' => 126,
                'id' => 408,
                'name' => 'قهستان',
                'province_id' => 10,
            ),
            408 => 
            array (
                'county_id' => 126,
                'id' => 409,
                'name' => 'گزیک',
                'province_id' => 10,
            ),
            409 => 
            array (
                'county_id' => 127,
                'id' => 410,
                'name' => 'حاجی آباد',
                'province_id' => 10,
            ),
            410 => 
            array (
                'county_id' => 127,
                'id' => 411,
                'name' => 'زهان',
                'province_id' => 10,
            ),
            411 => 
            array (
                'county_id' => 128,
                'id' => 412,
                'name' => 'آیسک',
                'province_id' => 10,
            ),
            412 => 
            array (
                'county_id' => 128,
                'id' => 413,
                'name' => 'سرایان',
                'province_id' => 10,
            ),
            413 => 
            array (
                'county_id' => 128,
                'id' => 414,
                'name' => 'سه قلعه',
                'province_id' => 10,
            ),
            414 => 
            array (
                'county_id' => 129,
                'id' => 415,
                'name' => 'سربیشه',
                'province_id' => 10,
            ),
            415 => 
            array (
                'county_id' => 129,
                'id' => 416,
                'name' => 'مود',
                'province_id' => 10,
            ),
            416 => 
            array (
                'county_id' => 130,
                'id' => 417,
                'name' => 'دیهوک',
                'province_id' => 10,
            ),
            417 => 
            array (
                'county_id' => 130,
                'id' => 418,
                'name' => 'طبس',
                'province_id' => 10,
            ),
            418 => 
            array (
                'county_id' => 130,
                'id' => 419,
                'name' => 'عشق آباد',
                'province_id' => 10,
            ),
            419 => 
            array (
                'county_id' => 131,
                'id' => 420,
                'name' => 'اسلامیه',
                'province_id' => 10,
            ),
            420 => 
            array (
                'county_id' => 131,
                'id' => 421,
                'name' => 'فردوس',
                'province_id' => 10,
            ),
            421 => 
            array (
                'county_id' => 132,
                'id' => 422,
                'name' => 'آرین شهر',
                'province_id' => 10,
            ),
            422 => 
            array (
                'county_id' => 132,
                'id' => 423,
                'name' => 'اسفدن',
                'province_id' => 10,
            ),
            423 => 
            array (
                'county_id' => 132,
                'id' => 424,
                'name' => 'خضری دشت بیاض',
                'province_id' => 10,
            ),
            424 => 
            array (
                'county_id' => 132,
                'id' => 425,
                'name' => 'قاین',
                'province_id' => 10,
            ),
            425 => 
            array (
                'county_id' => 132,
                'id' => 426,
                'name' => 'نیمبلوک',
                'province_id' => 10,
            ),
            426 => 
            array (
                'county_id' => 133,
                'id' => 427,
                'name' => 'شوسف',
                'province_id' => 10,
            ),
            427 => 
            array (
                'county_id' => 133,
                'id' => 428,
                'name' => 'نهبندان',
                'province_id' => 10,
            ),
            428 => 
            array (
                'county_id' => 134,
                'id' => 429,
                'name' => 'باخرز',
                'province_id' => 11,
            ),
            429 => 
            array (
                'county_id' => 135,
                'id' => 430,
                'name' => 'بجستان',
                'province_id' => 11,
            ),
            430 => 
            array (
                'county_id' => 135,
                'id' => 431,
                'name' => 'یونسی',
                'province_id' => 11,
            ),
            431 => 
            array (
                'county_id' => 136,
                'id' => 432,
                'name' => 'انابد',
                'province_id' => 11,
            ),
            432 => 
            array (
                'county_id' => 136,
                'id' => 433,
                'name' => 'بردسکن',
                'province_id' => 11,
            ),
            433 => 
            array (
                'county_id' => 136,
                'id' => 434,
                'name' => 'شهراباد',
                'province_id' => 11,
            ),
            434 => 
            array (
                'county_id' => 137,
                'id' => 435,
                'name' => 'شاندیز',
                'province_id' => 11,
            ),
            435 => 
            array (
                'county_id' => 137,
                'id' => 436,
                'name' => 'طرقبه',
                'province_id' => 11,
            ),
            436 => 
            array (
                'county_id' => 138,
                'id' => 437,
                'name' => 'تایباد',
                'province_id' => 11,
            ),
            437 => 
            array (
                'county_id' => 138,
                'id' => 438,
                'name' => 'کاریز',
                'province_id' => 11,
            ),
            438 => 
            array (
                'county_id' => 138,
                'id' => 439,
                'name' => 'مشهدریزه',
                'province_id' => 11,
            ),
            439 => 
            array (
                'county_id' => 139,
                'id' => 440,
                'name' => 'احمدابادصولت',
                'province_id' => 11,
            ),
            440 => 
            array (
                'county_id' => 139,
                'id' => 441,
                'name' => 'تربت جام',
                'province_id' => 11,
            ),
            441 => 
            array (
                'county_id' => 139,
                'id' => 442,
                'name' => 'صالح آباد',
                'province_id' => 11,
            ),
            442 => 
            array (
                'county_id' => 139,
                'id' => 443,
                'name' => 'نصرآباد',
                'province_id' => 11,
            ),
            443 => 
            array (
                'county_id' => 139,
                'id' => 444,
                'name' => 'نیل شهر',
                'province_id' => 11,
            ),
            444 => 
            array (
                'county_id' => 140,
                'id' => 445,
                'name' => 'بایک',
                'province_id' => 11,
            ),
            445 => 
            array (
                'county_id' => 140,
                'id' => 446,
                'name' => 'تربت حیدریه',
                'province_id' => 11,
            ),
            446 => 
            array (
                'county_id' => 140,
                'id' => 447,
                'name' => 'رباط سنگ',
                'province_id' => 11,
            ),
            447 => 
            array (
                'county_id' => 140,
                'id' => 448,
                'name' => 'کدکن',
                'province_id' => 11,
            ),
            448 => 
            array (
                'county_id' => 141,
                'id' => 449,
                'name' => 'جغتای',
                'province_id' => 11,
            ),
            449 => 
            array (
                'county_id' => 142,
                'id' => 450,
                'name' => 'نقاب',
                'province_id' => 11,
            ),
            450 => 
            array (
                'county_id' => 143,
                'id' => 451,
                'name' => 'چناران',
                'province_id' => 11,
            ),
            451 => 
            array (
                'county_id' => 143,
                'id' => 452,
                'name' => 'گلبهار',
                'province_id' => 11,
            ),
            452 => 
            array (
                'county_id' => 143,
                'id' => 453,
                'name' => 'گلمکان',
                'province_id' => 11,
            ),
            453 => 
            array (
                'county_id' => 144,
                'id' => 454,
                'name' => 'خلیل آباد',
                'province_id' => 11,
            ),
            454 => 
            array (
                'county_id' => 144,
                'id' => 455,
                'name' => 'کندر',
                'province_id' => 11,
            ),
            455 => 
            array (
                'county_id' => 145,
                'id' => 456,
                'name' => 'خواف',
                'province_id' => 11,
            ),
            456 => 
            array (
                'county_id' => 145,
                'id' => 457,
                'name' => 'سلامی',
                'province_id' => 11,
            ),
            457 => 
            array (
                'county_id' => 145,
                'id' => 458,
                'name' => 'سنگان',
                'province_id' => 11,
            ),
            458 => 
            array (
                'county_id' => 145,
                'id' => 459,
                'name' => 'قاسم آباد',
                'province_id' => 11,
            ),
            459 => 
            array (
                'county_id' => 145,
                'id' => 460,
                'name' => 'نشتیفان',
                'province_id' => 11,
            ),
            460 => 
            array (
                'county_id' => 146,
                'id' => 461,
                'name' => 'سلطان آباد',
                'province_id' => 11,
            ),
            461 => 
            array (
                'county_id' => 147,
                'id' => 462,
                'name' => 'داورزن',
                'province_id' => 11,
            ),
            462 => 
            array (
                'county_id' => 148,
                'id' => 463,
                'name' => 'چاپشلو',
                'province_id' => 11,
            ),
            463 => 
            array (
                'county_id' => 148,
                'id' => 464,
                'name' => 'درگز',
                'province_id' => 11,
            ),
            464 => 
            array (
                'county_id' => 148,
                'id' => 465,
                'name' => 'لطف آباد',
                'province_id' => 11,
            ),
            465 => 
            array (
                'county_id' => 148,
                'id' => 466,
                'name' => 'نوخندان',
                'province_id' => 11,
            ),
            466 => 
            array (
                'county_id' => 149,
                'id' => 467,
                'name' => 'جنگل',
                'province_id' => 11,
            ),
            467 => 
            array (
                'county_id' => 149,
                'id' => 468,
                'name' => 'رشتخوار',
                'province_id' => 11,
            ),
            468 => 
            array (
                'county_id' => 150,
                'id' => 469,
                'name' => 'دولت آباد',
                'province_id' => 11,
            ),
            469 => 
            array (
                'county_id' => 151,
                'id' => 470,
                'name' => 'روداب',
                'province_id' => 11,
            ),
            470 => 
            array (
                'county_id' => 151,
                'id' => 471,
                'name' => 'سبزوار',
                'province_id' => 11,
            ),
            471 => 
            array (
                'county_id' => 151,
                'id' => 472,
                'name' => 'ششتمد',
                'province_id' => 11,
            ),
            472 => 
            array (
                'county_id' => 152,
                'id' => 473,
                'name' => 'سرخس',
                'province_id' => 11,
            ),
            473 => 
            array (
                'county_id' => 152,
                'id' => 474,
                'name' => 'مزدآوند',
                'province_id' => 11,
            ),
            474 => 
            array (
                'county_id' => 153,
                'id' => 475,
                'name' => 'سفیدسنگ',
                'province_id' => 11,
            ),
            475 => 
            array (
                'county_id' => 153,
                'id' => 476,
                'name' => 'فرهادگرد',
                'province_id' => 11,
            ),
            476 => 
            array (
                'county_id' => 153,
                'id' => 477,
                'name' => 'فریمان',
                'province_id' => 11,
            ),
            477 => 
            array (
                'county_id' => 153,
                'id' => 478,
                'name' => 'قلندرآباد',
                'province_id' => 11,
            ),
            478 => 
            array (
                'county_id' => 154,
                'id' => 479,
                'name' => 'فیروزه',
                'province_id' => 11,
            ),
            479 => 
            array (
                'county_id' => 154,
                'id' => 480,
                'name' => 'همت آباد',
                'province_id' => 11,
            ),
            480 => 
            array (
                'county_id' => 155,
                'id' => 481,
                'name' => 'باجگیران',
                'province_id' => 11,
            ),
            481 => 
            array (
                'county_id' => 155,
                'id' => 482,
                'name' => 'قوچان',
                'province_id' => 11,
            ),
            482 => 
            array (
                'county_id' => 156,
                'id' => 483,
                'name' => 'ریوش',
                'province_id' => 11,
            ),
            483 => 
            array (
                'county_id' => 156,
                'id' => 484,
                'name' => 'کاشمر',
                'province_id' => 11,
            ),
            484 => 
            array (
                'county_id' => 157,
                'id' => 485,
                'name' => 'شهرزو',
                'province_id' => 11,
            ),
            485 => 
            array (
                'county_id' => 157,
                'id' => 486,
                'name' => 'کلات',
                'province_id' => 11,
            ),
            486 => 
            array (
                'county_id' => 158,
                'id' => 487,
                'name' => 'بیدخت',
                'province_id' => 11,
            ),
            487 => 
            array (
                'county_id' => 158,
                'id' => 488,
                'name' => 'کاخک',
                'province_id' => 11,
            ),
            488 => 
            array (
                'county_id' => 158,
                'id' => 489,
                'name' => 'گناباد',
                'province_id' => 11,
            ),
            489 => 
            array (
                'county_id' => 159,
                'id' => 490,
                'name' => 'رضویه',
                'province_id' => 11,
            ),
            490 => 
            array (
                'county_id' => 159,
                'id' => 491,
                'name' => 'مشهد',
                'province_id' => 11,
            ),
            491 => 
            array (
                'county_id' => 159,
                'id' => 492,
                'name' => 'مشهد ثامن',
                'province_id' => 11,
            ),
            492 => 
            array (
                'county_id' => 159,
                'id' => 493,
                'name' => 'ملک آباد',
                'province_id' => 11,
            ),
            493 => 
            array (
                'county_id' => 160,
                'id' => 494,
                'name' => 'شادمهر',
                'province_id' => 11,
            ),
            494 => 
            array (
                'county_id' => 160,
                'id' => 495,
                'name' => 'فیض آباد',
                'province_id' => 11,
            ),
            495 => 
            array (
                'county_id' => 161,
                'id' => 496,
                'name' => 'بار',
                'province_id' => 11,
            ),
            496 => 
            array (
                'county_id' => 161,
                'id' => 497,
                'name' => 'چکنه',
                'province_id' => 11,
            ),
            497 => 
            array (
                'county_id' => 161,
                'id' => 498,
                'name' => 'خرو',
                'province_id' => 11,
            ),
            498 => 
            array (
                'county_id' => 161,
                'id' => 499,
                'name' => 'درود',
                'province_id' => 11,
            ),
            499 => 
            array (
                'county_id' => 161,
                'id' => 500,
                'name' => 'عشق آباد',
                'province_id' => 11,
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'county_id' => 161,
                'id' => 501,
                'name' => 'قدمگاه',
                'province_id' => 11,
            ),
            1 => 
            array (
                'county_id' => 161,
                'id' => 502,
                'name' => 'نیشابور',
                'province_id' => 11,
            ),
            2 => 
            array (
                'county_id' => 162,
                'id' => 503,
                'name' => 'اسفراین',
                'province_id' => 12,
            ),
            3 => 
            array (
                'county_id' => 162,
                'id' => 504,
                'name' => 'صفی آباد',
                'province_id' => 12,
            ),
            4 => 
            array (
                'county_id' => 163,
                'id' => 505,
                'name' => 'بجنورد',
                'province_id' => 12,
            ),
            5 => 
            array (
                'county_id' => 163,
                'id' => 506,
                'name' => 'چناران شهر',
                'province_id' => 12,
            ),
            6 => 
            array (
                'county_id' => 163,
                'id' => 507,
                'name' => 'حصارگرمخان',
                'province_id' => 12,
            ),
            7 => 
            array (
                'county_id' => 164,
                'id' => 508,
                'name' => 'جاجرم',
                'province_id' => 12,
            ),
            8 => 
            array (
                'county_id' => 164,
                'id' => 509,
                'name' => 'سنخواست',
                'province_id' => 12,
            ),
            9 => 
            array (
                'county_id' => 164,
                'id' => 510,
                'name' => 'شوقان',
                'province_id' => 12,
            ),
            10 => 
            array (
                'county_id' => 165,
                'id' => 511,
                'name' => 'راز',
                'province_id' => 12,
            ),
            11 => 
            array (
                'county_id' => 166,
                'id' => 512,
                'name' => 'زیارت',
                'province_id' => 12,
            ),
            12 => 
            array (
                'county_id' => 166,
                'id' => 513,
                'name' => 'شیروان',
                'province_id' => 12,
            ),
            13 => 
            array (
                'county_id' => 166,
                'id' => 514,
                'name' => 'قوشخانه',
                'province_id' => 12,
            ),
            14 => 
            array (
                'county_id' => 166,
                'id' => 515,
                'name' => 'لوجلی',
                'province_id' => 12,
            ),
            15 => 
            array (
                'county_id' => 167,
                'id' => 516,
                'name' => 'تیتکانلو',
                'province_id' => 12,
            ),
            16 => 
            array (
                'county_id' => 167,
                'id' => 517,
                'name' => 'فاروج',
                'province_id' => 12,
            ),
            17 => 
            array (
                'county_id' => 168,
                'id' => 518,
                'name' => 'ایور',
                'province_id' => 12,
            ),
            18 => 
            array (
                'county_id' => 168,
                'id' => 519,
                'name' => 'درق',
                'province_id' => 12,
            ),
            19 => 
            array (
                'county_id' => 168,
                'id' => 520,
                'name' => 'گرمه',
                'province_id' => 12,
            ),
            20 => 
            array (
                'county_id' => 169,
                'id' => 521,
                'name' => 'آشخانه',
                'province_id' => 12,
            ),
            21 => 
            array (
                'county_id' => 169,
                'id' => 522,
                'name' => 'آوا',
                'province_id' => 12,
            ),
            22 => 
            array (
                'county_id' => 169,
                'id' => 523,
                'name' => 'پیش قلعه',
                'province_id' => 12,
            ),
            23 => 
            array (
                'county_id' => 169,
                'id' => 524,
                'name' => 'قاضی',
                'province_id' => 12,
            ),
            24 => 
            array (
                'county_id' => 170,
                'id' => 525,
                'name' => 'آبادان',
                'province_id' => 13,
            ),
            25 => 
            array (
                'county_id' => 170,
                'id' => 526,
                'name' => 'اروندکنار',
                'province_id' => 13,
            ),
            26 => 
            array (
                'county_id' => 170,
                'id' => 527,
                'name' => 'چویبده',
                'province_id' => 13,
            ),
            27 => 
            array (
                'county_id' => 171,
                'id' => 528,
                'name' => 'آغاجاری',
                'province_id' => 13,
            ),
            28 => 
            array (
                'county_id' => 172,
                'id' => 529,
                'name' => 'امیدیه',
                'province_id' => 13,
            ),
            29 => 
            array (
                'county_id' => 172,
                'id' => 530,
                'name' => 'جایزان',
                'province_id' => 13,
            ),
            30 => 
            array (
                'county_id' => 173,
                'id' => 531,
                'name' => 'آبژدان',
                'province_id' => 13,
            ),
            31 => 
            array (
                'county_id' => 173,
                'id' => 532,
                'name' => 'قلعه خواجه',
                'province_id' => 13,
            ),
            32 => 
            array (
                'county_id' => 174,
                'id' => 533,
                'name' => 'آزادی',
                'province_id' => 13,
            ),
            33 => 
            array (
                'county_id' => 174,
                'id' => 534,
                'name' => 'اندیمشک',
                'province_id' => 13,
            ),
            34 => 
            array (
                'county_id' => 174,
                'id' => 535,
                'name' => 'بیدروبه',
                'province_id' => 13,
            ),
            35 => 
            array (
                'county_id' => 174,
                'id' => 536,
                'name' => 'چم گلک',
                'province_id' => 13,
            ),
            36 => 
            array (
                'county_id' => 174,
                'id' => 537,
                'name' => 'حسینیه',
                'province_id' => 13,
            ),
            37 => 
            array (
                'county_id' => 175,
                'id' => 538,
                'name' => 'الهایی',
                'province_id' => 13,
            ),
            38 => 
            array (
                'county_id' => 175,
                'id' => 539,
                'name' => 'اهواز',
                'province_id' => 13,
            ),
            39 => 
            array (
                'county_id' => 176,
                'id' => 540,
                'name' => 'ایذه',
                'province_id' => 13,
            ),
            40 => 
            array (
                'county_id' => 176,
                'id' => 541,
                'name' => 'دهدز',
                'province_id' => 13,
            ),
            41 => 
            array (
                'county_id' => 177,
                'id' => 542,
                'name' => 'باغ ملک',
                'province_id' => 13,
            ),
            42 => 
            array (
                'county_id' => 177,
                'id' => 543,
                'name' => 'صیدون',
                'province_id' => 13,
            ),
            43 => 
            array (
                'county_id' => 177,
                'id' => 544,
                'name' => 'قلعه تل',
                'province_id' => 13,
            ),
            44 => 
            array (
                'county_id' => 177,
                'id' => 545,
                'name' => 'میداود',
                'province_id' => 13,
            ),
            45 => 
            array (
                'county_id' => 178,
                'id' => 546,
                'name' => 'شیبان',
                'province_id' => 13,
            ),
            46 => 
            array (
                'county_id' => 178,
                'id' => 547,
                'name' => 'ملاثانی',
                'province_id' => 13,
            ),
            47 => 
            array (
                'county_id' => 178,
                'id' => 548,
                'name' => 'ویس',
                'province_id' => 13,
            ),
            48 => 
            array (
                'county_id' => 179,
                'id' => 549,
                'name' => 'بندرامام خمینی',
                'province_id' => 13,
            ),
            49 => 
            array (
                'county_id' => 179,
                'id' => 550,
                'name' => 'بندرماهشهر',
                'province_id' => 13,
            ),
            50 => 
            array (
                'county_id' => 179,
                'id' => 551,
                'name' => 'چمران',
                'province_id' => 13,
            ),
            51 => 
            array (
                'county_id' => 180,
                'id' => 552,
                'name' => 'بهبهان',
                'province_id' => 13,
            ),
            52 => 
            array (
                'county_id' => 180,
                'id' => 553,
                'name' => 'تشان',
                'province_id' => 13,
            ),
            53 => 
            array (
                'county_id' => 180,
                'id' => 554,
                'name' => 'سردشت',
                'province_id' => 13,
            ),
            54 => 
            array (
                'county_id' => 180,
                'id' => 555,
                'name' => 'منصوریه',
                'province_id' => 13,
            ),
            55 => 
            array (
                'county_id' => 181,
                'id' => 556,
                'name' => 'حمیدیه',
                'province_id' => 13,
            ),
            56 => 
            array (
                'county_id' => 182,
                'id' => 557,
                'name' => 'خرمشهر',
                'province_id' => 13,
            ),
            57 => 
            array (
                'county_id' => 182,
                'id' => 558,
                'name' => 'مقاومت',
                'province_id' => 13,
            ),
            58 => 
            array (
                'county_id' => 182,
                'id' => 559,
                'name' => 'مینوشهر',
                'province_id' => 13,
            ),
            59 => 
            array (
                'county_id' => 183,
                'id' => 560,
                'name' => 'چغامیش',
                'province_id' => 13,
            ),
            60 => 
            array (
                'county_id' => 183,
                'id' => 561,
                'name' => 'حمزه',
                'province_id' => 13,
            ),
            61 => 
            array (
                'county_id' => 183,
                'id' => 562,
                'name' => 'دزفول',
                'province_id' => 13,
            ),
            62 => 
            array (
                'county_id' => 183,
                'id' => 563,
                'name' => 'سالند',
                'province_id' => 13,
            ),
            63 => 
            array (
                'county_id' => 183,
                'id' => 564,
                'name' => 'سیاه منصور',
                'province_id' => 13,
            ),
            64 => 
            array (
                'county_id' => 183,
                'id' => 565,
                'name' => 'شمس آباد',
                'province_id' => 13,
            ),
            65 => 
            array (
                'county_id' => 183,
                'id' => 566,
                'name' => 'شهر امام',
                'province_id' => 13,
            ),
            66 => 
            array (
                'county_id' => 183,
                'id' => 567,
                'name' => 'صفی آباد',
                'province_id' => 13,
            ),
            67 => 
            array (
                'county_id' => 183,
                'id' => 568,
                'name' => 'میانرود',
                'province_id' => 13,
            ),
            68 => 
            array (
                'county_id' => 184,
                'id' => 569,
                'name' => 'ابوحمیظه',
                'province_id' => 13,
            ),
            69 => 
            array (
                'county_id' => 184,
                'id' => 570,
                'name' => 'بستان',
                'province_id' => 13,
            ),
            70 => 
            array (
                'county_id' => 184,
                'id' => 571,
                'name' => 'سوسنگرد',
                'province_id' => 13,
            ),
            71 => 
            array (
                'county_id' => 184,
                'id' => 572,
                'name' => 'کوت سیدنعیم',
                'province_id' => 13,
            ),
            72 => 
            array (
                'county_id' => 185,
                'id' => 573,
                'name' => 'رامشیر',
                'province_id' => 13,
            ),
            73 => 
            array (
                'county_id' => 185,
                'id' => 574,
                'name' => 'مشراگه',
                'province_id' => 13,
            ),
            74 => 
            array (
                'county_id' => 186,
                'id' => 575,
                'name' => 'رامهرمز',
                'province_id' => 13,
            ),
            75 => 
            array (
                'county_id' => 187,
                'id' => 576,
                'name' => 'خنافره',
                'province_id' => 13,
            ),
            76 => 
            array (
                'county_id' => 187,
                'id' => 577,
                'name' => 'دارخوین',
                'province_id' => 13,
            ),
            77 => 
            array (
                'county_id' => 187,
                'id' => 578,
                'name' => 'شادگان',
                'province_id' => 13,
            ),
            78 => 
            array (
                'county_id' => 188,
                'id' => 579,
                'name' => 'الوان',
                'province_id' => 13,
            ),
            79 => 
            array (
                'county_id' => 188,
                'id' => 580,
                'name' => 'حر',
                'province_id' => 13,
            ),
            80 => 
            array (
                'county_id' => 188,
                'id' => 581,
                'name' => 'شاوور',
                'province_id' => 13,
            ),
            81 => 
            array (
                'county_id' => 188,
                'id' => 582,
                'name' => 'شوش',
                'province_id' => 13,
            ),
            82 => 
            array (
                'county_id' => 188,
                'id' => 583,
                'name' => 'فتح المبین',
                'province_id' => 13,
            ),
            83 => 
            array (
                'county_id' => 189,
                'id' => 584,
                'name' => 'سرداران',
                'province_id' => 13,
            ),
            84 => 
            array (
                'county_id' => 189,
                'id' => 585,
                'name' => 'شرافت',
                'province_id' => 13,
            ),
            85 => 
            array (
                'county_id' => 189,
                'id' => 586,
                'name' => 'شوشتر',
                'province_id' => 13,
            ),
            86 => 
            array (
                'county_id' => 189,
                'id' => 587,
                'name' => 'گوریه',
                'province_id' => 13,
            ),
            87 => 
            array (
                'county_id' => 190,
                'id' => 588,
                'name' => 'کوت عبداله',
                'province_id' => 13,
            ),
            88 => 
            array (
                'county_id' => 191,
                'id' => 589,
                'name' => 'ترکالکی',
                'province_id' => 13,
            ),
            89 => 
            array (
                'county_id' => 191,
                'id' => 590,
                'name' => 'جنت مکان',
                'province_id' => 13,
            ),
            90 => 
            array (
                'county_id' => 191,
                'id' => 591,
                'name' => 'سماله',
                'province_id' => 13,
            ),
            91 => 
            array (
                'county_id' => 191,
                'id' => 592,
                'name' => 'صالح شهر',
                'province_id' => 13,
            ),
            92 => 
            array (
                'county_id' => 191,
                'id' => 593,
                'name' => 'گتوند',
                'province_id' => 13,
            ),
            93 => 
            array (
                'county_id' => 192,
                'id' => 594,
                'name' => 'لالی',
                'province_id' => 13,
            ),
            94 => 
            array (
                'county_id' => 193,
                'id' => 595,
                'name' => 'گلگیر',
                'province_id' => 13,
            ),
            95 => 
            array (
                'county_id' => 193,
                'id' => 596,
                'name' => 'مسجدسلیمان',
                'province_id' => 13,
            ),
            96 => 
            array (
                'county_id' => 194,
                'id' => 597,
                'name' => 'هفتگل',
                'province_id' => 13,
            ),
            97 => 
            array (
                'county_id' => 195,
                'id' => 598,
                'name' => 'زهره',
                'province_id' => 13,
            ),
            98 => 
            array (
                'county_id' => 195,
                'id' => 599,
                'name' => 'هندیجان',
                'province_id' => 13,
            ),
            99 => 
            array (
                'county_id' => 196,
                'id' => 600,
                'name' => 'رفیع',
                'province_id' => 13,
            ),
            100 => 
            array (
                'county_id' => 196,
                'id' => 601,
                'name' => 'هویزه',
                'province_id' => 13,
            ),
            101 => 
            array (
                'county_id' => 197,
                'id' => 602,
                'name' => 'ابهر',
                'province_id' => 14,
            ),
            102 => 
            array (
                'county_id' => 197,
                'id' => 603,
                'name' => 'صایین قلعه',
                'province_id' => 14,
            ),
            103 => 
            array (
                'county_id' => 197,
                'id' => 604,
                'name' => 'هیدج',
                'province_id' => 14,
            ),
            104 => 
            array (
                'county_id' => 198,
                'id' => 605,
                'name' => 'حلب',
                'province_id' => 14,
            ),
            105 => 
            array (
                'county_id' => 198,
                'id' => 606,
                'name' => 'زرین آباد',
                'province_id' => 14,
            ),
            106 => 
            array (
                'county_id' => 199,
                'id' => 607,
                'name' => 'زرین رود',
                'province_id' => 14,
            ),
            107 => 
            array (
                'county_id' => 199,
                'id' => 608,
                'name' => 'سجاس',
                'province_id' => 14,
            ),
            108 => 
            array (
                'county_id' => 199,
                'id' => 609,
                'name' => 'سهرورد',
                'province_id' => 14,
            ),
            109 => 
            array (
                'county_id' => 199,
                'id' => 610,
                'name' => 'قیدار',
                'province_id' => 14,
            ),
            110 => 
            array (
                'county_id' => 199,
                'id' => 611,
                'name' => 'کرسف',
                'province_id' => 14,
            ),
            111 => 
            array (
                'county_id' => 199,
                'id' => 612,
                'name' => 'گرماب',
                'province_id' => 14,
            ),
            112 => 
            array (
                'county_id' => 199,
                'id' => 613,
                'name' => 'نوربهار',
                'province_id' => 14,
            ),
            113 => 
            array (
                'county_id' => 200,
                'id' => 614,
                'name' => 'خرمدره',
                'province_id' => 14,
            ),
            114 => 
            array (
                'county_id' => 201,
                'id' => 615,
                'name' => 'ارمغانخانه',
                'province_id' => 14,
            ),
            115 => 
            array (
                'county_id' => 201,
                'id' => 616,
                'name' => 'زنجان',
                'province_id' => 14,
            ),
            116 => 
            array (
                'county_id' => 201,
                'id' => 617,
                'name' => 'نیک پی',
                'province_id' => 14,
            ),
            117 => 
            array (
                'county_id' => 202,
                'id' => 618,
                'name' => 'سلطانیه',
                'province_id' => 14,
            ),
            118 => 
            array (
                'county_id' => 203,
                'id' => 619,
                'name' => 'آب بر',
                'province_id' => 14,
            ),
            119 => 
            array (
                'county_id' => 203,
                'id' => 620,
                'name' => 'چورزق',
                'province_id' => 14,
            ),
            120 => 
            array (
                'county_id' => 204,
                'id' => 621,
                'name' => 'دندی',
                'province_id' => 14,
            ),
            121 => 
            array (
                'county_id' => 204,
                'id' => 622,
                'name' => 'ماه نشان',
                'province_id' => 14,
            ),
            122 => 
            array (
                'county_id' => 205,
                'id' => 623,
                'name' => 'آرادان',
                'province_id' => 15,
            ),
            123 => 
            array (
                'county_id' => 205,
                'id' => 624,
                'name' => 'کهن آباد',
                'province_id' => 15,
            ),
            124 => 
            array (
                'county_id' => 206,
                'id' => 625,
                'name' => 'امیریه',
                'province_id' => 15,
            ),
            125 => 
            array (
                'county_id' => 206,
                'id' => 626,
                'name' => 'دامغان',
                'province_id' => 15,
            ),
            126 => 
            array (
                'county_id' => 206,
                'id' => 627,
                'name' => 'دیباج',
                'province_id' => 15,
            ),
            127 => 
            array (
                'county_id' => 206,
                'id' => 628,
                'name' => 'کلاته',
                'province_id' => 15,
            ),
            128 => 
            array (
                'county_id' => 207,
                'id' => 629,
                'name' => 'سرخه',
                'province_id' => 15,
            ),
            129 => 
            array (
                'county_id' => 208,
                'id' => 630,
                'name' => 'سمنان',
                'province_id' => 15,
            ),
            130 => 
            array (
                'county_id' => 209,
                'id' => 631,
                'name' => 'بسطام',
                'province_id' => 15,
            ),
            131 => 
            array (
                'county_id' => 209,
                'id' => 632,
                'name' => 'بیارجمند',
                'province_id' => 15,
            ),
            132 => 
            array (
                'county_id' => 209,
                'id' => 633,
                'name' => 'رودیان',
                'province_id' => 15,
            ),
            133 => 
            array (
                'county_id' => 209,
                'id' => 634,
                'name' => 'شاهرود',
                'province_id' => 15,
            ),
            134 => 
            array (
                'county_id' => 209,
                'id' => 635,
                'name' => 'کلاته خیج',
                'province_id' => 15,
            ),
            135 => 
            array (
                'county_id' => 209,
                'id' => 636,
                'name' => 'مجن',
                'province_id' => 15,
            ),
            136 => 
            array (
                'county_id' => 210,
                'id' => 637,
                'name' => 'ایوانکی',
                'province_id' => 15,
            ),
            137 => 
            array (
                'county_id' => 210,
                'id' => 638,
                'name' => 'گرمسار',
                'province_id' => 15,
            ),
            138 => 
            array (
                'county_id' => 211,
                'id' => 639,
                'name' => 'درجزین',
                'province_id' => 15,
            ),
            139 => 
            array (
                'county_id' => 211,
                'id' => 640,
                'name' => 'شهمیرزاد',
                'province_id' => 15,
            ),
            140 => 
            array (
                'county_id' => 211,
                'id' => 641,
                'name' => 'مهدی شهر',
                'province_id' => 15,
            ),
            141 => 
            array (
                'county_id' => 212,
                'id' => 642,
                'name' => 'میامی',
                'province_id' => 15,
            ),
            142 => 
            array (
                'county_id' => 213,
                'id' => 643,
                'name' => 'ایرانشهر',
                'province_id' => 16,
            ),
            143 => 
            array (
                'county_id' => 213,
                'id' => 644,
                'name' => 'بزمان',
                'province_id' => 16,
            ),
            144 => 
            array (
                'county_id' => 213,
                'id' => 645,
                'name' => 'بمپور',
                'province_id' => 16,
            ),
            145 => 
            array (
                'county_id' => 213,
                'id' => 646,
                'name' => 'محمدان',
                'province_id' => 16,
            ),
            146 => 
            array (
                'county_id' => 214,
                'id' => 647,
                'name' => 'چابهار',
                'province_id' => 16,
            ),
            147 => 
            array (
                'county_id' => 214,
                'id' => 648,
                'name' => 'نگور',
                'province_id' => 16,
            ),
            148 => 
            array (
                'county_id' => 215,
                'id' => 649,
                'name' => 'خاش',
                'province_id' => 16,
            ),
            149 => 
            array (
                'county_id' => 215,
                'id' => 650,
                'name' => 'نوک آباد',
                'province_id' => 16,
            ),
            150 => 
            array (
                'county_id' => 216,
                'id' => 651,
                'name' => 'گلمورتی',
                'province_id' => 16,
            ),
            151 => 
            array (
                'county_id' => 217,
                'id' => 652,
                'name' => 'بنجار',
                'province_id' => 16,
            ),
            152 => 
            array (
                'county_id' => 217,
                'id' => 653,
                'name' => 'زابل',
                'province_id' => 16,
            ),
            153 => 
            array (
                'county_id' => 218,
                'id' => 654,
                'name' => 'زاهدان',
                'province_id' => 16,
            ),
            154 => 
            array (
                'county_id' => 218,
                'id' => 655,
                'name' => 'نصرت آباد',
                'province_id' => 16,
            ),
            155 => 
            array (
                'county_id' => 219,
                'id' => 656,
                'name' => 'زهک',
                'province_id' => 16,
            ),
            156 => 
            array (
                'county_id' => 220,
                'id' => 657,
                'name' => 'جالق',
                'province_id' => 16,
            ),
            157 => 
            array (
                'county_id' => 220,
                'id' => 658,
                'name' => 'سراوان',
                'province_id' => 16,
            ),
            158 => 
            array (
                'county_id' => 220,
                'id' => 659,
                'name' => 'سیرکان',
                'province_id' => 16,
            ),
            159 => 
            array (
                'county_id' => 220,
                'id' => 660,
                'name' => 'گشت',
                'province_id' => 16,
            ),
            160 => 
            array (
                'county_id' => 220,
                'id' => 661,
                'name' => 'محمدی',
                'province_id' => 16,
            ),
            161 => 
            array (
                'county_id' => 221,
                'id' => 662,
                'name' => 'پیشین',
                'province_id' => 16,
            ),
            162 => 
            array (
                'county_id' => 221,
                'id' => 663,
                'name' => 'راسک',
                'province_id' => 16,
            ),
            163 => 
            array (
                'county_id' => 221,
                'id' => 664,
                'name' => 'سرباز',
                'province_id' => 16,
            ),
            164 => 
            array (
                'county_id' => 222,
                'id' => 665,
                'name' => 'سوران',
                'province_id' => 16,
            ),
            165 => 
            array (
                'county_id' => 222,
                'id' => 666,
                'name' => 'هیدوچ',
                'province_id' => 16,
            ),
            166 => 
            array (
                'county_id' => 223,
                'id' => 667,
                'name' => 'فنوج',
                'province_id' => 16,
            ),
            167 => 
            array (
                'county_id' => 224,
                'id' => 668,
                'name' => 'قصرقند',
                'province_id' => 16,
            ),
            168 => 
            array (
                'county_id' => 225,
                'id' => 669,
                'name' => 'زرآباد',
                'province_id' => 16,
            ),
            169 => 
            array (
                'county_id' => 225,
                'id' => 670,
                'name' => 'کنارک',
                'province_id' => 16,
            ),
            170 => 
            array (
                'county_id' => 226,
                'id' => 671,
                'name' => 'مهرستان',
                'province_id' => 16,
            ),
            171 => 
            array (
                'county_id' => 227,
                'id' => 672,
                'name' => 'میرجاوه',
                'province_id' => 16,
            ),
            172 => 
            array (
                'county_id' => 228,
                'id' => 673,
                'name' => 'اسپکه',
                'province_id' => 16,
            ),
            173 => 
            array (
                'county_id' => 228,
                'id' => 674,
                'name' => 'بنت',
                'province_id' => 16,
            ),
            174 => 
            array (
                'county_id' => 228,
                'id' => 675,
                'name' => 'نیک شهر',
                'province_id' => 16,
            ),
            175 => 
            array (
                'county_id' => 229,
                'id' => 676,
                'name' => 'ادیمی',
                'province_id' => 16,
            ),
            176 => 
            array (
                'county_id' => 230,
                'id' => 677,
                'name' => 'شهرک علی اکبر',
                'province_id' => 16,
            ),
            177 => 
            array (
                'county_id' => 230,
                'id' => 678,
                'name' => 'محمدآباد',
                'province_id' => 16,
            ),
            178 => 
            array (
                'county_id' => 231,
                'id' => 679,
                'name' => 'دوست محمد',
                'province_id' => 16,
            ),
            179 => 
            array (
                'county_id' => 232,
                'id' => 680,
                'name' => 'آباده',
                'province_id' => 17,
            ),
            180 => 
            array (
                'county_id' => 232,
                'id' => 681,
                'name' => 'ایزدخواست',
                'province_id' => 17,
            ),
            181 => 
            array (
                'county_id' => 232,
                'id' => 682,
                'name' => 'بهمن',
                'province_id' => 17,
            ),
            182 => 
            array (
                'county_id' => 232,
                'id' => 683,
                'name' => 'سورمق',
                'province_id' => 17,
            ),
            183 => 
            array (
                'county_id' => 232,
                'id' => 684,
                'name' => 'صغاد',
                'province_id' => 17,
            ),
            184 => 
            array (
                'county_id' => 233,
                'id' => 685,
                'name' => 'ارسنجان',
                'province_id' => 17,
            ),
            185 => 
            array (
                'county_id' => 234,
                'id' => 686,
                'name' => 'استهبان',
                'province_id' => 17,
            ),
            186 => 
            array (
                'county_id' => 234,
                'id' => 687,
                'name' => 'ایج',
                'province_id' => 17,
            ),
            187 => 
            array (
                'county_id' => 234,
                'id' => 688,
                'name' => 'رونیز',
                'province_id' => 17,
            ),
            188 => 
            array (
                'county_id' => 235,
                'id' => 689,
                'name' => 'اقلید',
                'province_id' => 17,
            ),
            189 => 
            array (
                'county_id' => 235,
                'id' => 690,
                'name' => 'حسن اباد',
                'province_id' => 17,
            ),
            190 => 
            array (
                'county_id' => 235,
                'id' => 691,
                'name' => 'دژکرد',
                'province_id' => 17,
            ),
            191 => 
            array (
                'county_id' => 235,
                'id' => 692,
                'name' => 'سده',
                'province_id' => 17,
            ),
            192 => 
            array (
                'county_id' => 236,
                'id' => 693,
                'name' => 'بوانات',
                'province_id' => 17,
            ),
            193 => 
            array (
                'county_id' => 236,
                'id' => 694,
                'name' => 'حسامی',
                'province_id' => 17,
            ),
            194 => 
            array (
                'county_id' => 236,
                'id' => 695,
                'name' => 'کره ای',
                'province_id' => 17,
            ),
            195 => 
            array (
                'county_id' => 236,
                'id' => 696,
                'name' => 'مزایجان',
                'province_id' => 17,
            ),
            196 => 
            array (
                'county_id' => 237,
                'id' => 697,
                'name' => 'سعادت شهر',
                'province_id' => 17,
            ),
            197 => 
            array (
                'county_id' => 237,
                'id' => 698,
                'name' => 'مادرسلیمان',
                'province_id' => 17,
            ),
            198 => 
            array (
                'county_id' => 238,
                'id' => 699,
                'name' => 'باب انار',
                'province_id' => 17,
            ),
            199 => 
            array (
                'county_id' => 238,
                'id' => 700,
                'name' => 'جهرم',
                'province_id' => 17,
            ),
            200 => 
            array (
                'county_id' => 238,
                'id' => 701,
                'name' => 'خاوران',
                'province_id' => 17,
            ),
            201 => 
            array (
                'county_id' => 238,
                'id' => 702,
                'name' => 'دوزه',
                'province_id' => 17,
            ),
            202 => 
            array (
                'county_id' => 238,
                'id' => 703,
                'name' => 'قطب آباد',
                'province_id' => 17,
            ),
            203 => 
            array (
                'county_id' => 239,
                'id' => 704,
                'name' => 'خرامه',
                'province_id' => 17,
            ),
            204 => 
            array (
                'county_id' => 239,
                'id' => 705,
                'name' => 'سلطان شهر',
                'province_id' => 17,
            ),
            205 => 
            array (
                'county_id' => 240,
                'id' => 706,
                'name' => 'صفاشهر',
                'province_id' => 17,
            ),
            206 => 
            array (
                'county_id' => 240,
                'id' => 707,
                'name' => 'قادراباد',
                'province_id' => 17,
            ),
            207 => 
            array (
                'county_id' => 241,
                'id' => 708,
                'name' => 'خنج',
                'province_id' => 17,
            ),
            208 => 
            array (
                'county_id' => 242,
                'id' => 709,
                'name' => 'جنت شهر',
                'province_id' => 17,
            ),
            209 => 
            array (
                'county_id' => 242,
                'id' => 710,
                'name' => 'داراب',
                'province_id' => 17,
            ),
            210 => 
            array (
                'county_id' => 242,
                'id' => 711,
                'name' => 'دوبرجی',
                'province_id' => 17,
            ),
            211 => 
            array (
                'county_id' => 242,
                'id' => 712,
                'name' => 'فدامی',
                'province_id' => 17,
            ),
            212 => 
            array (
                'county_id' => 243,
                'id' => 713,
                'name' => 'کوپن',
                'province_id' => 17,
            ),
            213 => 
            array (
                'county_id' => 243,
                'id' => 714,
                'name' => 'مصیری',
                'province_id' => 17,
            ),
            214 => 
            array (
                'county_id' => 244,
                'id' => 715,
                'name' => 'حاجی آباد',
                'province_id' => 17,
            ),
            215 => 
            array (
                'county_id' => 244,
                'id' => 716,
                'name' => 'دبیران',
                'province_id' => 17,
            ),
            216 => 
            array (
                'county_id' => 244,
                'id' => 717,
                'name' => 'شهرپیر',
                'province_id' => 17,
            ),
            217 => 
            array (
                'county_id' => 245,
                'id' => 718,
                'name' => 'اردکان',
                'province_id' => 17,
            ),
            218 => 
            array (
                'county_id' => 245,
                'id' => 719,
                'name' => 'بیضا',
                'province_id' => 17,
            ),
            219 => 
            array (
                'county_id' => 245,
                'id' => 720,
                'name' => 'هماشهر',
                'province_id' => 17,
            ),
            220 => 
            array (
                'county_id' => 246,
                'id' => 721,
                'name' => 'سروستان',
                'province_id' => 17,
            ),
            221 => 
            array (
                'county_id' => 246,
                'id' => 722,
                'name' => 'کوهنجان',
                'province_id' => 17,
            ),
            222 => 
            array (
                'county_id' => 247,
                'id' => 723,
                'name' => 'خانه زنیان',
                'province_id' => 17,
            ),
            223 => 
            array (
                'county_id' => 247,
                'id' => 724,
                'name' => 'داریان',
                'province_id' => 17,
            ),
            224 => 
            array (
                'county_id' => 247,
                'id' => 725,
                'name' => 'زرقان',
                'province_id' => 17,
            ),
            225 => 
            array (
                'county_id' => 247,
                'id' => 726,
                'name' => 'شهرصدرا',
                'province_id' => 17,
            ),
            226 => 
            array (
                'county_id' => 247,
                'id' => 727,
                'name' => 'شیراز',
                'province_id' => 17,
            ),
            227 => 
            array (
                'county_id' => 247,
                'id' => 728,
                'name' => 'لپویی',
                'province_id' => 17,
            ),
            228 => 
            array (
                'county_id' => 248,
                'id' => 729,
                'name' => 'دهرم',
                'province_id' => 17,
            ),
            229 => 
            array (
                'county_id' => 248,
                'id' => 730,
                'name' => 'فراشبند',
                'province_id' => 17,
            ),
            230 => 
            array (
                'county_id' => 248,
                'id' => 731,
                'name' => 'نوجین',
                'province_id' => 17,
            ),
            231 => 
            array (
                'county_id' => 249,
                'id' => 732,
                'name' => 'زاهدشهر',
                'province_id' => 17,
            ),
            232 => 
            array (
                'county_id' => 249,
                'id' => 733,
                'name' => 'ششده',
                'province_id' => 17,
            ),
            233 => 
            array (
                'county_id' => 249,
                'id' => 734,
                'name' => 'فسا',
                'province_id' => 17,
            ),
            234 => 
            array (
                'county_id' => 249,
                'id' => 735,
                'name' => 'قره بلاغ',
                'province_id' => 17,
            ),
            235 => 
            array (
                'county_id' => 249,
                'id' => 736,
                'name' => 'میانشهر',
                'province_id' => 17,
            ),
            236 => 
            array (
                'county_id' => 249,
                'id' => 737,
                'name' => 'نوبندگان',
                'province_id' => 17,
            ),
            237 => 
            array (
                'county_id' => 250,
                'id' => 738,
                'name' => 'فیروزآباد',
                'province_id' => 17,
            ),
            238 => 
            array (
                'county_id' => 250,
                'id' => 739,
                'name' => 'میمند',
                'province_id' => 17,
            ),
            239 => 
            array (
                'county_id' => 251,
                'id' => 740,
                'name' => 'افزر',
                'province_id' => 17,
            ),
            240 => 
            array (
                'county_id' => 251,
                'id' => 741,
                'name' => 'امام شهر',
                'province_id' => 17,
            ),
            241 => 
            array (
                'county_id' => 251,
                'id' => 742,
                'name' => 'قیر',
                'province_id' => 17,
            ),
            242 => 
            array (
                'county_id' => 251,
                'id' => 743,
            'name' => 'کارزین (فتح آباد)',
                'province_id' => 17,
            ),
            243 => 
            array (
                'county_id' => 251,
                'id' => 744,
                'name' => 'مبارک آباددیز',
                'province_id' => 17,
            ),
            244 => 
            array (
                'county_id' => 252,
                'id' => 745,
                'name' => 'بالاده',
                'province_id' => 17,
            ),
            245 => 
            array (
                'county_id' => 252,
                'id' => 746,
                'name' => 'خشت',
                'province_id' => 17,
            ),
            246 => 
            array (
                'county_id' => 252,
                'id' => 747,
                'name' => 'قایمیه',
                'province_id' => 17,
            ),
            247 => 
            array (
                'county_id' => 252,
                'id' => 748,
                'name' => 'کازرون',
                'province_id' => 17,
            ),
            248 => 
            array (
                'county_id' => 252,
                'id' => 749,
                'name' => 'کنارتخته',
                'province_id' => 17,
            ),
            249 => 
            array (
                'county_id' => 252,
                'id' => 750,
                'name' => 'نودان',
                'province_id' => 17,
            ),
            250 => 
            array (
                'county_id' => 253,
                'id' => 751,
                'name' => 'کوار',
                'province_id' => 17,
            ),
            251 => 
            array (
                'county_id' => 254,
                'id' => 752,
                'name' => 'گراش',
                'province_id' => 17,
            ),
            252 => 
            array (
                'county_id' => 255,
                'id' => 753,
                'name' => 'اوز',
                'province_id' => 17,
            ),
            253 => 
            array (
                'county_id' => 255,
                'id' => 754,
                'name' => 'بنارویه',
                'province_id' => 17,
            ),
            254 => 
            array (
                'county_id' => 255,
                'id' => 755,
                'name' => 'بیرم',
                'province_id' => 17,
            ),
            255 => 
            array (
                'county_id' => 255,
                'id' => 756,
                'name' => 'جویم',
                'province_id' => 17,
            ),
            256 => 
            array (
                'county_id' => 255,
                'id' => 757,
                'name' => 'خور',
                'province_id' => 17,
            ),
            257 => 
            array (
                'county_id' => 255,
                'id' => 758,
                'name' => 'عمادده',
                'province_id' => 17,
            ),
            258 => 
            array (
                'county_id' => 255,
                'id' => 759,
                'name' => 'لار',
                'province_id' => 17,
            ),
            259 => 
            array (
                'county_id' => 255,
                'id' => 760,
                'name' => 'لطیفی',
                'province_id' => 17,
            ),
            260 => 
            array (
                'county_id' => 256,
                'id' => 761,
                'name' => 'اشکنان',
                'province_id' => 17,
            ),
            261 => 
            array (
                'county_id' => 256,
                'id' => 762,
                'name' => 'اهل',
                'province_id' => 17,
            ),
            262 => 
            array (
                'county_id' => 256,
                'id' => 763,
                'name' => 'علامرودشت',
                'province_id' => 17,
            ),
            263 => 
            array (
                'county_id' => 256,
                'id' => 764,
                'name' => 'لامرد',
                'province_id' => 17,
            ),
            264 => 
            array (
                'county_id' => 257,
                'id' => 765,
                'name' => 'خانیمن',
                'province_id' => 17,
            ),
            265 => 
            array (
                'county_id' => 257,
                'id' => 766,
                'name' => 'رامجرد',
                'province_id' => 17,
            ),
            266 => 
            array (
                'county_id' => 257,
                'id' => 767,
                'name' => 'سیدان',
                'province_id' => 17,
            ),
            267 => 
            array (
                'county_id' => 257,
                'id' => 768,
                'name' => 'کامفیروز',
                'province_id' => 17,
            ),
            268 => 
            array (
                'county_id' => 257,
                'id' => 769,
                'name' => 'مرودشت',
                'province_id' => 17,
            ),
            269 => 
            array (
                'county_id' => 258,
                'id' => 770,
                'name' => 'بابامنیر',
                'province_id' => 17,
            ),
            270 => 
            array (
                'county_id' => 258,
                'id' => 771,
                'name' => 'خومه زار',
                'province_id' => 17,
            ),
            271 => 
            array (
                'county_id' => 258,
                'id' => 772,
                'name' => 'نورآباد',
                'province_id' => 17,
            ),
            272 => 
            array (
                'county_id' => 259,
                'id' => 773,
                'name' => 'اسیر',
                'province_id' => 17,
            ),
            273 => 
            array (
                'county_id' => 259,
                'id' => 774,
                'name' => 'خوزی',
                'province_id' => 17,
            ),
            274 => 
            array (
                'county_id' => 259,
                'id' => 775,
                'name' => 'گله دار',
                'province_id' => 17,
            ),
            275 => 
            array (
                'county_id' => 259,
                'id' => 776,
                'name' => 'مهر',
                'province_id' => 17,
            ),
            276 => 
            array (
                'county_id' => 259,
                'id' => 777,
                'name' => 'وراوی',
                'province_id' => 17,
            ),
            277 => 
            array (
                'county_id' => 260,
                'id' => 778,
                'name' => 'آباده طشک',
                'province_id' => 17,
            ),
            278 => 
            array (
                'county_id' => 260,
                'id' => 779,
                'name' => 'قطرویه',
                'province_id' => 17,
            ),
            279 => 
            array (
                'county_id' => 260,
                'id' => 780,
                'name' => 'مشکان',
                'province_id' => 17,
            ),
            280 => 
            array (
                'county_id' => 260,
                'id' => 781,
                'name' => 'نی ریز',
                'province_id' => 17,
            ),
            281 => 
            array (
                'county_id' => 261,
                'id' => 782,
                'name' => 'آبیک',
                'province_id' => 18,
            ),
            282 => 
            array (
                'county_id' => 261,
                'id' => 783,
                'name' => 'خاکعلی',
                'province_id' => 18,
            ),
            283 => 
            array (
                'county_id' => 262,
                'id' => 784,
                'name' => 'آبگرم',
                'province_id' => 18,
            ),
            284 => 
            array (
                'county_id' => 262,
                'id' => 785,
                'name' => 'آوج',
                'province_id' => 18,
            ),
            285 => 
            array (
                'county_id' => 263,
                'id' => 786,
                'name' => 'الوند',
                'province_id' => 18,
            ),
            286 => 
            array (
                'county_id' => 263,
                'id' => 787,
                'name' => 'بیدستان',
                'province_id' => 18,
            ),
            287 => 
            array (
                'county_id' => 263,
                'id' => 788,
                'name' => 'شریفیه',
                'province_id' => 18,
            ),
            288 => 
            array (
                'county_id' => 263,
                'id' => 789,
                'name' => 'محمدیه',
                'province_id' => 18,
            ),
            289 => 
            array (
                'county_id' => 264,
                'id' => 790,
                'name' => 'ارداق',
                'province_id' => 18,
            ),
            290 => 
            array (
                'county_id' => 264,
                'id' => 791,
                'name' => 'بویین زهرا',
                'province_id' => 18,
            ),
            291 => 
            array (
                'county_id' => 264,
                'id' => 792,
                'name' => 'دانسفهان',
                'province_id' => 18,
            ),
            292 => 
            array (
                'county_id' => 264,
                'id' => 793,
                'name' => 'سگزآباد',
                'province_id' => 18,
            ),
            293 => 
            array (
                'county_id' => 264,
                'id' => 794,
                'name' => 'شال',
                'province_id' => 18,
            ),
            294 => 
            array (
                'county_id' => 265,
                'id' => 795,
                'name' => 'اسفرورین',
                'province_id' => 18,
            ),
            295 => 
            array (
                'county_id' => 265,
                'id' => 796,
                'name' => 'تاکستان',
                'province_id' => 18,
            ),
            296 => 
            array (
                'county_id' => 265,
                'id' => 797,
                'name' => 'خرمدشت',
                'province_id' => 18,
            ),
            297 => 
            array (
                'county_id' => 265,
                'id' => 798,
                'name' => 'ضیاڈآباد',
                'province_id' => 18,
            ),
            298 => 
            array (
                'county_id' => 265,
                'id' => 799,
                'name' => 'نرجه',
                'province_id' => 18,
            ),
            299 => 
            array (
                'county_id' => 266,
                'id' => 800,
                'name' => 'اقبالیه',
                'province_id' => 18,
            ),
            300 => 
            array (
                'county_id' => 266,
                'id' => 801,
                'name' => 'رازمیان',
                'province_id' => 18,
            ),
            301 => 
            array (
                'county_id' => 266,
                'id' => 802,
                'name' => 'سیردان',
                'province_id' => 18,
            ),
            302 => 
            array (
                'county_id' => 266,
                'id' => 803,
                'name' => 'قزوین',
                'province_id' => 18,
            ),
            303 => 
            array (
                'county_id' => 266,
                'id' => 804,
                'name' => 'کوهین',
                'province_id' => 18,
            ),
            304 => 
            array (
                'county_id' => 266,
                'id' => 805,
                'name' => 'محمودآبادنمونه',
                'province_id' => 18,
            ),
            305 => 
            array (
                'county_id' => 266,
                'id' => 806,
                'name' => 'معلم کلایه',
                'province_id' => 18,
            ),
            306 => 
            array (
                'county_id' => 267,
                'id' => 807,
                'name' => 'جعفریه',
                'province_id' => 19,
            ),
            307 => 
            array (
                'county_id' => 267,
                'id' => 808,
                'name' => 'دستجرد',
                'province_id' => 19,
            ),
            308 => 
            array (
                'county_id' => 267,
                'id' => 809,
                'name' => 'سلفچگان',
                'province_id' => 19,
            ),
            309 => 
            array (
                'county_id' => 267,
                'id' => 810,
                'name' => 'قم',
                'province_id' => 19,
            ),
            310 => 
            array (
                'county_id' => 267,
                'id' => 811,
                'name' => 'قنوات',
                'province_id' => 19,
            ),
            311 => 
            array (
                'county_id' => 267,
                'id' => 812,
                'name' => 'کهک',
                'province_id' => 19,
            ),
            312 => 
            array (
                'county_id' => 268,
                'id' => 813,
                'name' => 'آرمرده',
                'province_id' => 20,
            ),
            313 => 
            array (
                'county_id' => 268,
                'id' => 814,
                'name' => 'بانه',
                'province_id' => 20,
            ),
            314 => 
            array (
                'county_id' => 268,
                'id' => 815,
                'name' => 'بویین سفلی',
                'province_id' => 20,
            ),
            315 => 
            array (
                'county_id' => 268,
                'id' => 816,
                'name' => 'کانی سور',
                'province_id' => 20,
            ),
            316 => 
            array (
                'county_id' => 269,
                'id' => 817,
                'name' => 'بابارشانی',
                'province_id' => 20,
            ),
            317 => 
            array (
                'county_id' => 269,
                'id' => 818,
                'name' => 'بیجار',
                'province_id' => 20,
            ),
            318 => 
            array (
                'county_id' => 269,
                'id' => 819,
                'name' => 'پیرتاج',
                'province_id' => 20,
            ),
            319 => 
            array (
                'county_id' => 269,
                'id' => 820,
                'name' => 'توپ آغاج',
                'province_id' => 20,
            ),
            320 => 
            array (
                'county_id' => 269,
                'id' => 821,
                'name' => 'یاسوکند',
                'province_id' => 20,
            ),
            321 => 
            array (
                'county_id' => 270,
                'id' => 822,
                'name' => 'بلبان آباد',
                'province_id' => 20,
            ),
            322 => 
            array (
                'county_id' => 270,
                'id' => 823,
                'name' => 'دهگلان',
                'province_id' => 20,
            ),
            323 => 
            array (
                'county_id' => 271,
                'id' => 824,
                'name' => 'دیواندره',
                'province_id' => 20,
            ),
            324 => 
            array (
                'county_id' => 271,
                'id' => 825,
                'name' => 'زرینه',
                'province_id' => 20,
            ),
            325 => 
            array (
                'county_id' => 272,
                'id' => 826,
                'name' => 'اورامان تخت',
                'province_id' => 20,
            ),
            326 => 
            array (
                'county_id' => 272,
                'id' => 827,
                'name' => 'سروآباد',
                'province_id' => 20,
            ),
            327 => 
            array (
                'county_id' => 273,
                'id' => 828,
                'name' => 'سقز',
                'province_id' => 20,
            ),
            328 => 
            array (
                'county_id' => 273,
                'id' => 829,
                'name' => 'صاحب',
                'province_id' => 20,
            ),
            329 => 
            array (
                'county_id' => 274,
                'id' => 830,
                'name' => 'سنندج',
                'province_id' => 20,
            ),
            330 => 
            array (
                'county_id' => 274,
                'id' => 831,
                'name' => 'شویشه',
                'province_id' => 20,
            ),
            331 => 
            array (
                'county_id' => 275,
                'id' => 832,
                'name' => 'دزج',
                'province_id' => 20,
            ),
            332 => 
            array (
                'county_id' => 275,
                'id' => 833,
                'name' => 'دلبران',
                'province_id' => 20,
            ),
            333 => 
            array (
                'county_id' => 275,
                'id' => 834,
                'name' => 'سریش آباد',
                'province_id' => 20,
            ),
            334 => 
            array (
                'county_id' => 275,
                'id' => 835,
                'name' => 'قروه',
                'province_id' => 20,
            ),
            335 => 
            array (
                'county_id' => 276,
                'id' => 836,
                'name' => 'کامیاران',
                'province_id' => 20,
            ),
            336 => 
            array (
                'county_id' => 276,
                'id' => 837,
                'name' => 'موچش',
                'province_id' => 20,
            ),
            337 => 
            array (
                'county_id' => 277,
                'id' => 838,
                'name' => 'برده رشه',
                'province_id' => 20,
            ),
            338 => 
            array (
                'county_id' => 277,
                'id' => 839,
                'name' => 'چناره',
                'province_id' => 20,
            ),
            339 => 
            array (
                'county_id' => 277,
                'id' => 840,
                'name' => 'کانی دینار',
                'province_id' => 20,
            ),
            340 => 
            array (
                'county_id' => 277,
                'id' => 841,
                'name' => 'مریوان',
                'province_id' => 20,
            ),
            341 => 
            array (
                'county_id' => 278,
                'id' => 842,
                'name' => 'ارزوییه',
                'province_id' => 21,
            ),
            342 => 
            array (
                'county_id' => 279,
                'id' => 843,
                'name' => 'امین شهر',
                'province_id' => 21,
            ),
            343 => 
            array (
                'county_id' => 279,
                'id' => 844,
                'name' => 'انار',
                'province_id' => 21,
            ),
            344 => 
            array (
                'county_id' => 280,
                'id' => 845,
                'name' => 'بافت',
                'province_id' => 21,
            ),
            345 => 
            array (
                'county_id' => 280,
                'id' => 846,
                'name' => 'بزنجان',
                'province_id' => 21,
            ),
            346 => 
            array (
                'county_id' => 281,
                'id' => 847,
                'name' => 'بردسیر',
                'province_id' => 21,
            ),
            347 => 
            array (
                'county_id' => 281,
                'id' => 848,
                'name' => 'دشتکار',
                'province_id' => 21,
            ),
            348 => 
            array (
                'county_id' => 281,
                'id' => 849,
                'name' => 'گلزار',
                'province_id' => 21,
            ),
            349 => 
            array (
                'county_id' => 281,
                'id' => 850,
                'name' => 'لاله زار',
                'province_id' => 21,
            ),
            350 => 
            array (
                'county_id' => 281,
                'id' => 851,
                'name' => 'نگار',
                'province_id' => 21,
            ),
            351 => 
            array (
                'county_id' => 282,
                'id' => 852,
                'name' => 'بروات',
                'province_id' => 21,
            ),
            352 => 
            array (
                'county_id' => 282,
                'id' => 853,
                'name' => 'بم',
                'province_id' => 21,
            ),
            353 => 
            array (
                'county_id' => 283,
                'id' => 854,
                'name' => 'بلوک',
                'province_id' => 21,
            ),
            354 => 
            array (
                'county_id' => 283,
                'id' => 855,
                'name' => 'جبالبارز',
                'province_id' => 21,
            ),
            355 => 
            array (
                'county_id' => 283,
                'id' => 856,
                'name' => 'جیرفت',
                'province_id' => 21,
            ),
            356 => 
            array (
                'county_id' => 283,
                'id' => 857,
                'name' => 'درب بهشت',
                'province_id' => 21,
            ),
            357 => 
            array (
                'county_id' => 284,
                'id' => 858,
                'name' => 'رابر',
                'province_id' => 21,
            ),
            358 => 
            array (
                'county_id' => 284,
                'id' => 859,
                'name' => 'هنزا',
                'province_id' => 21,
            ),
            359 => 
            array (
                'county_id' => 285,
                'id' => 860,
                'name' => 'راور',
                'province_id' => 21,
            ),
            360 => 
            array (
                'county_id' => 285,
                'id' => 861,
                'name' => 'هجدک',
                'province_id' => 21,
            ),
            361 => 
            array (
                'county_id' => 286,
                'id' => 862,
                'name' => 'بهرمان',
                'province_id' => 21,
            ),
            362 => 
            array (
                'county_id' => 286,
                'id' => 863,
                'name' => 'رفسنجان',
                'province_id' => 21,
            ),
            363 => 
            array (
                'county_id' => 286,
                'id' => 864,
                'name' => 'صفاییه',
                'province_id' => 21,
            ),
            364 => 
            array (
                'county_id' => 286,
                'id' => 865,
                'name' => 'کشکوییه',
                'province_id' => 21,
            ),
            365 => 
            array (
                'county_id' => 286,
                'id' => 866,
                'name' => 'مس سرچشمه',
                'province_id' => 21,
            ),
            366 => 
            array (
                'county_id' => 287,
                'id' => 867,
                'name' => 'رودبار',
                'province_id' => 21,
            ),
            367 => 
            array (
                'county_id' => 287,
                'id' => 868,
                'name' => 'زهکلوت',
                'province_id' => 21,
            ),
            368 => 
            array (
                'county_id' => 288,
                'id' => 869,
                'name' => 'گنبکی',
                'province_id' => 21,
            ),
            369 => 
            array (
                'county_id' => 288,
                'id' => 870,
                'name' => 'محمدآباد',
                'province_id' => 21,
            ),
            370 => 
            array (
                'county_id' => 289,
                'id' => 871,
                'name' => 'خانوک',
                'province_id' => 21,
            ),
            371 => 
            array (
                'county_id' => 289,
                'id' => 872,
                'name' => 'ریحان',
                'province_id' => 21,
            ),
            372 => 
            array (
                'county_id' => 289,
                'id' => 873,
                'name' => 'زرند',
                'province_id' => 21,
            ),
            373 => 
            array (
                'county_id' => 289,
                'id' => 874,
                'name' => 'یزدان شهر',
                'province_id' => 21,
            ),
            374 => 
            array (
                'county_id' => 290,
                'id' => 875,
                'name' => 'بلورد',
                'province_id' => 21,
            ),
            375 => 
            array (
                'county_id' => 290,
                'id' => 876,
                'name' => 'پاریز',
                'province_id' => 21,
            ),
            376 => 
            array (
                'county_id' => 290,
                'id' => 877,
                'name' => 'خواجو شهر',
                'province_id' => 21,
            ),
            377 => 
            array (
                'county_id' => 290,
                'id' => 878,
                'name' => 'زیدآباد',
                'province_id' => 21,
            ),
            378 => 
            array (
                'county_id' => 290,
                'id' => 879,
                'name' => 'سیرجان',
                'province_id' => 21,
            ),
            379 => 
            array (
                'county_id' => 290,
                'id' => 880,
                'name' => 'نجف شهر',
                'province_id' => 21,
            ),
            380 => 
            array (
                'county_id' => 290,
                'id' => 881,
                'name' => 'هماشهر',
                'province_id' => 21,
            ),
            381 => 
            array (
                'county_id' => 291,
                'id' => 882,
                'name' => 'جوزم',
                'province_id' => 21,
            ),
            382 => 
            array (
                'county_id' => 291,
                'id' => 883,
                'name' => 'خاتون اباد',
                'province_id' => 21,
            ),
            383 => 
            array (
                'county_id' => 291,
                'id' => 884,
                'name' => 'خورسند',
                'province_id' => 21,
            ),
            384 => 
            array (
                'county_id' => 291,
                'id' => 885,
                'name' => 'دهج',
                'province_id' => 21,
            ),
            385 => 
            array (
                'county_id' => 291,
                'id' => 886,
                'name' => 'شهربابک',
                'province_id' => 21,
            ),
            386 => 
            array (
                'county_id' => 292,
                'id' => 887,
                'name' => 'دوساری',
                'province_id' => 21,
            ),
            387 => 
            array (
                'county_id' => 292,
                'id' => 888,
                'name' => 'عنبرآباد',
                'province_id' => 21,
            ),
            388 => 
            array (
                'county_id' => 292,
                'id' => 889,
                'name' => 'مردهک',
                'province_id' => 21,
            ),
            389 => 
            array (
                'county_id' => 293,
                'id' => 890,
                'name' => 'فاریاب',
                'province_id' => 21,
            ),
            390 => 
            array (
                'county_id' => 294,
                'id' => 891,
                'name' => 'فهرج',
                'province_id' => 21,
            ),
            391 => 
            array (
                'county_id' => 295,
                'id' => 892,
                'name' => 'قلعه گنج',
                'province_id' => 21,
            ),
            392 => 
            array (
                'county_id' => 296,
                'id' => 893,
                'name' => 'اختیارآباد',
                'province_id' => 21,
            ),
            393 => 
            array (
                'county_id' => 296,
                'id' => 894,
                'name' => 'اندوهجرد',
                'province_id' => 21,
            ),
            394 => 
            array (
                'county_id' => 296,
                'id' => 895,
                'name' => 'باغین',
                'province_id' => 21,
            ),
            395 => 
            array (
                'county_id' => 296,
                'id' => 896,
                'name' => 'جوپار',
                'province_id' => 21,
            ),
            396 => 
            array (
                'county_id' => 296,
                'id' => 897,
                'name' => 'چترود',
                'province_id' => 21,
            ),
            397 => 
            array (
                'county_id' => 296,
                'id' => 898,
                'name' => 'راین',
                'province_id' => 21,
            ),
            398 => 
            array (
                'county_id' => 296,
                'id' => 899,
                'name' => 'زنگی آباد',
                'province_id' => 21,
            ),
            399 => 
            array (
                'county_id' => 296,
                'id' => 900,
                'name' => 'شهداد',
                'province_id' => 21,
            ),
            400 => 
            array (
                'county_id' => 296,
                'id' => 901,
                'name' => 'کاظم آباد',
                'province_id' => 21,
            ),
            401 => 
            array (
                'county_id' => 296,
                'id' => 902,
                'name' => 'کرمان',
                'province_id' => 21,
            ),
            402 => 
            array (
                'county_id' => 296,
                'id' => 903,
                'name' => 'گلباف',
                'province_id' => 21,
            ),
            403 => 
            array (
                'county_id' => 296,
                'id' => 904,
                'name' => 'ماهان',
                'province_id' => 21,
            ),
            404 => 
            array (
                'county_id' => 296,
                'id' => 905,
                'name' => 'محی آباد',
                'province_id' => 21,
            ),
            405 => 
            array (
                'county_id' => 297,
                'id' => 906,
                'name' => 'کوهبنان',
                'province_id' => 21,
            ),
            406 => 
            array (
                'county_id' => 297,
                'id' => 907,
                'name' => 'کیانشهر',
                'province_id' => 21,
            ),
            407 => 
            array (
                'county_id' => 298,
                'id' => 908,
                'name' => 'کهنوج',
                'province_id' => 21,
            ),
            408 => 
            array (
                'county_id' => 299,
                'id' => 909,
                'name' => 'منوجان',
                'province_id' => 21,
            ),
            409 => 
            array (
                'county_id' => 299,
                'id' => 910,
                'name' => 'نودژ',
                'province_id' => 21,
            ),
            410 => 
            array (
                'county_id' => 300,
                'id' => 911,
                'name' => 'نرماشیر',
                'province_id' => 21,
            ),
            411 => 
            array (
                'county_id' => 300,
                'id' => 912,
                'name' => 'نظام شهر',
                'province_id' => 21,
            ),
            412 => 
            array (
                'county_id' => 301,
                'id' => 913,
                'name' => 'اسلام آبادغرب',
                'province_id' => 22,
            ),
            413 => 
            array (
                'county_id' => 301,
                'id' => 914,
                'name' => 'حمیل',
                'province_id' => 22,
            ),
            414 => 
            array (
                'county_id' => 302,
                'id' => 915,
                'name' => 'بانوره',
                'province_id' => 22,
            ),
            415 => 
            array (
                'county_id' => 302,
                'id' => 916,
                'name' => 'باینگان',
                'province_id' => 22,
            ),
            416 => 
            array (
                'county_id' => 302,
                'id' => 917,
                'name' => 'پاوه',
                'province_id' => 22,
            ),
            417 => 
            array (
                'county_id' => 302,
                'id' => 918,
                'name' => 'نودشه',
                'province_id' => 22,
            ),
            418 => 
            array (
                'county_id' => 302,
                'id' => 919,
                'name' => 'نوسود',
                'province_id' => 22,
            ),
            419 => 
            array (
                'county_id' => 303,
                'id' => 920,
                'name' => 'ازگله',
                'province_id' => 22,
            ),
            420 => 
            array (
                'county_id' => 303,
                'id' => 921,
                'name' => 'تازه آباد',
                'province_id' => 22,
            ),
            421 => 
            array (
                'county_id' => 304,
                'id' => 922,
                'name' => 'جوانرود',
                'province_id' => 22,
            ),
            422 => 
            array (
                'county_id' => 305,
                'id' => 923,
                'name' => 'ریجاب',
                'province_id' => 22,
            ),
            423 => 
            array (
                'county_id' => 305,
                'id' => 924,
                'name' => 'کرند',
                'province_id' => 22,
            ),
            424 => 
            array (
                'county_id' => 305,
                'id' => 925,
                'name' => 'گهواره',
                'province_id' => 22,
            ),
            425 => 
            array (
                'county_id' => 306,
                'id' => 926,
                'name' => 'روانسر',
                'province_id' => 22,
            ),
            426 => 
            array (
                'county_id' => 306,
                'id' => 927,
                'name' => 'شاهو',
                'province_id' => 22,
            ),
            427 => 
            array (
                'county_id' => 307,
                'id' => 928,
                'name' => 'سرپل ذهاب',
                'province_id' => 22,
            ),
            428 => 
            array (
                'county_id' => 308,
                'id' => 929,
                'name' => 'سطر',
                'province_id' => 22,
            ),
            429 => 
            array (
                'county_id' => 308,
                'id' => 930,
                'name' => 'سنقر',
                'province_id' => 22,
            ),
            430 => 
            array (
                'county_id' => 309,
                'id' => 931,
                'name' => 'صحنه',
                'province_id' => 22,
            ),
            431 => 
            array (
                'county_id' => 309,
                'id' => 932,
                'name' => 'میان راهان',
                'province_id' => 22,
            ),
            432 => 
            array (
                'county_id' => 310,
                'id' => 933,
                'name' => 'سومار',
                'province_id' => 22,
            ),
            433 => 
            array (
                'county_id' => 310,
                'id' => 934,
                'name' => 'قصرشیرین',
                'province_id' => 22,
            ),
            434 => 
            array (
                'county_id' => 311,
                'id' => 935,
                'name' => 'رباط',
                'province_id' => 22,
            ),
            435 => 
            array (
                'county_id' => 311,
                'id' => 936,
                'name' => 'کرمانشاه',
                'province_id' => 22,
            ),
            436 => 
            array (
                'county_id' => 311,
                'id' => 937,
                'name' => 'کوزران',
                'province_id' => 22,
            ),
            437 => 
            array (
                'county_id' => 311,
                'id' => 938,
                'name' => 'هلشی',
                'province_id' => 22,
            ),
            438 => 
            array (
                'county_id' => 312,
                'id' => 939,
                'name' => 'کنگاور',
                'province_id' => 22,
            ),
            439 => 
            array (
                'county_id' => 312,
                'id' => 940,
                'name' => 'گودین',
                'province_id' => 22,
            ),
            440 => 
            array (
                'county_id' => 313,
                'id' => 941,
                'name' => 'سرمست',
                'province_id' => 22,
            ),
            441 => 
            array (
                'county_id' => 313,
                'id' => 942,
                'name' => 'گیلانغرب',
                'province_id' => 22,
            ),
            442 => 
            array (
                'county_id' => 314,
                'id' => 943,
                'name' => 'بیستون',
                'province_id' => 22,
            ),
            443 => 
            array (
                'county_id' => 314,
                'id' => 944,
                'name' => 'هرسین',
                'province_id' => 22,
            ),
            444 => 
            array (
                'county_id' => 315,
                'id' => 945,
                'name' => 'باشت',
                'province_id' => 23,
            ),
            445 => 
            array (
                'county_id' => 316,
                'id' => 946,
                'name' => 'چیتاب',
                'province_id' => 23,
            ),
            446 => 
            array (
                'county_id' => 316,
                'id' => 947,
                'name' => 'گراب سفلی',
                'province_id' => 23,
            ),
            447 => 
            array (
                'county_id' => 316,
                'id' => 948,
                'name' => 'مادوان',
                'province_id' => 23,
            ),
            448 => 
            array (
                'county_id' => 316,
                'id' => 949,
                'name' => 'مارگون',
                'province_id' => 23,
            ),
            449 => 
            array (
                'county_id' => 316,
                'id' => 950,
                'name' => 'یاسوج',
                'province_id' => 23,
            ),
            450 => 
            array (
                'county_id' => 317,
                'id' => 951,
                'name' => 'لیکک',
                'province_id' => 23,
            ),
            451 => 
            array (
                'county_id' => 318,
                'id' => 952,
                'name' => 'چرام',
                'province_id' => 23,
            ),
            452 => 
            array (
                'county_id' => 318,
                'id' => 953,
                'name' => 'سرفاریاب',
                'province_id' => 23,
            ),
            453 => 
            array (
                'county_id' => 319,
                'id' => 954,
                'name' => 'پاتاوه',
                'province_id' => 23,
            ),
            454 => 
            array (
                'county_id' => 319,
                'id' => 955,
                'name' => 'سی سخت',
                'province_id' => 23,
            ),
            455 => 
            array (
                'county_id' => 320,
                'id' => 956,
                'name' => 'دهدشت',
                'province_id' => 23,
            ),
            456 => 
            array (
                'county_id' => 320,
                'id' => 957,
                'name' => 'دیشموک',
                'province_id' => 23,
            ),
            457 => 
            array (
                'county_id' => 320,
                'id' => 958,
                'name' => 'سوق',
                'province_id' => 23,
            ),
            458 => 
            array (
                'county_id' => 320,
                'id' => 959,
                'name' => 'قلعه رییسی',
                'province_id' => 23,
            ),
            459 => 
            array (
                'county_id' => 321,
                'id' => 960,
                'name' => 'دوگنبدان',
                'province_id' => 23,
            ),
            460 => 
            array (
                'county_id' => 322,
                'id' => 961,
                'name' => 'لنده',
                'province_id' => 23,
            ),
            461 => 
            array (
                'county_id' => 323,
                'id' => 962,
                'name' => 'آزادشهر',
                'province_id' => 24,
            ),
            462 => 
            array (
                'county_id' => 323,
                'id' => 963,
                'name' => 'نگین شهر',
                'province_id' => 24,
            ),
            463 => 
            array (
                'county_id' => 323,
                'id' => 964,
                'name' => 'نوده خاندوز',
                'province_id' => 24,
            ),
            464 => 
            array (
                'county_id' => 324,
                'id' => 965,
                'name' => 'آق قلا',
                'province_id' => 24,
            ),
            465 => 
            array (
                'county_id' => 324,
                'id' => 966,
                'name' => 'انبارآلوم',
                'province_id' => 24,
            ),
            466 => 
            array (
                'county_id' => 325,
                'id' => 967,
                'name' => 'بندرگز',
                'province_id' => 24,
            ),
            467 => 
            array (
                'county_id' => 325,
                'id' => 968,
                'name' => 'نوکنده',
                'province_id' => 24,
            ),
            468 => 
            array (
                'county_id' => 326,
                'id' => 969,
                'name' => 'بندرترکمن',
                'province_id' => 24,
            ),
            469 => 
            array (
                'county_id' => 327,
                'id' => 970,
                'name' => 'تاتارعلیا',
                'province_id' => 24,
            ),
            470 => 
            array (
                'county_id' => 327,
                'id' => 971,
                'name' => 'خان ببین',
                'province_id' => 24,
            ),
            471 => 
            array (
                'county_id' => 327,
                'id' => 972,
                'name' => 'دلند',
                'province_id' => 24,
            ),
            472 => 
            array (
                'county_id' => 327,
                'id' => 973,
                'name' => 'رامیان',
                'province_id' => 24,
            ),
            473 => 
            array (
                'county_id' => 328,
                'id' => 974,
                'name' => 'سنگدوین',
                'province_id' => 24,
            ),
            474 => 
            array (
                'county_id' => 328,
                'id' => 975,
                'name' => 'علی اباد',
                'province_id' => 24,
            ),
            475 => 
            array (
                'county_id' => 328,
                'id' => 976,
                'name' => 'فاضل آباد',
                'province_id' => 24,
            ),
            476 => 
            array (
                'county_id' => 328,
                'id' => 977,
                'name' => 'مزرعه',
                'province_id' => 24,
            ),
            477 => 
            array (
                'county_id' => 329,
                'id' => 978,
                'name' => 'کردکوی',
                'province_id' => 24,
            ),
            478 => 
            array (
                'county_id' => 330,
                'id' => 979,
                'name' => 'فراغی',
                'province_id' => 24,
            ),
            479 => 
            array (
                'county_id' => 330,
                'id' => 980,
                'name' => 'کلاله',
                'province_id' => 24,
            ),
            480 => 
            array (
                'county_id' => 331,
                'id' => 981,
                'name' => 'گالیکش',
                'province_id' => 24,
            ),
            481 => 
            array (
                'county_id' => 332,
                'id' => 982,
                'name' => 'جلین',
                'province_id' => 24,
            ),
            482 => 
            array (
                'county_id' => 332,
                'id' => 983,
                'name' => 'سرخنکلاته',
                'province_id' => 24,
            ),
            483 => 
            array (
                'county_id' => 332,
                'id' => 984,
                'name' => 'گرگان',
                'province_id' => 24,
            ),
            484 => 
            array (
                'county_id' => 333,
                'id' => 985,
                'name' => 'سیمین شهر',
                'province_id' => 24,
            ),
            485 => 
            array (
                'county_id' => 333,
                'id' => 986,
                'name' => 'گمیش تپه',
                'province_id' => 24,
            ),
            486 => 
            array (
                'county_id' => 334,
                'id' => 987,
                'name' => 'اینچه برون',
                'province_id' => 24,
            ),
            487 => 
            array (
                'county_id' => 334,
                'id' => 988,
                'name' => 'گنبدکاووس',
                'province_id' => 24,
            ),
            488 => 
            array (
                'county_id' => 335,
                'id' => 989,
                'name' => 'مراوه',
                'province_id' => 24,
            ),
            489 => 
            array (
                'county_id' => 336,
                'id' => 990,
                'name' => 'مینودشت',
                'province_id' => 24,
            ),
            490 => 
            array (
                'county_id' => 337,
                'id' => 991,
                'name' => 'آستارا',
                'province_id' => 25,
            ),
            491 => 
            array (
                'county_id' => 337,
                'id' => 992,
                'name' => 'لوندویل',
                'province_id' => 25,
            ),
            492 => 
            array (
                'county_id' => 338,
                'id' => 993,
                'name' => 'آستانه اشرفیه',
                'province_id' => 25,
            ),
            493 => 
            array (
                'county_id' => 338,
                'id' => 994,
                'name' => 'کیاشهر',
                'province_id' => 25,
            ),
            494 => 
            array (
                'county_id' => 339,
                'id' => 995,
                'name' => 'املش',
                'province_id' => 25,
            ),
            495 => 
            array (
                'county_id' => 339,
                'id' => 996,
                'name' => 'رانکوه',
                'province_id' => 25,
            ),
            496 => 
            array (
                'county_id' => 340,
                'id' => 997,
                'name' => 'بندرانزلی',
                'province_id' => 25,
            ),
            497 => 
            array (
                'county_id' => 341,
                'id' => 998,
                'name' => 'خشکبیجار',
                'province_id' => 25,
            ),
            498 => 
            array (
                'county_id' => 341,
                'id' => 999,
                'name' => 'خمام',
                'province_id' => 25,
            ),
            499 => 
            array (
                'county_id' => 341,
                'id' => 1000,
                'name' => 'رشت',
                'province_id' => 25,
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'county_id' => 341,
                'id' => 1001,
                'name' => 'سنگر',
                'province_id' => 25,
            ),
            1 => 
            array (
                'county_id' => 341,
                'id' => 1002,
                'name' => 'کوچصفهان',
                'province_id' => 25,
            ),
            2 => 
            array (
                'county_id' => 341,
                'id' => 1003,
                'name' => 'لشت نشاء',
                'province_id' => 25,
            ),
            3 => 
            array (
                'county_id' => 341,
                'id' => 1004,
                'name' => 'لولمان',
                'province_id' => 25,
            ),
            4 => 
            array (
                'county_id' => 342,
                'id' => 1005,
                'name' => 'پره سر',
                'province_id' => 25,
            ),
            5 => 
            array (
                'county_id' => 342,
                'id' => 1006,
                'name' => 'رضوانشهر',
                'province_id' => 25,
            ),
            6 => 
            array (
                'county_id' => 343,
                'id' => 1007,
                'name' => 'بره سر',
                'province_id' => 25,
            ),
            7 => 
            array (
                'county_id' => 343,
                'id' => 1008,
                'name' => 'توتکابن',
                'province_id' => 25,
            ),
            8 => 
            array (
                'county_id' => 343,
                'id' => 1009,
                'name' => 'جیرنده',
                'province_id' => 25,
            ),
            9 => 
            array (
                'county_id' => 343,
                'id' => 1010,
                'name' => 'رستم آباد',
                'province_id' => 25,
            ),
            10 => 
            array (
                'county_id' => 343,
                'id' => 1011,
                'name' => 'رودبار',
                'province_id' => 25,
            ),
            11 => 
            array (
                'county_id' => 343,
                'id' => 1012,
                'name' => 'لوشان',
                'province_id' => 25,
            ),
            12 => 
            array (
                'county_id' => 343,
                'id' => 1013,
                'name' => 'منجیل',
                'province_id' => 25,
            ),
            13 => 
            array (
                'county_id' => 344,
                'id' => 1014,
                'name' => 'چابکسر',
                'province_id' => 25,
            ),
            14 => 
            array (
                'county_id' => 344,
                'id' => 1015,
                'name' => 'رحیم آباد',
                'province_id' => 25,
            ),
            15 => 
            array (
                'county_id' => 344,
                'id' => 1016,
                'name' => 'رودسر',
                'province_id' => 25,
            ),
            16 => 
            array (
                'county_id' => 344,
                'id' => 1017,
                'name' => 'کلاچای',
                'province_id' => 25,
            ),
            17 => 
            array (
                'county_id' => 344,
                'id' => 1018,
                'name' => 'واجارگاه',
                'province_id' => 25,
            ),
            18 => 
            array (
                'county_id' => 345,
                'id' => 1019,
                'name' => 'دیلمان',
                'province_id' => 25,
            ),
            19 => 
            array (
                'county_id' => 345,
                'id' => 1020,
                'name' => 'سیاهکل',
                'province_id' => 25,
            ),
            20 => 
            array (
                'county_id' => 346,
                'id' => 1021,
                'name' => 'احمدسرگوراب',
                'province_id' => 25,
            ),
            21 => 
            array (
                'county_id' => 346,
                'id' => 1022,
                'name' => 'شفت',
                'province_id' => 25,
            ),
            22 => 
            array (
                'county_id' => 347,
                'id' => 1023,
                'name' => 'صومعه سرا',
                'province_id' => 25,
            ),
            23 => 
            array (
                'county_id' => 347,
                'id' => 1024,
                'name' => 'گوراب زرمیخ',
                'province_id' => 25,
            ),
            24 => 
            array (
                'county_id' => 347,
                'id' => 1025,
                'name' => 'مرجقل',
                'province_id' => 25,
            ),
            25 => 
            array (
                'county_id' => 348,
                'id' => 1026,
                'name' => 'اسالم',
                'province_id' => 25,
            ),
            26 => 
            array (
                'county_id' => 348,
                'id' => 1027,
                'name' => 'چوبر',
                'province_id' => 25,
            ),
            27 => 
            array (
                'county_id' => 348,
                'id' => 1028,
                'name' => 'حویق',
                'province_id' => 25,
            ),
            28 => 
            array (
                'county_id' => 348,
                'id' => 1029,
                'name' => 'لیسار',
                'province_id' => 25,
            ),
            29 => 
            array (
                'county_id' => 348,
                'id' => 1030,
            'name' => 'هشتپر (تالش)',
                'province_id' => 25,
            ),
            30 => 
            array (
                'county_id' => 349,
                'id' => 1031,
                'name' => 'فومن',
                'province_id' => 25,
            ),
            31 => 
            array (
                'county_id' => 349,
                'id' => 1032,
                'name' => 'ماسوله',
                'province_id' => 25,
            ),
            32 => 
            array (
                'county_id' => 349,
                'id' => 1033,
                'name' => 'ماکلوان',
                'province_id' => 25,
            ),
            33 => 
            array (
                'county_id' => 350,
                'id' => 1034,
                'name' => 'رودبنه',
                'province_id' => 25,
            ),
            34 => 
            array (
                'county_id' => 350,
                'id' => 1035,
                'name' => 'لاهیجان',
                'province_id' => 25,
            ),
            35 => 
            array (
                'county_id' => 351,
                'id' => 1036,
                'name' => 'اطاقور',
                'province_id' => 25,
            ),
            36 => 
            array (
                'county_id' => 351,
                'id' => 1037,
                'name' => 'چاف و چمخاله',
                'province_id' => 25,
            ),
            37 => 
            array (
                'county_id' => 351,
                'id' => 1038,
                'name' => 'شلمان',
                'province_id' => 25,
            ),
            38 => 
            array (
                'county_id' => 351,
                'id' => 1039,
                'name' => 'کومله',
                'province_id' => 25,
            ),
            39 => 
            array (
                'county_id' => 351,
                'id' => 1040,
                'name' => 'لنگرود',
                'province_id' => 25,
            ),
            40 => 
            array (
                'county_id' => 352,
                'id' => 1041,
                'name' => 'بازار جمعه',
                'province_id' => 25,
            ),
            41 => 
            array (
                'county_id' => 352,
                'id' => 1042,
                'name' => 'ماسال',
                'province_id' => 25,
            ),
            42 => 
            array (
                'county_id' => 353,
                'id' => 1043,
                'name' => 'ازنا',
                'province_id' => 26,
            ),
            43 => 
            array (
                'county_id' => 353,
                'id' => 1044,
                'name' => 'مومن آباد',
                'province_id' => 26,
            ),
            44 => 
            array (
                'county_id' => 354,
                'id' => 1045,
                'name' => 'الیگودرز',
                'province_id' => 26,
            ),
            45 => 
            array (
                'county_id' => 354,
                'id' => 1046,
                'name' => 'شول آباد',
                'province_id' => 26,
            ),
            46 => 
            array (
                'county_id' => 355,
                'id' => 1047,
                'name' => 'اشترینان',
                'province_id' => 26,
            ),
            47 => 
            array (
                'county_id' => 355,
                'id' => 1048,
                'name' => 'بروجرد',
                'province_id' => 26,
            ),
            48 => 
            array (
                'county_id' => 356,
                'id' => 1049,
                'name' => 'پلدختر',
                'province_id' => 26,
            ),
            49 => 
            array (
                'county_id' => 356,
                'id' => 1050,
                'name' => 'معمولان',
                'province_id' => 26,
            ),
            50 => 
            array (
                'county_id' => 357,
                'id' => 1051,
                'name' => 'بیران شهر',
                'province_id' => 26,
            ),
            51 => 
            array (
                'county_id' => 357,
                'id' => 1052,
                'name' => 'خرم آباد',
                'province_id' => 26,
            ),
            52 => 
            array (
                'county_id' => 357,
                'id' => 1053,
                'name' => 'زاغه',
                'province_id' => 26,
            ),
            53 => 
            array (
                'county_id' => 357,
                'id' => 1054,
                'name' => 'سپیددشت',
                'province_id' => 26,
            ),
            54 => 
            array (
                'county_id' => 358,
                'id' => 1055,
                'name' => 'نورآباد',
                'province_id' => 26,
            ),
            55 => 
            array (
                'county_id' => 358,
                'id' => 1056,
                'name' => 'هفت چشمه',
                'province_id' => 26,
            ),
            56 => 
            array (
                'county_id' => 359,
                'id' => 1057,
                'name' => 'چالانچولان',
                'province_id' => 26,
            ),
            57 => 
            array (
                'county_id' => 359,
                'id' => 1058,
                'name' => 'دورود',
                'province_id' => 26,
            ),
            58 => 
            array (
                'county_id' => 360,
                'id' => 1059,
                'name' => 'سراب دوره',
                'province_id' => 26,
            ),
            59 => 
            array (
                'county_id' => 360,
                'id' => 1060,
                'name' => 'ویسیان',
                'province_id' => 26,
            ),
            60 => 
            array (
                'county_id' => 361,
                'id' => 1061,
                'name' => 'چقابل',
                'province_id' => 26,
            ),
            61 => 
            array (
                'county_id' => 362,
                'id' => 1062,
                'name' => 'الشتر',
                'province_id' => 26,
            ),
            62 => 
            array (
                'county_id' => 362,
                'id' => 1063,
                'name' => 'فیروزآباد',
                'province_id' => 26,
            ),
            63 => 
            array (
                'county_id' => 363,
                'id' => 1064,
                'name' => 'درب گنبد',
                'province_id' => 26,
            ),
            64 => 
            array (
                'county_id' => 363,
                'id' => 1065,
                'name' => 'کوهدشت',
                'province_id' => 26,
            ),
            65 => 
            array (
                'county_id' => 363,
                'id' => 1066,
                'name' => 'کوهنانی',
                'province_id' => 26,
            ),
            66 => 
            array (
                'county_id' => 363,
                'id' => 1067,
                'name' => 'گراب',
                'province_id' => 26,
            ),
            67 => 
            array (
                'county_id' => 364,
                'id' => 1068,
                'name' => 'آمل',
                'province_id' => 27,
            ),
            68 => 
            array (
                'county_id' => 364,
                'id' => 1069,
                'name' => 'امامزاده عبدالله',
                'province_id' => 27,
            ),
            69 => 
            array (
                'county_id' => 364,
                'id' => 1070,
                'name' => 'دابودشت',
                'province_id' => 27,
            ),
            70 => 
            array (
                'county_id' => 364,
                'id' => 1071,
                'name' => 'رینه',
                'province_id' => 27,
            ),
            71 => 
            array (
                'county_id' => 364,
                'id' => 1072,
                'name' => 'گزنک',
                'province_id' => 27,
            ),
            72 => 
            array (
                'county_id' => 365,
                'id' => 1073,
                'name' => 'امیرکلا',
                'province_id' => 27,
            ),
            73 => 
            array (
                'county_id' => 365,
                'id' => 1074,
                'name' => 'بابل',
                'province_id' => 27,
            ),
            74 => 
            array (
                'county_id' => 365,
                'id' => 1075,
                'name' => 'خوش رودپی',
                'province_id' => 27,
            ),
            75 => 
            array (
                'county_id' => 365,
                'id' => 1076,
                'name' => 'زرگرمحله',
                'province_id' => 27,
            ),
            76 => 
            array (
                'county_id' => 365,
                'id' => 1077,
                'name' => 'گتاب',
                'province_id' => 27,
            ),
            77 => 
            array (
                'county_id' => 365,
                'id' => 1078,
                'name' => 'گلوگاه',
                'province_id' => 27,
            ),
            78 => 
            array (
                'county_id' => 365,
                'id' => 1079,
                'name' => 'مرزیکلا',
                'province_id' => 27,
            ),
            79 => 
            array (
                'county_id' => 366,
                'id' => 1080,
                'name' => 'بابلسر',
                'province_id' => 27,
            ),
            80 => 
            array (
                'county_id' => 366,
                'id' => 1081,
                'name' => 'بهنمیر',
                'province_id' => 27,
            ),
            81 => 
            array (
                'county_id' => 366,
                'id' => 1082,
                'name' => 'هادی شهر',
                'province_id' => 27,
            ),
            82 => 
            array (
                'county_id' => 367,
                'id' => 1083,
                'name' => 'بهشهر',
                'province_id' => 27,
            ),
            83 => 
            array (
                'county_id' => 367,
                'id' => 1084,
                'name' => 'خلیل شهر',
                'province_id' => 27,
            ),
            84 => 
            array (
                'county_id' => 367,
                'id' => 1085,
                'name' => 'رستمکلا',
                'province_id' => 27,
            ),
            85 => 
            array (
                'county_id' => 368,
                'id' => 1086,
                'name' => 'تنکابن',
                'province_id' => 27,
            ),
            86 => 
            array (
                'county_id' => 368,
                'id' => 1087,
                'name' => 'خرم آباد',
                'province_id' => 27,
            ),
            87 => 
            array (
                'county_id' => 368,
                'id' => 1088,
                'name' => 'شیرود',
                'province_id' => 27,
            ),
            88 => 
            array (
                'county_id' => 368,
                'id' => 1089,
                'name' => 'نشتارود',
                'province_id' => 27,
            ),
            89 => 
            array (
                'county_id' => 369,
                'id' => 1090,
                'name' => 'جویبار',
                'province_id' => 27,
            ),
            90 => 
            array (
                'county_id' => 369,
                'id' => 1091,
                'name' => 'کوهی خیل',
                'province_id' => 27,
            ),
            91 => 
            array (
                'county_id' => 370,
                'id' => 1092,
                'name' => 'چالوس',
                'province_id' => 27,
            ),
            92 => 
            array (
                'county_id' => 370,
                'id' => 1093,
                'name' => 'مرزن آباد',
                'province_id' => 27,
            ),
            93 => 
            array (
                'county_id' => 370,
                'id' => 1094,
                'name' => 'هچیرود',
                'province_id' => 27,
            ),
            94 => 
            array (
                'county_id' => 371,
                'id' => 1095,
                'name' => 'رامسر',
                'province_id' => 27,
            ),
            95 => 
            array (
                'county_id' => 371,
                'id' => 1096,
                'name' => 'کتالم وسادات شهر',
                'province_id' => 27,
            ),
            96 => 
            array (
                'county_id' => 372,
                'id' => 1097,
                'name' => 'پایین هولار',
                'province_id' => 27,
            ),
            97 => 
            array (
                'county_id' => 372,
                'id' => 1098,
                'name' => 'ساری',
                'province_id' => 27,
            ),
            98 => 
            array (
                'county_id' => 372,
                'id' => 1099,
                'name' => 'فریم',
                'province_id' => 27,
            ),
            99 => 
            array (
                'county_id' => 372,
                'id' => 1100,
                'name' => 'کیاسر',
                'province_id' => 27,
            ),
            100 => 
            array (
                'county_id' => 373,
                'id' => 1101,
                'name' => 'آلاشت',
                'province_id' => 27,
            ),
            101 => 
            array (
                'county_id' => 373,
                'id' => 1102,
                'name' => 'پل سفید',
                'province_id' => 27,
            ),
            102 => 
            array (
                'county_id' => 373,
                'id' => 1103,
                'name' => 'زیرآب',
                'province_id' => 27,
            ),
            103 => 
            array (
                'county_id' => 374,
                'id' => 1104,
                'name' => 'شیرگاه',
                'province_id' => 27,
            ),
            104 => 
            array (
                'county_id' => 375,
                'id' => 1105,
                'name' => 'کیاکلا',
                'province_id' => 27,
            ),
            105 => 
            array (
                'county_id' => 376,
                'id' => 1106,
                'name' => 'سلمان شهر',
                'province_id' => 27,
            ),
            106 => 
            array (
                'county_id' => 376,
                'id' => 1107,
                'name' => 'عباس اباد',
                'province_id' => 27,
            ),
            107 => 
            array (
                'county_id' => 376,
                'id' => 1108,
                'name' => 'کلارآباد',
                'province_id' => 27,
            ),
            108 => 
            array (
                'county_id' => 377,
                'id' => 1109,
                'name' => 'فریدونکنار',
                'province_id' => 27,
            ),
            109 => 
            array (
                'county_id' => 378,
                'id' => 1110,
                'name' => 'ارطه',
                'province_id' => 27,
            ),
            110 => 
            array (
                'county_id' => 378,
                'id' => 1111,
                'name' => 'قایم شهر',
                'province_id' => 27,
            ),
            111 => 
            array (
                'county_id' => 379,
                'id' => 1112,
                'name' => 'کلاردشت',
                'province_id' => 27,
            ),
            112 => 
            array (
                'county_id' => 380,
                'id' => 1113,
                'name' => 'گلوگاه',
                'province_id' => 27,
            ),
            113 => 
            array (
                'county_id' => 381,
                'id' => 1114,
                'name' => 'سرخرود',
                'province_id' => 27,
            ),
            114 => 
            array (
                'county_id' => 381,
                'id' => 1115,
                'name' => 'محمودآباد',
                'province_id' => 27,
            ),
            115 => 
            array (
                'county_id' => 382,
                'id' => 1116,
                'name' => 'سورک',
                'province_id' => 27,
            ),
            116 => 
            array (
                'county_id' => 383,
                'id' => 1117,
                'name' => 'نکا',
                'province_id' => 27,
            ),
            117 => 
            array (
                'county_id' => 384,
                'id' => 1118,
                'name' => 'ایزدشهر',
                'province_id' => 27,
            ),
            118 => 
            array (
                'county_id' => 384,
                'id' => 1119,
                'name' => 'بلده',
                'province_id' => 27,
            ),
            119 => 
            array (
                'county_id' => 384,
                'id' => 1120,
                'name' => 'چمستان',
                'province_id' => 27,
            ),
            120 => 
            array (
                'county_id' => 384,
                'id' => 1121,
                'name' => 'رویان',
                'province_id' => 27,
            ),
            121 => 
            array (
                'county_id' => 384,
                'id' => 1122,
                'name' => 'نور',
                'province_id' => 27,
            ),
            122 => 
            array (
                'county_id' => 385,
                'id' => 1123,
                'name' => 'پول',
                'province_id' => 27,
            ),
            123 => 
            array (
                'county_id' => 385,
                'id' => 1124,
                'name' => 'کجور',
                'province_id' => 27,
            ),
            124 => 
            array (
                'county_id' => 385,
                'id' => 1125,
                'name' => 'نوشهر',
                'province_id' => 27,
            ),
            125 => 
            array (
                'county_id' => 386,
                'id' => 1126,
                'name' => 'آشتیان',
                'province_id' => 28,
            ),
            126 => 
            array (
                'county_id' => 387,
                'id' => 1127,
                'name' => 'اراک',
                'province_id' => 28,
            ),
            127 => 
            array (
                'county_id' => 387,
                'id' => 1128,
                'name' => 'داودآباد',
                'province_id' => 28,
            ),
            128 => 
            array (
                'county_id' => 387,
                'id' => 1129,
                'name' => 'ساروق',
                'province_id' => 28,
            ),
            129 => 
            array (
                'county_id' => 387,
                'id' => 1130,
                'name' => 'کارچان',
                'province_id' => 28,
            ),
            130 => 
            array (
                'county_id' => 388,
                'id' => 1131,
                'name' => 'تفرش',
                'province_id' => 28,
            ),
            131 => 
            array (
                'county_id' => 389,
                'id' => 1132,
                'name' => 'خمین',
                'province_id' => 28,
            ),
            132 => 
            array (
                'county_id' => 389,
                'id' => 1133,
                'name' => 'قورچی باشی',
                'province_id' => 28,
            ),
            133 => 
            array (
                'county_id' => 390,
                'id' => 1134,
                'name' => 'جاورسیان',
                'province_id' => 28,
            ),
            134 => 
            array (
                'county_id' => 390,
                'id' => 1135,
                'name' => 'خنداب',
                'province_id' => 28,
            ),
            135 => 
            array (
                'county_id' => 391,
                'id' => 1136,
                'name' => 'دلیجان',
                'province_id' => 28,
            ),
            136 => 
            array (
                'county_id' => 391,
                'id' => 1137,
                'name' => 'نراق',
                'province_id' => 28,
            ),
            137 => 
            array (
                'county_id' => 392,
                'id' => 1138,
                'name' => 'پرندک',
                'province_id' => 28,
            ),
            138 => 
            array (
                'county_id' => 392,
                'id' => 1139,
                'name' => 'خشکرود',
                'province_id' => 28,
            ),
            139 => 
            array (
                'county_id' => 392,
                'id' => 1140,
                'name' => 'رازقان',
                'province_id' => 28,
            ),
            140 => 
            array (
                'county_id' => 392,
                'id' => 1141,
                'name' => 'زاویه',
                'province_id' => 28,
            ),
            141 => 
            array (
                'county_id' => 392,
                'id' => 1142,
                'name' => 'مامونیه',
                'province_id' => 28,
            ),
            142 => 
            array (
                'county_id' => 393,
                'id' => 1143,
                'name' => 'آوه',
                'province_id' => 28,
            ),
            143 => 
            array (
                'county_id' => 393,
                'id' => 1144,
                'name' => 'ساوه',
                'province_id' => 28,
            ),
            144 => 
            array (
                'county_id' => 393,
                'id' => 1145,
                'name' => 'غرق آباد',
                'province_id' => 28,
            ),
            145 => 
            array (
                'county_id' => 393,
                'id' => 1146,
                'name' => 'نوبران',
                'province_id' => 28,
            ),
            146 => 
            array (
                'county_id' => 394,
                'id' => 1147,
                'name' => 'آستانه',
                'province_id' => 28,
            ),
            147 => 
            array (
                'county_id' => 394,
                'id' => 1148,
                'name' => 'توره',
                'province_id' => 28,
            ),
            148 => 
            array (
                'county_id' => 394,
                'id' => 1149,
                'name' => 'شازند',
                'province_id' => 28,
            ),
            149 => 
            array (
                'county_id' => 394,
                'id' => 1150,
                'name' => 'شهباز',
                'province_id' => 28,
            ),
            150 => 
            array (
                'county_id' => 394,
                'id' => 1151,
                'name' => 'مهاجران',
                'province_id' => 28,
            ),
            151 => 
            array (
                'county_id' => 394,
                'id' => 1152,
                'name' => 'هندودر',
                'province_id' => 28,
            ),
            152 => 
            array (
                'county_id' => 395,
                'id' => 1153,
                'name' => 'خنجین',
                'province_id' => 28,
            ),
            153 => 
            array (
                'county_id' => 395,
                'id' => 1154,
                'name' => 'فرمهین',
                'province_id' => 28,
            ),
            154 => 
            array (
                'county_id' => 396,
                'id' => 1155,
                'name' => 'کمیجان',
                'province_id' => 28,
            ),
            155 => 
            array (
                'county_id' => 396,
                'id' => 1156,
                'name' => 'میلاجرد',
                'province_id' => 28,
            ),
            156 => 
            array (
                'county_id' => 397,
                'id' => 1157,
                'name' => 'محلات',
                'province_id' => 28,
            ),
            157 => 
            array (
                'county_id' => 397,
                'id' => 1158,
                'name' => 'نیمور',
                'province_id' => 28,
            ),
            158 => 
            array (
                'county_id' => 398,
                'id' => 1159,
                'name' => 'ابوموسی',
                'province_id' => 29,
            ),
            159 => 
            array (
                'county_id' => 399,
                'id' => 1160,
                'name' => 'بستک',
                'province_id' => 29,
            ),
            160 => 
            array (
                'county_id' => 399,
                'id' => 1161,
                'name' => 'جناح',
                'province_id' => 29,
            ),
            161 => 
            array (
                'county_id' => 400,
                'id' => 1162,
                'name' => 'سردشت',
                'province_id' => 29,
            ),
            162 => 
            array (
                'county_id' => 400,
                'id' => 1163,
                'name' => 'گوهران',
                'province_id' => 29,
            ),
            163 => 
            array (
                'county_id' => 401,
                'id' => 1164,
                'name' => 'بندرعباس',
                'province_id' => 29,
            ),
            164 => 
            array (
                'county_id' => 401,
                'id' => 1165,
                'name' => 'تازیان پایین',
                'province_id' => 29,
            ),
            165 => 
            array (
                'county_id' => 401,
                'id' => 1166,
                'name' => 'تخت',
                'province_id' => 29,
            ),
            166 => 
            array (
                'county_id' => 401,
                'id' => 1167,
                'name' => 'فین',
                'province_id' => 29,
            ),
            167 => 
            array (
                'county_id' => 401,
                'id' => 1168,
                'name' => 'قلعه قاضی',
                'province_id' => 29,
            ),
            168 => 
            array (
                'county_id' => 402,
                'id' => 1169,
                'name' => 'بندرلنگه',
                'province_id' => 29,
            ),
            169 => 
            array (
                'county_id' => 402,
                'id' => 1170,
                'name' => 'چارک',
                'province_id' => 29,
            ),
            170 => 
            array (
                'county_id' => 402,
                'id' => 1171,
                'name' => 'کنگ',
                'province_id' => 29,
            ),
            171 => 
            array (
                'county_id' => 402,
                'id' => 1172,
                'name' => 'کیش',
                'province_id' => 29,
            ),
            172 => 
            array (
                'county_id' => 402,
                'id' => 1173,
                'name' => 'لمزان',
                'province_id' => 29,
            ),
            173 => 
            array (
                'county_id' => 403,
                'id' => 1174,
                'name' => 'پارسیان',
                'province_id' => 29,
            ),
            174 => 
            array (
                'county_id' => 403,
                'id' => 1175,
                'name' => 'دشتی',
                'province_id' => 29,
            ),
            175 => 
            array (
                'county_id' => 403,
                'id' => 1176,
                'name' => 'کوشکنار',
                'province_id' => 29,
            ),
            176 => 
            array (
                'county_id' => 404,
                'id' => 1177,
                'name' => 'بندرجاسک',
                'province_id' => 29,
            ),
            177 => 
            array (
                'county_id' => 405,
                'id' => 1178,
                'name' => 'حاجی اباد',
                'province_id' => 29,
            ),
            178 => 
            array (
                'county_id' => 405,
                'id' => 1179,
                'name' => 'سرگز',
                'province_id' => 29,
            ),
            179 => 
            array (
                'county_id' => 405,
                'id' => 1180,
                'name' => 'فارغان',
                'province_id' => 29,
            ),
            180 => 
            array (
                'county_id' => 406,
                'id' => 1181,
                'name' => 'خمیر',
                'province_id' => 29,
            ),
            181 => 
            array (
                'county_id' => 406,
                'id' => 1182,
                'name' => 'رویدر',
                'province_id' => 29,
            ),
            182 => 
            array (
                'county_id' => 407,
                'id' => 1183,
                'name' => 'بیکاء',
                'province_id' => 29,
            ),
            183 => 
            array (
                'county_id' => 407,
                'id' => 1184,
                'name' => 'دهبارز',
                'province_id' => 29,
            ),
            184 => 
            array (
                'county_id' => 407,
                'id' => 1185,
                'name' => 'زیارتعلی',
                'province_id' => 29,
            ),
            185 => 
            array (
                'county_id' => 408,
                'id' => 1186,
                'name' => 'سیریک',
                'province_id' => 29,
            ),
            186 => 
            array (
                'county_id' => 408,
                'id' => 1187,
                'name' => 'کوهستک',
                'province_id' => 29,
            ),
            187 => 
            array (
                'county_id' => 408,
                'id' => 1188,
                'name' => 'گروک',
                'province_id' => 29,
            ),
            188 => 
            array (
                'county_id' => 409,
                'id' => 1189,
                'name' => 'درگهان',
                'province_id' => 29,
            ),
            189 => 
            array (
                'county_id' => 409,
                'id' => 1190,
                'name' => 'سوزا',
                'province_id' => 29,
            ),
            190 => 
            array (
                'county_id' => 409,
                'id' => 1191,
                'name' => 'قشم',
                'province_id' => 29,
            ),
            191 => 
            array (
                'county_id' => 409,
                'id' => 1192,
                'name' => 'هرمز',
                'province_id' => 29,
            ),
            192 => 
            array (
                'county_id' => 410,
                'id' => 1193,
                'name' => 'تیرور',
                'province_id' => 29,
            ),
            193 => 
            array (
                'county_id' => 410,
                'id' => 1194,
                'name' => 'سندرک',
                'province_id' => 29,
            ),
            194 => 
            array (
                'county_id' => 410,
                'id' => 1195,
                'name' => 'میناب',
                'province_id' => 29,
            ),
            195 => 
            array (
                'county_id' => 410,
                'id' => 1196,
                'name' => 'هشتبندی',
                'province_id' => 29,
            ),
            196 => 
            array (
                'county_id' => 411,
                'id' => 1197,
                'name' => 'آجین',
                'province_id' => 30,
            ),
            197 => 
            array (
                'county_id' => 411,
                'id' => 1198,
                'name' => 'اسدآباد',
                'province_id' => 30,
            ),
            198 => 
            array (
                'county_id' => 412,
                'id' => 1199,
                'name' => 'بهار',
                'province_id' => 30,
            ),
            199 => 
            array (
                'county_id' => 412,
                'id' => 1200,
                'name' => 'صالح آباد',
                'province_id' => 30,
            ),
            200 => 
            array (
                'county_id' => 412,
                'id' => 1201,
                'name' => 'لالجین',
                'province_id' => 30,
            ),
            201 => 
            array (
                'county_id' => 412,
                'id' => 1202,
                'name' => 'مهاجران',
                'province_id' => 30,
            ),
            202 => 
            array (
                'county_id' => 413,
                'id' => 1203,
                'name' => 'تویسرکان',
                'province_id' => 30,
            ),
            203 => 
            array (
                'county_id' => 413,
                'id' => 1204,
                'name' => 'سرکان',
                'province_id' => 30,
            ),
            204 => 
            array (
                'county_id' => 413,
                'id' => 1205,
                'name' => 'فرسفج',
                'province_id' => 30,
            ),
            205 => 
            array (
                'county_id' => 414,
                'id' => 1206,
                'name' => 'دمق',
                'province_id' => 30,
            ),
            206 => 
            array (
                'county_id' => 414,
                'id' => 1207,
                'name' => 'رزن',
                'province_id' => 30,
            ),
            207 => 
            array (
                'county_id' => 414,
                'id' => 1208,
                'name' => 'قروه درجزین',
                'province_id' => 30,
            ),
            208 => 
            array (
                'county_id' => 415,
                'id' => 1209,
                'name' => 'فامنین',
                'province_id' => 30,
            ),
            209 => 
            array (
                'county_id' => 416,
                'id' => 1210,
                'name' => 'شیرین سو',
                'province_id' => 30,
            ),
            210 => 
            array (
                'county_id' => 416,
                'id' => 1211,
                'name' => 'کبودرآهنگ',
                'province_id' => 30,
            ),
            211 => 
            array (
                'county_id' => 416,
                'id' => 1212,
                'name' => 'گل تپه',
                'province_id' => 30,
            ),
            212 => 
            array (
                'county_id' => 417,
                'id' => 1213,
                'name' => 'ازندریان',
                'province_id' => 30,
            ),
            213 => 
            array (
                'county_id' => 417,
                'id' => 1214,
                'name' => 'جوکار',
                'province_id' => 30,
            ),
            214 => 
            array (
                'county_id' => 417,
                'id' => 1215,
                'name' => 'زنگنه',
                'province_id' => 30,
            ),
            215 => 
            array (
                'county_id' => 417,
                'id' => 1216,
                'name' => 'سامن',
                'province_id' => 30,
            ),
            216 => 
            array (
                'county_id' => 417,
                'id' => 1217,
                'name' => 'ملایر',
                'province_id' => 30,
            ),
            217 => 
            array (
                'county_id' => 418,
                'id' => 1218,
                'name' => 'برزول',
                'province_id' => 30,
            ),
            218 => 
            array (
                'county_id' => 418,
                'id' => 1219,
                'name' => 'فیروزان',
                'province_id' => 30,
            ),
            219 => 
            array (
                'county_id' => 418,
                'id' => 1220,
                'name' => 'گیان',
                'province_id' => 30,
            ),
            220 => 
            array (
                'county_id' => 418,
                'id' => 1221,
                'name' => 'نهاوند',
                'province_id' => 30,
            ),
            221 => 
            array (
                'county_id' => 419,
                'id' => 1222,
                'name' => 'جورقان',
                'province_id' => 30,
            ),
            222 => 
            array (
                'county_id' => 419,
                'id' => 1223,
                'name' => 'قهاوند',
                'province_id' => 30,
            ),
            223 => 
            array (
                'county_id' => 419,
                'id' => 1224,
                'name' => 'مریانج',
                'province_id' => 30,
            ),
            224 => 
            array (
                'county_id' => 419,
                'id' => 1225,
                'name' => 'همدان',
                'province_id' => 30,
            ),
            225 => 
            array (
                'county_id' => 420,
                'id' => 1226,
                'name' => 'ابرکوه',
                'province_id' => 31,
            ),
            226 => 
            array (
                'county_id' => 420,
                'id' => 1227,
                'name' => 'مهردشت',
                'province_id' => 31,
            ),
            227 => 
            array (
                'county_id' => 421,
                'id' => 1228,
                'name' => 'احمدآباد',
                'province_id' => 31,
            ),
            228 => 
            array (
                'county_id' => 421,
                'id' => 1229,
                'name' => 'اردکان',
                'province_id' => 31,
            ),
            229 => 
            array (
                'county_id' => 421,
                'id' => 1230,
                'name' => 'عقدا',
                'province_id' => 31,
            ),
            230 => 
            array (
                'county_id' => 422,
                'id' => 1231,
                'name' => 'اشکذر',
                'province_id' => 31,
            ),
            231 => 
            array (
                'county_id' => 422,
                'id' => 1232,
                'name' => 'خضرآباد',
                'province_id' => 31,
            ),
            232 => 
            array (
                'county_id' => 423,
                'id' => 1233,
                'name' => 'بافق',
                'province_id' => 31,
            ),
            233 => 
            array (
                'county_id' => 424,
                'id' => 1234,
                'name' => 'بهاباد',
                'province_id' => 31,
            ),
            234 => 
            array (
                'county_id' => 425,
                'id' => 1235,
                'name' => 'تفت',
                'province_id' => 31,
            ),
            235 => 
            array (
                'county_id' => 425,
                'id' => 1236,
                'name' => 'نیر',
                'province_id' => 31,
            ),
            236 => 
            array (
                'county_id' => 426,
                'id' => 1237,
                'name' => 'مروست',
                'province_id' => 31,
            ),
            237 => 
            array (
                'county_id' => 426,
                'id' => 1238,
                'name' => 'هرات',
                'province_id' => 31,
            ),
            238 => 
            array (
                'county_id' => 427,
                'id' => 1239,
                'name' => 'مهریز',
                'province_id' => 31,
            ),
            239 => 
            array (
                'county_id' => 428,
                'id' => 1240,
                'name' => 'بفروییه',
                'province_id' => 31,
            ),
            240 => 
            array (
                'county_id' => 428,
                'id' => 1241,
                'name' => 'میبد',
                'province_id' => 31,
            ),
            241 => 
            array (
                'county_id' => 428,
                'id' => 1242,
                'name' => 'ندوشن',
                'province_id' => 31,
            ),
            242 => 
            array (
                'county_id' => 429,
                'id' => 1243,
                'name' => 'حمیدیا',
                'province_id' => 31,
            ),
            243 => 
            array (
                'county_id' => 429,
                'id' => 1244,
                'name' => 'زارچ',
                'province_id' => 31,
            ),
            244 => 
            array (
                'county_id' => 429,
                'id' => 1245,
                'name' => 'شاهدیه',
                'province_id' => 31,
            ),
            245 => 
            array (
                'county_id' => 429,
                'id' => 1246,
                'name' => 'یزد',
                'province_id' => 31,
            ),
        ));
        
        
    }
}